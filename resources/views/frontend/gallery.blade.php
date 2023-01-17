@extends('layouts.main')
@section('title', 'Gallery - De bay lux Hotel & Suites')
@section('header')
   @include('layouts.heads')
@endsection

    <!--MAIN PAGE-->
      @section('content')
        <!-- Title page -->
        <section id="title-page" class="bg-dark pb-18 pt-4 bg-image-wrapper bg-image bg-image-overlay bg-image-overlay-700 bg-image-full" data-image-src="/assets/img/background/bg2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-box title-box-light-content header-transparent">
                            <!-- Heading -->
                            <div class="heading heading-sub-title">
                                <h1 class="fs-56">
                                    Gallery
                                </h1>
                            </div>
                            <!-- Heading -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Title page -->
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <!-- Photo Gallery -->
            <section id="photo-gallery" class="pt-13 pb-13">
                <div class="container">
                    <!-- Heading -->
                    <div class="row justify-content-center text-center">
                        <div class="col-12 col-xl-8 col-lg-10">
                            <div class="heading heading-sub-title mb-3 d-inline-block w-75">
                                <h2>
                                    Photo Gallery
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!-- Heading -->
                    <!-- Gallery box -->
                    <div class="gallery-free-filter">
                        <!-- With filter -->
                        <div class="clearfix">
                            <!-- <ul class="nav grid-filter grid-filter-free justify-content-center mb-4">
                                <li data-filter="*" class="nav-item filter-active">All Photos</li>
                                <li data-filter=".free-group-1" class="nav-item">Group 1</li>
                                <li data-filter=".free-group-2" class="nav-item">Group 2</li>
                                <li data-filter=".free-group-3" class="nav-item">Group 3</li>
                            </ul> -->
                        </div>
                        <!-- With filter -->
                        <div class="grid-box grid-5-col grid-free">
                            <div class="grid-sizer"></div>
                            <!-- Grid item -->
                            @foreach ($gallery as $gallerys)
                                <div class="grid-box grid-5-col grid-item free-group-3">
                                    <div class="photo-wrap">
                                        <figure class="img-overlay img-overlay-1 mb-0">
                                            <a href="{{ asset('gallery/pic/'.$gallerys->image) }}" class="glightbox" data-glightbox="title:{{ $gallerys->name }}" data-gallery="free-5-colunms">
                                                <span class="bg-img-overlay"></span>
                                                <i class="img-icon las la-search"></i>
                                                <img src="{{ asset('gallery/pic/'.$gallerys->image) }}" srcset="{{ asset('gallery/pic/'.$gallerys->image) }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            @endforeach
                            
                            <!-- Grid item -->
                        </div>
                        
                    </div>
                    <!-- Gallery box -->
                </div>
            </section>
            <!-- Photo Gallery -->
           
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
    