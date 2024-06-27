@extends('layouts.admin.master')
@section('title', 'Add Property')
@section('bread-crumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Update Property</h4>
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
            <div class="card">
                <form class="form-horizontal" action="{{ route('properties.update', $property->id) }}"
                    enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Name Here" name="name"
                                    value="{{ $property->name }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Description Here" name="description"
                                    value="{{ $property->description }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Status Here" name="status"
                                    value="{{ $property->status }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" placeholder="Price Here" name="price"
                                    value="{{ $property->price }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Property
                                Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="type">
                                    @foreach ($allTypes as $type)
                                        <option @selected($property->propertytype_id == $type->id) value="{{ $type->id }}">
                                            {{ $type->Description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
