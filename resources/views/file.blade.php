@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header">Upload New File</div> 
                <div class="card-body">  
                <div class="panel-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <p>
                        <a href="{{ route('file.form') }}" class="btn btn-primary">Upload File</a>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Path</th>
                                    <th>URL</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{ $file->title }}</td>
                                        <td>{{ $file->filename }}</td>
                                        <td>
                                            <a href="{{ url('')}}{{ Storage::url($file->filename) }}">
                                                View
                                            </a>
                                        </td>
                                        <td>{{ $file->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

















