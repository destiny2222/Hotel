@extends('layouts.main')
@section('title', 'Contact - De bay lux Hotel & Suites')
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
                                    Contact Us
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
            <!-- Contact Form -->
            <section id="contact-form" class="pt-13 pb-4  bg-lighter-primary">
                <div class="container">
                    <div class="row g-0 g-lg-5 justify-content-center">
                        <div class="col-12 col-lg-4">
                            <!-- Contact Info -->
                            <div class="contact-info">
                                <div class="icon-box icon-box-left mb-1">
                                    <div class="icon-box-container">
                                        <div class="icon-box-img icon-box-img-sm">
                                            <span><i class="las la-map-marker-alt"></i></span>
                                        </div>
                                        <div class="icon-box-info pt-1">
                                            <h6 class="icon-box-title mb-1">Address</h6>
                                            <p class="icon-box-desc">Debaylux hotel and suites,lekki beach road offjakunde traffic light roundabout</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-left mb-1">
                                    <div class="icon-box-container">
                                        <div class="icon-box-img icon-box-img-sm">
                                            <span><i class="las la-phone"></i></span>
                                        </div>
                                        <div class="icon-box-info pt-1">
                                            <h6 class="icon-box-title mb-1">Phone</h6>
                                            <p class="icon-box-desc">+2348182274770 <br> +2348060647306</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-left mb-1">
                                    <div class="icon-box-container">
                                        <div class="icon-box-img icon-box-img-sm">
                                            <span><i class="las la-envelope"></i></span>
                                        </div>
                                        <div class="icon-box-info pt-1">
                                            <h6 class="icon-box-title mb-1">Email</h6>
                                            <p class="icon-box-desc">info@debayluxhotel.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Info -->
                        </div>
                        <div class="col-12 col-lg-8">
                            <!-- Contact Form -->
                            <form class="contact-form mb-4" method="post" action="{{  route('contact-request') }}">
                                {{-- <div class="messages"></div> --}}
                                @csrf
                                <p>The fields marked with * are required.</p>
                                <div class="row gx-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_firstname" type="text" name="firstname" class="form-control" placeholder="First Name" required>
                                            <label for="form_firstname">First Name *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                                            <label for="form_lastname">Last Name *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required>
                                            <label for="form_email">Email *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_phone" type="number" name="phone" class="form-control" placeholder="Phone" required>
                                            <label for="form_phone">Phone *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-4">
                                            <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject" required>
                                            <label for="form_subject">Subject *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-4">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Message" style="height: 200px" required></textarea>
                                            <label for="form_message">Message *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6 text-start text-md-end">
                                                <button type="submit" class="btn btn-lg btn-primary rounded-pill btn-send mb-3">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Form -->
            
            
        </div>
    @endsection
    <!--MAIN PAGE-->
   