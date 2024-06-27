@extends('layouts.admin.master')
@section('title', 'All Property')
@section('css')
    <link href="{{ asset('admin/assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endsection
@section('bread-crumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Properties</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="{{ route('properties.create') }}">Add New</a>
                            </li>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Basic Datatable</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Property Type</th>
                                    <th>Images</th>
                                    <th>Actions</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $property)
                                    <tr>
                                        <td>{{ $property->id }}</td>
                                        <td>{{ $property->name }}</td>
                                        <td>{{ $property->description }}</td>
                                        <td>{{ $property->status }}</td>
                                        <td>{{ $property->price }}</td>
                                        <td>{{ $property->propertytype->Description }}</td>
                                        <td><a href="{{ url('property/' . $property->id . '/uploadimage') }}"
                                                class="btn btn-info">Add / View images</a></td>
                                        <td>
                                            <a href="{{ route('properties.edit', $property->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form style="display: inline-block"
                                                action="{{ route('properties.destroy', $property->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                        <td><a href="{{ url('showmessages/' . $property->id) }}"
                                                class="btn btn-info">Messages</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Property Type</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- this page js -->
    <script src="{{ asset('admin/assets/js/datatables.min.js') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $("#zero_config").DataTable();
    </script>
@endsection
