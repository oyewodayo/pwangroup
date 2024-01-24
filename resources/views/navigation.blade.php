<header id="header" class="fixed-top">
    <div class="container d-flex justify-content-between">

        <h1 class="logo">
            <a href="/">
                <img src="{{asset('assets/LOGO BLUE.png')}}" alt="BUYTOSELL">
            </a>
        </h1>

        <nav id="navbar" class="navbar mb-2"  data-aos="fade-right" data-aos-duration="3000">
            <ul>
                <li><a class="nav-link scrollto {{ is_null(request()->segment(1))?'active':'' }} " href="/#hero">Home</a></li>
            
                {{-- <li class="dropdown" ><a href="#" class="{{ request()->segment(1)=='about'?'active':'' }}"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="/about">Who We Are</a></li>                  
                    <li><a href="/about/our-founders">Our Founders</a></li>
                    </ul>
                </li> --}}
                <li><a class="nav-link scrollto {{ request()->segment(1)=='about'?'active':'' }} " href="/about"> About Us</a></li>
                {{-- <li><a class="nav-link scrollto {{ request()->segment(1)=='estates'?'active':'' }}" href="/estates">Estates</a></li> --}}

                <li><a class="nav-link scrollto {{ request()->segment(1)=='flyers'?'active':'' }}" href="/flyers">Flyers</a></li>
                <li><a class="nav-link-contact scrollto {{ request()->segment(1)=='contact-us'?'active':'' }}" href="{{asset('/contact-us')}}">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar --> 
    </div>
</header>