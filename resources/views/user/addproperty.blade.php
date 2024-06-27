@include('user.header')

<div class="container">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body" style="margin-bottom: 40px">
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                x
                            </button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form class="forms-sample" action="{{ url('storeproperty') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Your Name</label>
                            <input type="text" class="form-control" style="color: black" id="exampleInputName1"
                                name="name" placeholder="Write your name" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone3">Your Email</label>
                            <input type="text" class="form-control" style="color: black" id="exampleInputPhone3"
                                name="email" placeholder="Write your email" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone3">Your Phone</label>
                            <input type="text" class="form-control" style="color: black" id="exampleInputPhone3"
                                name="phone" placeholder="Write your contact number" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone3">Address and Type of property</label>
                            <input type="text" class="form-control" style="color: black" id="exampleInputPhone3"
                                name="address" placeholder="Write the address and type of property" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone3">Description</label>
                            <input type="text" class="form-control" style="color: black" id="exampleInputPhone3"
                                name="description" placeholder="Write more details of the property" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone3">Price</label>
                            <input type="number" class="form-control" style="color: black" id="exampleInputPhone3"
                                name="price" placeholder="Write the price that you want" />
                        </div>
                        <div class="form-group">
                            <label>Property Image</label>
                            <input type="file" name="image" />
                        </div>
                        <button type="submit" class="btn btn-primary me-2">
                            Submit
                        </button>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@include('user.footer')
