@include('user.header')

<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Buy, Sale & Rent</h3>
        <div class="searchbar">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <form action="{{ url('/searchproperty') }}" method="GET">
                        @csrf
                        <input type="text" name="searchtext" class="form-control" placeholder="Search of Properties">
                        <div class="row">

                            <div class="col-lg-3 col-sm-4">
                                <select class="form-control" name="searchprice">
                                    <option>Price</option>
                                    <option value="1">Less than $100,000</option>
                                    <option value="2">Less than $500,000</option>
                                    <option value="3">Less than $1000,000</option>
                                    <option value="4">$1000,000 - above</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <select class="form-control" name="type">
                                    <option>Property</option>
                                    @foreach ($propertytypes as $type)
                                        <option value="{{ $type->id }}">{{ $type->Description }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <button class="btn btn-success">Find
                                    Now</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- banner -->
<div class="container">
    <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">View All Listing</a>
        <h2>Featured Properties</h2>
        <div id="owl-example" class="owl-carousel">
            @foreach ($properties as $property)
                <div class="properties">
                    <div class="image-holder"><img src="{{ asset('user/images/properties/1.jpg ') }}"
                            class="img-responsive" alt="properties" />
                        <div class="status sold">{{ $property->status }}</div>
                    </div>
                    <h4><a href="property-detail.php">{{ $property->name }}</a></h4>
                    <p class="price">Price: ${{ $property->price }}</p>
                    <div class="listing-detail">
                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span>
                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span>
                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span>
                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span>
                    </div>
                    <a class="btn btn-primary" href="{{ url('/showpropdetail', $property->id) }}">View Details</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="spacer">
        <div class="row">
            <div class="col-lg-6 col-sm-9 recent-view">
                <h3>About Us</h3>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                    Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in
                    their exact original form, accompanied by English versions from the 1914 translation by H.
                    Rackham.<br><a href="about.php">Learn More</a></p>

            </div>

        </div>
    </div>
</div>
@include('user.footer')
