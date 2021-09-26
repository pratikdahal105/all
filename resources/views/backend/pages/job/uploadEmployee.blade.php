@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employee List Upload</li>
        </ol>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-12">
            <form action="{{ route ('bulkUploadEmployee') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Employee List</label>
                    <input type="file" name="file" class="form-control-file">
                  </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>

@stop
