@extends('layouts.main')
@section('title', 'News - De bay lux Hotel & Suites')
@section('header')
   @include('layouts.heads')
@endsection

    <!--MAIN PAGE-->
      @section('content')
         <!-- Title page -->
         <section id="title-page" class="bg-dark pb-18 pt-4 bg-image-wrapper bg-image bg-image-overlay bg-image-overlay-700 bg-image-full" data-image-src="assets/img/background/bg2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-box title-box-light-content header-transparent">
                            <!-- Heading -->
                            <div class="heading heading-sub-title">
                                <h1 class="fs-56">
                                   Room & Suite
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
            <!-- Rooms & Suites -->
            <section id="rooms-suites" class="pt-13 pb-13">
                <div class="container">
                    <div class="clearfix">
                        <!-- Rooms Suites List -->
                        <div class="row g-0 g-lg-8" data-cues="fadeIn">
                            @forelse ($room as $rooming)
                                <div class="col-12 col-xl-4 col-lg-6">
                                    <!-- Room/Suite -->
                                    <figure class="bn-hover bn-hover-jolie bn-hover-overlay mb-4 mb-lg-0">
                                        <div class="bn-hover-container">
                                            <img src="{{ asset('cover/'.$rooming->cover_image) }}" srcset="{{ asset('cover/'.$rooming->cover_image) }}" alt="">
                                            <span class="bg-banner-overlay"></span>
                                            <span class="price-box">
                                                <strong class="fw-bold-2">#{{ $rooming->price }}</strong> <span class="fs-18">/ Night</span>
                                            </span>
                                            <div class="bn-hover-caption-container">
                                                <div class="bn-hover-caption">
                                                    <h5 class="bn-hover-title pe-14">
                                                        <span>{{ number_format($rooming->price, 2) }}</span>
                                                    </h5>
                                                    <p class="bn-hover-desc">
                                                        {!! html_entity_decode(\Str::limit($rooming->discription, 100)) !!}
                                                    </p>
                                                    <div class="bn-hover-detail">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <a href="{{  route('room-details', $rooming->slug) }}" class="btn btn-lg btn-link fs-22 ps-0 pe-0">
                                                                    <span>Details</span>
                                                                    <i class="las la-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-6 text-end">
                                                                <a href="{{  route('room-details', $rooming->slug) }}" class="btn btn-lg btn-primary fs-18">
                                                                    <span>Book Now</span>
                                                                    <i class="las la-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <!-- Room/Suite -->
                                </div>
                            @empty
                               <div class="col-12">
                                    <h2 class="text-dark" style="color: black;">No Room List</h2>
                               </div>
                            @endforelse
                             
                        </div>
                        <!-- Rooms Suites List -->
                    </div>
                </div>
            </section>
            <!-- Rooms & Suites -->

            
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
    