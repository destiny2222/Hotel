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
                                   News & Events
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
            <!-- News -->
            <section id="news" class="pt-13 pb-11">
                <div class="container">
                    <h2 class="d-none">Latest news</h2>
                    <div class="blog-2 clearfix">
                        <!-- Article List -->
                        @forelse ($new as $news)
                        <div class="col-12 col-xl-4 col-lg-6">
                                <!-- article-->
                                <article class="card post border-0 bg-transparent mb-4 mb-lg-0">
                                    <figure class="img-overlay mb-0">
                                        <a href="single-post.html" title="">
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
                                <!-- article-->
                            </div>
                        </div>
                        @empty
                            <h2 class="text-dark">No News</h2>
                        @endforelse
                        <!-- Article List -->
                        <!-- Paging -->
                        <!-- <nav class="pt-8">
                            <ul class="pagination">
                                <li class="page-item first disabled"><a class="page-link" href="#">First</a></li>
                                <li class="page-item prev disabled"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item next"><a class="page-link" href="#">Next</a></li>
                                <li class="page-item last"><a class="page-link" href="#">Last</a></li>
                            </ul>
                        </nav> -->
                        <!-- Paging -->
                    </div>
                </div>
            </section>
            <!-- News -->
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
     