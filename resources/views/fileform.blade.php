@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="card">
                <div class="card-header">Upload New File</div> 
                <div class="card-body">  
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                            <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                            <label>File</label>
                            <input type="file" name="file">
                            <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
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
@endsection