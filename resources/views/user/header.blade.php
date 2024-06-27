<!DOCTYPE html>
<html lang="en">

<head>
    <title>Free Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('user/assets/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/style.css') }}" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="{{ asset('user/assets/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('user/assets/script.js') }}"></script>



    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/owl-carousel/owl.theme.css') }}">
    <script src="{{ asset('user/assets/owl-carousel/owl.carousel.js') }}"></script>
    <!-- Owl stylesheet -->


    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/slitslider/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/slitslider/css/custom.css') }}" />
    <script type="text/javascript" src="{{ asset('user/assets/slitslider/js/modernizr.custom.79639.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/assets/slitslider/js/jquery.ba-cond.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/assets/slitslider/js/jquery.slitslider.js') }}"></script>
    <!-- slitslider -->

</head>

<body>


    <!-- Header Starts -->
    <div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
            <div class="container">
                <!-- <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div> -->


                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/agents') }}">Agents</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                            <li>
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>


                        @endauth
                </div>
                @endif
                </li>
                </ul>
            </div>
            <!-- #Nav Ends -->

        </div>
    </div>

    </div>
    <!-- #Header Starts -->





    <div class="container">

        <!-- Header Starts -->
        <div class="header">
            <a href="index.php"><img width="100" height="100" src="{{ asset('user/images/1.png') }}"
                    alt="Realestate"></a>

            <ul class="pull-right">
                <li><a href="{{ url('addproperty') }}" class="btn btn-success">إضافة عقار</a></li>

            </ul>
        </div>
        <!-- #Header Starts -->
    </div>
