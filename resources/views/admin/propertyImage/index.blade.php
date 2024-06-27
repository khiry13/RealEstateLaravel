@extends('layouts.admin.master')
@section('title', 'All Property')
{{-- @section('css')
    <link href="{{ asset('admin/assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endsection --}}
@section('bread-crumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Property Images</h4>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Upload Property Images
                            <a href="{{ route('properties.index') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <h5>Property Name: {{ $property->name }}</h5>
                        <hr>
                        @if ($errors->any())
                            <ul class="alert alert-warning">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ url('property/' . $property->id . '/uploadimage') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Upload Images</label>
                                <input type="file" name="images[]" multiple class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                @foreach ($propertyImages as $propImg)
                    <img src="{{ asset($propImg->image) }}" class="border p-2 m-3" style="width: 200px; height: 200px;"
                        alt="Img">
                    <a href="{{ url('property-image/' . $propImg->id . '/delete') }}" class="btn btn-danger">Remove</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
{{-- @section('js')
    <!-- this page js -->
    <script src="{{ asset('admin/assets/js/datatables.min.js') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $("#zero_config").DataTable();
    </script>
@endsection --}}
