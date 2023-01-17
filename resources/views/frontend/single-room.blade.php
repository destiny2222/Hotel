@extends('layouts.main')
<style>
    .price-container .daterangepicker:focus{
        display: none !important;
    }
</style>
@section('title', 'Signle Room - De bay lux Hotel & Suites')
@section('header')
   @include('layouts.heads')
@endsection

    <!--MAIN PAGE-->
      @section('content')
         <!-- Room Photos List -->
         <section id="room-photos" class="clearfix" data-cue="fadeIn">
            <h2 class="d-none">Room Photos</h2>
            <div class="owl-carousel owl-theme oc-2col-center nav-primary mb-5">
                @if(isset($room->images))
                    @foreach($room->images as $image)
                    <div class="item">
                        <!-- Photo Item -->
                        <figure class="img-overlay mb-0">
                            <a href="{{ asset('storage/rooms/slider/'.$image) }}" class="glightbox" data-glightbox="title: De Bay Lux Hotel & Suites" data-gallery="simple">
                                <span class="bg-img-overlay"></span>
                                <i class="img-icon las la-search"></i>
                                <img src="{{ asset('storage/rooms/slider/'.$image) }}"  srcset="{{ asset('storage/rooms/slider/'.$image) }}" alt="" />
                            </a>
                        </figure>
                        <!-- Photo Item -->
                    </div>
                    @endforeach
                @endif
            </div>
        </section>
        <!-- Room Photos List -->
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <!-- Detail Room -->
            <section id="detail-room" class="pt-13 pb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-8">
                            <div class="clearfix">
                                <!-- Room info -->
                                <img src="{{ asset('cover/'.$room->cover_image) }}" class="img-fluid w-100" alt="">
                                <div class="clearfix py-4" data-cues="fadeIn">
                                    <!-- Description -->
                                    <p class="mb-3">
                                        {!! html_entity_decode($room->discription) !!}
                                    </p>
                                    <!-- Description -->
                                    <hr />
                                </div>
                                <!-- Room info -->
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 ">
                            <div class="right-check-room p-4 bg-lighter-primary" data-cue="fadeIn">
                                <!-- Reservation -->
                                <div class="check-room-box text-body">
                                    <!-- Price -->
                                    <div class="price mb-8">
                                        {{-- <h4 class="d-inline-block">Send a Booking Request</h4> --}}
                                        <h4 class="d-inline-block">DIRECT RESERVATION</h4>
                                        <div class="fw-bold-2 mb-2">
                                            <span class="text-primary">
                                                <span class="fs-30">&#8358;{{ number_format($room->price, 2) }}</span>
                                            </span>
                                            <span class="fw-normal">
                                                <span class="usd-night">/ Night</span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- Price -->
                                    <form action="{{ route('booking-request') }}" method="POST">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="">Full Name</label>
                                                <input type="text" class="form-control" name="name" required placeholder="Full Name">
                                            </div>
                                            <div class="col-12">
                                                <label for="">Email Address</label>
                                                <input type="email" class="form-control" name="email" required  placeholder="Email Address">
                                            </div>
                                            <div class="col-12">
                                                <label for="">Phone Number</label>
                                                <input type="text" class="form-control" name="phone" required  placeholder="Phone Number">
                                            </div>
                                            <div class="col-12">
                                                <label for="">Check In Date</label>
                                                <input type="date" class="form-control" name="check_in" required placeholder="Check_in Date">
                                            </div>
                                            <div class="col-12">
                                                <label for="">Check Out Date</label>
                                                <input type="date" class="form-control" name="check_out" required placeholder="Check_out Date">
                                            </div>
                                            <div class="col-12">
                                                <label for="" hidden>Room</label>
                                                <input type="text" name="room_id" hidden class="form-control" value="{{ $room->slug }}">
                                            </div>
                                            <div class="col-12">
                                                <label for="price" hidden>Price</label>
                                                <input type="text" name="price" hidden class="form-control" value="{{ $room->price }}">
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="number" class="form-control" hidden value="{{ $room->number }}">
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="bookingid" class="form-control" hidden value="{{ (\Str::random(6)) }}">
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    {{-- <button type="submit" class="btn btn-primary w-100">
                                                        <i class="las la-calendar"></i>
                                                        <span>Book this room</span>
                                                    </button> --}}
                                                    <input type="submit" class="btn btn-primary w-100" value="Book Now!">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Quick links -->
                                    {{-- <ul class="list-dot mb-0">
                                        <li><a href="#">Special Offers</a></li>
                                        <li><a href="#">Best Rate Guarantee</a></li>
                                    </ul> --}}
                                    <!-- Quick links -->
                                </div>
                                <!-- Reservation -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Detail Room -->
            <!-- Policies, Amenities & Serivces -->
            {{-- <section id="policies-amenities-serivces" class="pb-13">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs" id="blockTab" role="tablist" data-cues="fadeIn">
                                <!-- Room Policies tab -->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="policies-tab" data-bs-toggle="tab" data-bs-target="#policies-content" type="button" role="tab" aria-controls="policies-tab" aria-selected="true"> Room Policies</button>
                                </li>
                                <!-- Room Policies tab -->
                                <!-- Amenities & Serivces tab -->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="amenities-tab" data-bs-toggle="tab" data-bs-target="#amenities-content" type="button" role="tab" aria-controls="amenities-tab" aria-selected="false">Amenities & Serivces</button>
                                </li>
                                <!-- Amenities & Serivces tab -->
                            </ul>
                            <div class="tab-content pt-3 pb-3" data-cues="fadeIn">
                                <!-- Room Policies content -->
                                <div class="tab-pane fade show active" id="policies-content" role="tabpanel" aria-labelledby="policies-tab">
                                    <p><strong>Check-in/out Policy:</strong></p>
                                    <ul style="list-style-type: square;">
                                        <li>Check in: from 14:00;</li>
                                        <li>Check out: no later than 12:00;</li>
                                        <li>Early check-in or late check out will be upon availability.</li>
                                    </ul>
                                    <p><strong>Cancellation/Amendment Policy:</strong></p>
                                    <ul style="list-style-type: square;">
                                        <li>If cancellation/amendment is made before 7 days prior to your arrival date, no fee will be charged.</li>
                                        <li>If cancellation/amendment is made in 7 days of your arrival date or no show, 100% room rate of first night and tax will be charged</li>
                                    </ul>
                                    <p><strong>Payment method:</strong></p>
                                    <ul style="list-style-type: square;">
                                        <li>By cash</li>
                                        <li>By Visa Card, Master Card, American Express plus 3% bank fee is applied.</li>
                                    </ul>
                                    <p><strong>Children and Extra Adult Policy:</strong></p>
                                    <ul style="list-style-type: square;">
                                        <li>Child under 3 years old: Free of charge and share bed with parents.</li>
                                        <li>Child from 5 years old and over: surcharge US$37/person/night for additional child or an extra bed.</li>
                                        <li>Adult: surcharge US$37/person/night for an additional person or an extra bed.&nbsp;</li>
                                    </ul>
                                </div>
                                <!-- Room Policies content -->
                                <!-- Amenities & Serivces content -->
                                <div class="tab-pane fade" id="amenities-content" role="tabpanel" aria-labelledby="amenities-tab">
                                    <div class="amenities-serivces">
                                        <div class="clearfix">
                                            <h5 class="mb-2 fs-22">
                                                Clothing and laundry
                                            </h5>
                                            <ul class="list-check row mb-4 g-0">
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Wash Clothes
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Shoeshine kit
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Ironing facilities
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Sewing kit
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Closet
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix">
                                            <h5 class="mb-2 fs-22">
                                                Safety and security features
                                            </h5>
                                            <ul class="list-check row g-0 mb-4">
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    24hour Security
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Smoke Detector
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Locker
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    First aid kit
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Fire extinguisher
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix">
                                            <h5 class="mb-2 fs-22">
                                                Comforts
                                            </h5>
                                            <ul class="list-check row g-0 mb-4">
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Daily Housekeeping
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Air Purifier
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Umbrella
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Slippers
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Wake-up service
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Mosquito net
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Humidifier
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Fan
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Linens
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Slippers
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Alarm clock
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Air conditioning
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix">
                                            <h5 class="mb-2 fs-22">
                                                Layout and furnishings
                                            </h5>
                                            <ul class="list-check row g-0 mb-4">
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    City view
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Windows
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Luggage Storage
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Balcony View
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Wooden/parqueted flooring
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    High floor
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Desk
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Carpeting
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix">
                                            <h5 class="mb-2 fs-22">
                                                Bathroom and toiletries
                                            </h5>
                                            <ul class="list-check row g-0 mb-4">
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Shower
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Slippers For Kids
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Cosmetics
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Shower and bathtub
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Toiletries
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Towels
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Mirror
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Cleaning products
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Hair dryer
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix">
                                            <h5 class="mb-2 fs-22">
                                                Entertainment
                                            </h5>
                                            <ul class="list-check row g-0 mb-4">
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Free Wi-Fi in all rooms!
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Satellite/cable channels
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Telephone
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix">
                                            <h5 class="mb-2 fs-22">
                                                Dining, drinking, and snacking
                                            </h5>
                                            <ul class="list-check row g-0 mb-4">
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Electric Hot Water Pot
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Microwave
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Kitchenette
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Free instant coffee
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Free welcome drink
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Refrigerator
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Coffee/tea maker
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Free bottled water
                                                </li>
                                                <li class="col-6 col-xl-20 col-lg-3 col-md-4">
                                                    Mini bar
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Amenities & Serivces content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block -->
            </section> --}}
            <!-- Policies, Amenities & Serivces -->

            <!-- Rooms & Suites -->
            <section id="rooms-suites" class="pt-13 pb-13">
                <div class="container">
                    <div class="clearfix" data-cues="fadeIn">
                        <!-- Heading -->
                        <div class="heading heading-sub-title mb-8 text-dark">
                            <h2>You Might Also Like</h2>
                        </div>
                        <!-- Heading -->
                        <!-- Rooms Suites List -->
                        <div class="owl-carousel owl-theme oc-4col dot-left mb-5">
                            @forelse ($roomlist as $item)
                            <div class="item">
                                <!-- Room/Suite -->
                                <figure class="bn-hover bn-hover-jolie bn-hover-overlay">
                                    <div class="bn-hover-container">
                                        <img src="{{ asset('cover/'.$item->cover_image) }}" srcset="{{ asset('cover/'.$item->cover_image) }}" alt="">
                                        <span class="bg-banner-overlay"></span>
                                        <span class="price-box">
                                            <strong class="fw-bold-2">#{{ $item->price }}</strong> <span class="fs-18">/ Night</span>
                                        </span>
                                        <div class="bn-hover-caption-container">
                                            <div class="bn-hover-caption">
                                                <h5 class="bn-hover-title">
                                                    <span>{{ $item->name }}</span>
                                                </h5>
                                                <p class="bn-hover-desc">
                                                    {!! html_entity_decode(\Str::limit($item->discription, 100)) !!}
                                                </p>
                                                <div class="bn-hover-detail">
                                                    <a href="{{ route('room-details', $item->slug) }}" class="btn btn-lg btn-primary fs-22">
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
                                
                            @endforelse
                            
                        </div>
                        <!-- Rooms Suites List -->
                    </div>
                </div>
            </section>
            <!-- Rooms & Suites -->
        </div>
    @endsection
    <!--MAIN PAGE-->
   