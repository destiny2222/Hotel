<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('admin.home') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/img/IMG-20221224-WA0052-removebg-preview.png" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="/assets/img/IMG-20221224-WA0052-removebg-preview.png" alt="" height="40">
            </span>
        </a>

        <a href="{{ route('admin.home') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets/img/IMG-20221224-WA0052-removebg-preview.png" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="/assets/img/IMG-20221224-WA0052-removebg-preview.png" alt="" height="40">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Page</li>
                <li>
                    <a href="{{ route('admin.rooms.index') }}" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>Rooms</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('admin.policy.index') }}" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>Rooms Policy</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.amenitie.index') }}" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>Rooms Amenities</span>
                    </a>
                </li> --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-envelope"></i>
                        <span>Post</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{  route('admin.blog.index') }}">Create Post</a></li>
                        <li><a href="{{  route('admin.tags.index') }}">Create Post Tags</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.gallery.index') }}" class=" waves-effect">
                        <i class="uil-comments-alt"></i>
                        <span>Gallery</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.testimonial.index') }}" class=" waves-effect">
                        <i class="uil-store"></i>
                        <span>Testimonial</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.service.index') }}" class=" waves-effect">
                        <i class="uil-store"></i>
                        <span>Service</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>