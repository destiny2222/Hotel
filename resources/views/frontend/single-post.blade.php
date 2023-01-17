@extends('layouts.main')
@section('title', 'Single  - De bay lux Hotel & Suites')
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
                                   Single Post
                                </h1>
                            </div>
                            <!-- Heading -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <div class="container">
                <div class="row g-0 g-lg-5">
                    <div class="col-12 col-lg-8" data-cues="fadeIn">
                        <!-- Post Detail -->
                        <section class="post-detail pt-4">
                            <div class="post">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('post/'.$post->image) }}" srcset="{{ asset('post/'.$post->image) }} 2x" class="card-img-top" alt="">
                                </figure>
                                <!-- Image -->
                                <!-- Meta -->
                                <ul class="post-meta list-inline clearfix">
                                    {{-- <li class="list-inline-item">
                                        <a href="news.html" class="category">Promotion</a>
                                    </li> --}}
                                    <li class="list-inline-item">
                                        <i class="las la-calendar"></i>
                                        <span>{{  $post->created_at->diffforHumans() }}</span>
                                    </li>
                                    {{-- <li class="list-inline-item">
                                        <a href="#">
                                            <i class="las la-comment-alt"></i>
                                            <span>3 Comments</span>
                                        </a>
                                    </li> --}}
                                </ul>
                                <!-- Meta -->
                                <!-- Content -->
                                <div class="post-content clearfix mb-5">
                                    <p>{{ $post->body }}</p>
                                </div>
                                <!-- Content -->
                                <!-- Share -->
                                {{-- <div class="share-post clearfix mb-5">
                                    <div class="d-flex align-items-center">
                                        <h6 class="pe-3 mb-0">Share this post:</h6>
                                        <span>
                                            <a href="#" class="btn-social btn-social-light btn-facebook"><i class="lab la-facebook"></i></a>
                                            <a href="#" class="btn-social btn-social-light btn-twitter"><i class="lab la-twitter"></i></a>
                                            <a href="#" class="btn-social btn-social-light btn-pinterest"><i class="lab la-pinterest"></i></a>
                                            <a href="#" class="btn-social btn-social-light btn-instagram"><i class="lab la-instagram"></i></a>
                                            <a href="#" class="btn-social btn-social-light btn-reddit"><i class="lab la-reddit"></i></a>
                                            <a href="#" class="btn-social btn-social-light btn-linkedin"><i class="lab la-linkedin"></i></a>
                                        </span>
                                    </div>
                                </div> --}}
                                <!-- Share -->
                                <!-- Tags -->
                                <div class="post-tags clearfix mb-5">
                                    <ul class="list-unstyled tags-box">
                                        @forelse ($blogtag as $tag)
                                            <li>
                                                <a href="#" class="btn btn-light-gray btn-sm rounded-pill">{{  $tag->name }}</a>
                                            </li>
                                        @empty
                                            
                                        @endforelse
                                    </ul>
                                </div>
                                <!-- Tags -->
                            </div>
                        </section>
                       
                    </div>
                    <div class="col-12 col-lg-4 py-4">
                        <!-- Sidebar -->
                        <div id="sidebar">
                            <div class="sidebar-box" data-cues="fadeIn">
                                <!-- Search -->
                                <div class="side-widget h-auto pb-3">
                                    {{-- <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" id="txtFile1">
                                        <button class="btn btn-primary" type="button" id="button2">
                                            <i class="las la-search"></i>
                                        </button>
                                    </div> --}}
                                </div>
                                <!-- Search -->
                                {{-- <hr class="mb-4 mt-3" /> --}}
                                <!-- Category -->
                                <div class="side-widget h-auto">
                                    {{-- <h5>Categories</h5>
                                    <ul class="list-dot menu-sidebar">
                                        <li class="active">
                                            <a href="news.html">News & Events (23)</a>
                                        </li>
                                        <li>
                                            <a href="news.html">Promotion (29)</a>
                                        </li>
                                        <li>
                                            <a href="news.html">Travel experience (23)</a>
                                        </li>
                                        <li>
                                            <a href="news.html">Local culture (12)</a>
                                        </li>
                                    </ul> --}}
                                </div>
                                <!-- Category -->
                                {{-- <hr class="mb-4 mt-3" /> --}}
                                <!-- Recent Posts -->
                                <div class="side-widget h-auto">
                                    <h5>Recent Posts</h5>
                                    <div class="blog-right pt-2">
                                        @forelse ($recentblog as $recent)
                                             <!-- article -->
                                        <article class="post">
                                            <div class="post-info">
                                                <div class="post-img">
                                                    <a href="single-post.html" title="">
                                                        <figure><img src="{{ asset('post/'.$recent->image) }}" srcset="{{ asset('post/'.$recent->image) }}" alt="" /></figure>
                                                    </a>
                                                </div>
                                                <div class="post-title">
                                                    <h3>
                                                        <a href="{{ route('post-details', $recent->slug) }}" title="">
                                                            {{ $recent->name }}
                                                        </a>
                                                    </h3>
                                                    <p class="post-meta">{{ $recent->created_at->diffforHumans() }}</p>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- article -->
                                        @empty
                                            
                                        @endforelse                                       
                                       
                                    </div>
                                </div>
                                <!-- Recent Posts -->
                                <hr class="mb-4 mt-3" />
                                <!-- Tags -->
                                <div class="side-widget h-auto">
                                    <h5>Tags</h5>
                                    <ul class="list-unstyled tags-box">
                                        @forelse ($blogtag as $tag)
                                            <li>
                                                <a href="#" class="btn btn-light-gray btn-sm rounded-pill">{{  $tag->name }}</a>
                                            </li>
                                        @empty
                                            
                                        @endforelse
                                        
                                    </ul>
                                </div>
                                <!-- Tags -->
                            </div>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
            </div>
            <!-- Detail Post -->
            <!-- Booking -->
            <section id="booking" class="bg-image-wrapper bg-image bg-image-overlay bg-image-auto bg-image-overlay-800 text-white pt-15 pb-15" data-image-src="/assets/img/background/bg1.jpg">
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
