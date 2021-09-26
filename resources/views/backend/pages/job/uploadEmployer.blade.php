@extends('backend.master.master')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Employer List Upload</li>
        </ol>
        @include('backend.layouts.message')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-12">
            <form action="{{ route ('bulkUploadEmployer') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Employer List</label>
                    <input type="file" name="file" class="form-control-file">
                  </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>

@stop
