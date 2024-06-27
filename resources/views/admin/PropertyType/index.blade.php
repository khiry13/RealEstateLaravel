@extends('layouts.admin.master')
@section('title', 'All Property Types')
@section('bread-crumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Property Types</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Add New</a>
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
        <div class="col-md-12">
            <form action="{{ url('storepropertytype') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Property Type</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter Property Type">
                </div>
                <button type="submit" class="btn btn-primary">Add Property Type</button>
            </form>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id</th>
                        <th scope="col">Description</th>
                        <th scope="col">Admin Id</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allTypes as $type)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->Description }}</td>
                            <td>{{ $type->AdminId }}</td>
                            <td>
                                <form action="{{ url('deletepropertytype', $type->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
