<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
 
use App\Product;
 
use Session;
  
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
	{
		$product = Product::all();
		return view('product',['product'=>$product]);
	}
 
	public function export_excel()
	{
		return Excel::download(new ProductExport, 'product.xlsx');
	}
 
	public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_product di dalam folder public
		$file->move('file_product',$nama_file);
 
		// import data
		Excel::import(new ProductImport, public_path('/file_product/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data product Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/product');
	}
}
