@include('user.header')
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / Buy</span>
        <h2>Buy</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="properties-listing spacer">

        <div class="row">


            <div class="col-lg-12 col-sm-8 ">

                <h2>{{ $property->name }}</h2>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="property-images">
                            <!-- Slider Starts -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators hidden-xs">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <!-- Item 1 -->
                                    <div class="item active">
                                        <img src="{{ asset('user/images/properties/2.jpg ') }}" class="properties"
                                            alt="properties" />

                                    </div>
                                    <!-- #Item 1 -->

                                    <!-- Item 2 -->
                                    @foreach ($propertyImages as $propImg)
                                        <div class="item">
                                            <img src="{{ asset($propImg->image) }}" class="properties"
                                                alt="properties" />
                                        </div>
                                    @endforeach
                                    <!-- #Item 2 -->
                                </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                            <!-- #Slider Ends -->

                        </div>

                        <div class="spacer">
                            <h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
                            <h3>{{ $property->description }}.</h3>

                        </div>
                        {{-- <div>
                            <h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
                            <div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no"
                                    marginheight="0" marginwidth="0"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13813.242694188486!2d31.31980784882867!3d30.05662807107522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e5d94c66301%3A0xddddf100de42206c!2sNasr%20City%2C%20Al%20Manteqah%20Al%20Oula%2C%20Nasr%20City%2C%20Cairo%20Governorate%204450113!5e0!3m2!1sen!2seg!4v1713639295322!5m2!1sen!2seg"></iframe>
                            </div>
                        </div> --}}

                    </div>
                    <div class="col-lg-4">
                        <div class="col-lg-12  col-sm-6">
                            <div class="property-info">
                                <p class="price">$ {{ $property->price }}</p>
                                <p class="area"><span class="glyphicon glyphicon-map-marker"></span> 344 Villa, Nasr
                                    City,
                                    Cairo</p>

                                <div class="profile">
                                    <span class="glyphicon glyphicon-user"></span> Agent Details
                                    <p>Mohammed Ahmed<br>12345678</p>
                                </div>
                            </div>

                            <h6><span class="glyphicon glyphicon-home"></span> {{ $property->status }}</h6>
                            <div class="listing-detail">
                                <span data-toggle="tooltip" data-placement="bottom"
                                    data-original-title="Bed Room">5</span> <span data-toggle="tooltip"
                                    data-placement="bottom" data-original-title="Living Room">2</span> <span
                                    data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span>
                                <span data-toggle="tooltip" data-placement="bottom"
                                    data-original-title="Kitchen">1</span>
                            </div>

                        </div>
                        <div class="col-lg-12 col-sm-6 ">
                            <div class="enquiry">
                                <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <form role="form" action="{{ url('/buyproperty') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="property_id" value="{{ $property->id }}">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" />
                                    <input type="text" name="email" class="form-control"
                                        placeholder="you@yourdomain.com" />
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="your number" />
                                    <textarea rows="6" name="message" class="form-control" placeholder="Whats on your mind?"></textarea>
                                    <button type="submit" class="btn btn-primary" name="Submit">Send
                                        Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('user.footer')
