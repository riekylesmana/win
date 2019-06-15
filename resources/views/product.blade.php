@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header">Import Excel File</div> 
                <div class="card-body">  
						<center>
							<h4>Import Excel  </h4> 
						</center>
				
						{{-- notifikasi form validasi --}}
						@if ($errors->has('file'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('file') }}</strong>
						</span>
						@endif
				
						{{-- notifikasi sukses --}}
						@if ($sukses = Session::get('sukses'))
						<div class="alert alert-success alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button> 
							<strong>{{ $sukses }}</strong>
						</div>
						@endif
				
						<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
							IMPORT EXCEL
						</button>
				
						<!-- Import Excel -->
						<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<form method="post" action="{{ url('/product/import_excel')}}" enctype="multipart/form-data">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
										</div>
										<div class="modal-body">
				
											{{ csrf_field() }}
				
											<label>Pilih file excel</label>
											<div class="form-group">
												<input type="file" name="file" required="required">
											</div>
				
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Import</button>
										</div>
									</div>
								</form>
							</div>
						</div>
				
				
						
						<a href="{{ url('/product/export_excel')}} " class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
				
						<table class='table table-bordered'>
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Qty</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								@php $i=1 @endphp
								@foreach($product as $s)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{$s->name}}</td>
									<td>{{$s->qty}}</td>
									<td>{{$s->price}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
            </div>
        </div>
    </div>
</div>
				
				
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				
</body>
</html>

<form method="post" action="{{ url('/product/import_excel')}} " enctype="multipart/form-data" >
	<div class="modal-content" style="display:none;">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
		</div>
		<div class="modal-body">

			{{ csrf_field() }}

			<label>Pilih file excel</label>
			<div class="form-group">
				<input type="file" name="file" required="required">
			</div>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Import</button>
		</div>
	</div>
</form>
@endsection
