@extends('layouts.main')
@section('title', 'Home - De bay lux Hotel & Suites')
@section('header')
   @include('layouts.head')
@endsection
    
    <!--HEADER-->
    <!--MAIN PAGE-->
      @section('content')
           <!-- Intro -->
        <section id="intro" class="intro-search-box">
            <div class="intro-container">
                <div id="introHome" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <!-- Dots -->
                    <ol class="carousel-indicators"></ol>
                    <!-- Dots -->
                    <!-- carousel list item -->
                    <div class="carousel-inner">
                        <!-- carousel item -->
                        <div class="carousel-item active" data-image-src="assets/img/PHOTO-2022-12-22-14-16-34.jpg" >
                            <div class="carousel-container content-left">
                                <div class="container">
                                    <div class="row justify-content-sm-start">
                                        <div class="col-12 col-xl-6 col-lg-7">
                                            <div class="carousel-content">
                                                <h2 class="title animated fadeInUp">Welome To </h2>
                                                <!-- <h4 class="title text-white"></h4> -->
                                                <p class="desc animated fadeInUp animated-15"> De Bay Lux Hotel & SUITES, At the De Bay Lux Hotel & Suites we believe that guests satisfaction is in the extra service,not eye service but high service</p>
                                                <a href="about.html" class="scroll-to btn btn-outline-white scrollto animated fadeInUp animated-15">
                                                    <span>Read more</span>
                                                    <i class="las la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- carousel item -->
                        <!-- carousel item -->
                        <div class="carousel-item" data-image-src="assets/img/PHOTO-2022-12-22-14-16-04.jpg">
                            <div class="carousel-container content-left">
                                <div class="container">
                                    <div class="row justify-content-sm-start">
                                        <div class="col-12 col-xl-6 col-lg-7">
                                            <div class="carousel-content">
                                                <h2 class="title animated fadeInUp">De Bay Lux Hotel & SUITES</h2>
                                                <p class="desc animated fadeInUp animated-15">To define Hospitality in practicality and become the standard for hospitality</p>
                                                <a href="about.html" class="scroll-to btn btn-outline-white scrollto animated fadeInUp animated-15">
                                                    <span>Read more</span>
                                                    <i class="las la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- carousel item -->
                        <!-- carousel item -->
                        <div class="carousel-item" data-image-src="assets/img/PHOTO-2022-12-22-14-16-33.jpg">
                            <div class="carousel-container content-left">
                                <div class="container">
                                    <div class="row justify-content-sm-start">
                                        <div class="col-12 col-xl-6 col-lg-7">
                                            <div class="carousel-content">
                                                <h2 class="title animated fadeInUp">De Bay Lux Hotel & SUITES</h2>
                                                <p class="desc animated fadeInUp animated-15">To exceed guests expectations, 89% full occupancy and maintain high profitability</p>
                                                <a href="about.html" class="scroll-to btn btn-outline-white scrollto animated fadeInUp animated-15">
                                                    <span>Read more</span>
                                                    <i class="las la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- carousel item -->
                        <!-- carousel item -->
                        <div class="carousel-item" data-image-src="assets/img/PHOTO-2022-12-22-14-16-03.jpg">
                            <div class="carousel-container content-left">
                                <div class="container">
                                    <div class="row justify-content-sm-start">
                                        <div class="col-12 col-xl-6 col-lg-7">
                                            <div class="carousel-content">
                                                <h2 class="title animated fadeInUp">De Bay Lux Hotel & SUITES</h2>
                                                <p class="desc animated fadeInUp animated-15"><span>DE BAY L HOTEL  & Suites</span>
                                                    features six dynamic and innovative outlets, all with superb decor and relaxing ambience. 
                                                </p>
                                                <a href="about.html" class="scroll-to btn btn-outline-white scrollto animated fadeInUp animated-15">
                                                    <span>Read more</span>
                                                    <i class="las la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- carousel item -->
                    </div>
                    <!-- carousel list item -->
                </div>
                <!-- Check Room -->
                <div class="search-check-room check-room-absolute">
                    <div class="container position-relative">
                        {{-- <div class="check-room-box">
                            <div class="row g-2">
                                <div class="col-12 col-lg-6">
                                    <div class="daterange-checkroom">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <label class="text-white" for="">Check-in</label>
                                                <div class="daterange-box">
                                                    <input type="text" class="daterange-checkin form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="text-white" for="">Check-Out</label>
                                                <div class="daterange-box">
                                                    <input type="text" class="daterange-checkout form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row g-2">
                                        <div class="col-12 col-lg-7 col-md-8">
                                            <div class="row g-2">
                                                <div class="col-6">
                                                    <!-- <label for="Adults">Adults</label> -->
                                                    <select class="form-select mt-4">
                                                        <option selected="">Adults</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <!-- <label for="Children">Children</label> -->
                                                    <select class="form-select mt-4">
                                                        <option selected="">Children</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-5 col-md-4">
                                            <div class="mb-3 mt-4">
                                                <a href="#" class="btn btn-primary w-100">
                                                    <i class="las la-search"></i>
                                                    <span>Check Rooms</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Nav Intro -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#introHome" data-bs-slide="prev">
                            <span><i class="las la-angle-left"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#introHome" data-bs-slide="next">
                            <span><i class="las la-angle-right"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <!-- Nav Intro -->
                    </div>
                </div>
                <!-- Check Room -->
            </div>
        </section>
        <!-- Intro -->
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <!-- About -->
            <section id="about" class="pt-13 pb-10">
                <div class="container">
                    <div class="row align-items-start align-items-md-stretch">
                        <div class="col-12 col-lg-6">
                            <!-- Image -->
                            <div class="row g-0 mb-4" data-cues="fadeIn">
                                <div class="col-6">
                                    <figure class="mb-0 pe-2 pe-xl-8 pe-lg-6 pe-md-4">
                                        <img src="assets/img/PHOTO-2022-12-22-14-16-04.jpg" srcset="assets/img/PHOTO-2022-12-22-14-16-04.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="mb-0 pt-3 pt-md-5">
                                        <img src="assets/img/PHOTO-2022-12-22-14-16-35.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- Image -->
                        </div>
                        <div class="col-12 col-lg-6">
                            <!-- Description -->
                            <div class="mb-4 p-3 bg-white h-100 d-flex align-items-center">
                                <div class="p-2" data-cues="fadeIn">
                                    <div class="heading heading-sub-title sub-title-top sub-title-top mb-3">
                                        <small class="fs-28">Welcome to</small>
                                        <h2>De Bay Lux Hotel & Suites</h2>
                                    </div>
                                    <p class="mb-4 pb-2">At the De Bay Lux Hotel & Suites we believe that guests satisfaction is in the extra service,not eye service but high service</p>
                                    <a href="about.html" class="scroll-to btn btn-lg btn-primary fs-22">
                                        <span>Read More</span>
                                        <i class="las la-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Description -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- About -->
            <!-- Location-->
            <section id="location" class="pt-5 pt-lg-13 pb-13 bg-lighter-primary">
                <div class="container" data-cues="fadeIn">
                    <div class="row g-0 align-items-start align-items-md-stretch">
                        <div class="col-12 col-xl-4 col-md-6">
                            <!-- Description -->
                            <div class="bg-white p-9 h-100 d-flex align-items-center">
                                <div class="clearfix">
                                    <h2>Location & Maps</h2>
                                    <p>
                                        <span><i class="las la-map-marker-alt"></i></span>
                                        <span>Debaylux hotel and suites,lekki beach road offjakunde traffic light roundabout</span>
                                    </p>
                                    <p>We are located at the heart of the city on the Island,10mins drive to Eko Hotel & 50mins to the airport</p>
                                    <a href="/contact.html" class="scroll-to btn btn-lg btn-primary fs-22">
                                        <span>Contact Us</span>
                                        <i class="las la-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Description -->
                        </div>
                        <div class="col-12 col-xl-8 col-md-6">
                            <!-- Maps -->
                            <iframe src="/assets/VIDEO-2022-12-22-14-16-32.mp4" class="border-0 w-100 d-block" style="height:400px"></iframe>
                            <!-- <iframe src="https://snazzymaps.com/embed/385606" class="border-0 w-100 d-block" style="height:400px"></iframe> -->
                            <!-- Maps -->
                        </div>
                    </div>
                </div>
                <!-- Block -->
            </section>
            <!-- Location -->
            <!-- Rooms & Suites -->
            <section id="rooms-suites" class="pt-13 pb-13 bg-dark">
                <div class="container">
                    <!-- Description -->
                    <div class="row justify-content-center text-center">
                        <div class="col-12 col-lg-8 col-md-10">
                            <div class="heading heading-sub-title mb-8 text-white" data-cue="fadeIn">
                                <h2>Rooms & Suites</h2>
                                <small class="fs-26">24hrs check-in-services</small>
                            </div>
                        </div>
                    </div>
                    <!-- Description -->
                    <!-- Rooms Suites List -->
                    <div class="clearfix" data-cue="fadeIn">
                        <div class="owl-carousel owl-theme oc-4col mb-5">
                            @forelse ($room as $booking)
                            <div class="item">
                                <!-- Room/Suite -->
                                <figure class="bn-hover bn-hover-jolie bn-hover-overlay mb-0">
                                    <div class="bn-hover-container">
                                        <img src="{{ asset('cover/'.$booking->cover_image) }}" height="10%" srcset="{{ asset('cover/'.$booking->cover_image) }}" alt="">
                                        <span class="bg-banner-overlay"></span>
                                        <span class="price-box">
                                            <strong class="fw-bold-2">N{{ number_format($booking->price, 2) }}</strong> <span class="fs-18">/ Night</span>
                                        </span>
                                        <div class="bn-hover-caption-container">
                                            <div class="bn-hover-caption">
                                                <h5 class="bn-hover-title">
                                                    <span>{{  $booking->name }}</span>
                                                </h5>
                                                <p class="bn-hover-desc">
                                                    {!! html_entity_decode(\Str::limit($booking->discription, 50)) !!}
                                                </p>
                                                <div class="bn-hover-detail">
                                                    <a href="{{ route('room-details',$booking->slug) }}" class="btn btn-lg btn-primary fs-22">
                                                        <span>Details</span>
                                                        <i class="las la-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <!-- Room/Suite -->
                            </div>
                            @empty
                                <h2>No Items</h2>
                            @endforelse
                            
                        </div>
                    </div>
                    <!-- Rooms Suites List -->
                </div>
            </section>
            <!-- Rooms & Suites -->
            <!-- Facilities & services -->
            <section id="facilities-services" class="pt-13 pb-4">
                <div class="container">
                    <div class="clearfix">
                        <!-- Heading -->
                        <div class="row justify-content-center text-center">
                            
                            <div class="col-12 col-lg-8 col-md-10">
                                <div class="heading heading-sub-title mb-5 text-center" data-cue="fadeIn">
                                    <h2>Facilities & services</h2>
                                    <small class="fs-26">Key Products And Services</small>
                                </div>
                            </div>
                        </div>
                        <!-- Heading -->
                        <!-- List -->
                        <div class="row" data-cues="fadeIn">
                            @forelse ($service as $services)
                            <div class="col-12 col-lg-4 col-md-6">
                                <!-- Item -->
                                <div class="icon-box icon-box-bg icon-box-left">
                                    <div class="icon-box-container">
                                        <div class="icon-box-img">
                                            <!-- <span><i class="las la-wifi"></i></span> -->
                                        </div>
                                        <div class="icon-box-info">
                                            <h5 class="icon-box-title">{{  $services->title  }}</h5>
                                            {{-- <!-- <p class="icon-box-desc">{!! html_entity_decode(\Str::limit($services->discription, 50)) !!}</p> --> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                            </div>
                            @empty
                            <h2 class="text-dark">No Services</h2>
                        @endforelse
                        </div>
                        <!-- List -->
                    </div>
                </div>
            </section>
            <!-- Facilities & services -->
            <!-- Testimonials -->
            <section id="testimonials" class="bg-image-wrapper bg-image bg-image-overlay bg-image-auto bg-image-overlay-800 text-white pt-14 pb-14" data-image-src="assets/img/background/bg2.jpg">
                <div class="container">
                    <div class="clearfix" data-cues="fadeIn">
                        <!-- Heading -->
                        <div class="row justify-content-center text-center">
                            <div class="col-12 col-lg-8 col-md-10">
                                <div class="heading heading-sub-title mb-5 text-center">
                                    <h2>What our Guests say about us</h2>
                                    <small class="fs-26">Pro sonet consul maiorum ad. Delenit omittantur ne cum gloriatur.</small>
                                </div>
                            </div>
                        </div>
                        <!-- Heading -->
                        <!-- Testimonials -->
                        <div class="owl-carousel owl-theme oc-3col-no-nav mb-5">
                            @forelse ($testimony as $test)
                            <div class="item">
                                <!-- blockquote -->
                                <figure class="text-center mb-0">
                                    <div class="d-inline-block mb-0">
                                        <img class="bi-avatar ai-size-80" src="{{  asset('testimony/pic/'.$test->image) }}" srcset="{{  asset('testimony/pic/'.$test->image) }}" alt="">
                                    </div>
                                    <blockquote class="blockquote fst-italic">
                                        <p>{!! html_entity_decode(\Str::limit($test->body, 50)) !!}</p></p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                       {{ $test->name }}
                                    </figcaption>
                                </figure>
                                <!-- blockquote -->
                            </div>
                            @empty
                                <h2 class="text-white">No Testimony</h2>
                            @endforelse
                           
                        </div>
                        <!-- Testimonials -->
                    </div>
                </div>
            </section>
            <!-- Testimonials -->
            <!-- News & Events -->
            <section id="news-events" class="pt-13 pb-12">
                <div class="container">
                    <div class="clearfix">
                        <!-- Heading -->
                        <div class="row justify-content-center text-center">
                            <div class="col-12 col-lg-8 col-md-10">
                                <div class="heading heading-sub-title mb-5 text-center" data-cue="fadeIn">
                                    <h2>News & Events</h2>
                                    <!-- <small class="fs-26">Delenit omittantur ne cum, et purto numquam contentiones.</small> -->
                                </div>
                            </div>
                        </div>
                        <!-- Heading -->
                        <!-- Article List -->
                        <div class="blog-2">
                            <div class="row grid-blog blog-list g-0 g-md-8" data-cues="fadeIn">
                                @forelse ($new as $news)
                                     <!-- article-->
                                <div class="col-12 col-lg-4 col-md-6">
                                    <article class="card post border-0 bg-transparent mb-4">
                                        <figure class="img-overlay mb-0">
                                            <a href="{{ route('post-details', $news->slug) }}" title="">
                                                <span class="bg-img-overlay"></span>
                                                <i class="img-icon las la-plus"></i>
                                                <img src="{{ asset('post/'.$news->image) }}" srcset="{{ asset('post/'.$news->image) }}" class="card-img-top" alt="">
                                                <span class="date-box">
                                                    <span class="date-day">{{  $news->created_at->toFormattedDateString()}}</span>
                                                    {{-- <span class="date-month">Jul</span>
                                                    <span class="date-year">22</span> --}}
                                                </span>
                                            </a>
                                        </figure>
                                        <div class="card-body border">
                                            <a href="#" class="category">{{  $news->title }}</a>
                                            <h3 class="card-title">
                                                <a href="{{ route('post-details', $news->slug) }}" title="">
                                                    {!! html_entity_decode(\Str::limit($news->body, 50)) !!}
                                                </a>
                                            </h3>
                                            <a href="{{ route('post-details', $news->slug) }}" title="" class="card-link">
                                                <span>Details</span>
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <!-- article-->
                                @empty
                                   <h2 class="text-dark">No News</h2>
                                @endforelse
                               
                               
                            </div>
                        </div>
                        <p class="text-center">
                            <a href="{{  route('blog-page') }}" class="scroll-to btn btn-lg btn-primary fs-22">
                                <span>All Posts</span>
                                <i class="las la-arrow-right"></i>
                            </a>
                        </p>
                        <!-- Article List -->
                    </div>
                </div>
            </section>
            <!-- Testimonials -->
            <!-- Booking -->
            <section id="booking" class="bg-image-wrapper bg-image bg-image-overlay bg-image-auto bg-image-overlay-800 text-white pt-15 pb-15" data-image-src="assets/img/background/bg1.jpg">
                <div class="container">
                    <div class="row justify-content-center align-items-center" data-cues="fadeIn">
                        <div class="col-12 col-xl-6 col-lg-6">
                            <div class="block-content mb-4">
                                <!-- Description -->
                                <div class="heading heading-sub-title mb-4">
                                    <h2>
                                        Telephone Booking
                                    </h2>
                                    <small class="fs-26">We look forward to working with you.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 col-lg-6 ">
                            <div class="text-end">
                                <a href="/contact.html" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Booking -->
        </div>
      @endsection
    <!--MAIN PAGE-->
    