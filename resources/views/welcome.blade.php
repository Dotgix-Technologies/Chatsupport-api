<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chat Support</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite([ 'resources/js/app.js'])
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
         @livewireStyles
    </head>
    <body class="antialiased">
       <!-- ***** Header Area Start ***** -->
    <nav>
        <div class="logo">
            <img src="{{asset('web/image/vector-robot-cheerful-isolated-on-blue-background-concept-illustration-eps-ai-svg-removebg-preview.png')}}"
                alt="logo" />
            <h1>Dotgix Technology</h1>
        </div>
        <ul>
            <li class="">
                <a class="page-scroll" href="#home">Home</a>
            </li>
            <li class="">
                <a class="page-scroll" href="#service">Services</a>
            </li>
            <li class="">
                <a class="page-scroll" href="#about">About </a>
            </li>
            <li class="">
                <a class="page-scroll" href="#contact">Contact</a>
            </li>
            
            @if (Route::has('login'))
            @auth
             <li class="">
                <a class="signin-btn page-scroll" href="#signin">Dashboard</a>
            </li>
             @else
             <li class="">
                <a class="signin-btn page-scroll" href="#signin">Sign In</a>
            </li>
            @if (Route::has('register'))
            <li class="">
                <a class="login-btn page-scroll" href="#login">Login</a>
            </li>
            @endif
             @endauth
            @endif
        </ul>
        <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            
        </div>
    </nav>
    <div class="menubar">
        <ul>
            <li class="">
                <a class="page-scroll" href="#home">Home</a>
            </li>
            <li class="">
                <a class="page-scroll" href="#service">Services</a>
            </li>
            <li class="">
                <a class="page-scroll" href="#about">About </a>
            </li>
            <li class="">
                <a class="page-scroll" href="#contact">Contact</a>
            </li>
            @if (Route::has('login'))
            @auth
             <li class="">
                <a class="signin-btn page-scroll" href="#signin">Dashboard</a>
            </li>
             @else
             <li class="">
                <a class="signin-btn page-scroll" href="#signin">Sign In</a>
            </li>
            @if (Route::has('register'))
            <li class="">
                <a class="login-btn page-scroll" href="#login">Login</a>
            </li>
            @endif
             @endauth
            @endif
        </ul>
    </div>
    <!-- ***** Header Area End ***** -->
    <section id="home">
        <div class="content">
            <div class="right">
                <h2>Great Chat for any System Like <span>Mobile</span> & <span>Web</span></h2>
                <p>100% scalable Vector assets, well-organized & available for Web & Mobile, easy to use</p>
                <button>Get Started</button>
            </div>
            <div class="left">
                <dotlottie-player src="https://lottie.host/e4aacf3e-9885-4271-987d-dbf0221ace72/fUL61XtlFj.json"
                    background="transparent" speed="1" style="width: 500px; height: 400px;" autoplay
                    loop></dotlottie-player>
            </div>
        </div>
    </section>

    <section class="featured-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="custom-block  shadow-lg" style="border-radius: 40px;">
                        <a href="topics-detail.html">
                            <div class="d-flex">
                                <div class="dot-2">
                                    <dotlottie-player
                                        src="https://lottie.host/0ceef639-dab5-49a7-84df-cddbb02ca4ae/rKB9V6xcjc.json"
                                        background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                                        autoplay></dotlottie-player>

                                </div>

                            </div>

                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-block bg-white  custom-block-overlay" style="border-radius: 40px;">
                        <div class="d-flex flex-column h-100">


                            <div class="custom-block-overlay-text d-flex">
                                <div class="box-2">
                                    <h5 class="text-dark mb-2 mobil">Mobile Support</h5>

                                    <p class="text-dark">Topic includes homepage, listing page, detail
                                        page, and contact page. You can feel free to edit and adapt for your CMS
                                        requirements.</p>

                                    <img src="{{asset('web/image/undraw_Group_video_re_btu7.png')}}" width="500px" height="400px"
                                        class="box-2 img" style="border-radius: 50px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="main">
        <div class="righter">
            <h2> Great <span>Down</span> View </h2>
            <p>Their expert application designers and developers in Dubai are mainly focused on providing low-cost app
                development solutions that generate more revenue for customers. Mobile apps on the iPhone and Android
                versions can be tailored to the skills of their skilled engineer and create apps that make smartphones
                run faster for their clients.”Before you write these objectives, don’t forget to take inputs from your
                prospective client. They can help you to understand the tangible and measurable goals that you should
                use to gauge project success.

            </p>

        </div>
        <div class="lefter">
            <img src="{{asset('web/image/network-bg1.png')}}" alt="">
        </div>
    </div>
    <section id="service">
        <section class="services-section">
            <h2 class="section-title">Our Services</h2>
            <div class="services-container">
                <div class="service-box" data-service="1">
                    <div class="service-icon">
                        <img src="{{asset('web/image/features.jpg')}}" alt="Service 1 Icon">
                    </div>
                    <h3 class="service-title">Graphic Designing</h3>
                    <p class="service-description">Innovate. Design. Succeed. With Dotgix</p>
                </div>
                <div class="service-box" data-service="2">
                    <div class="service-icon">
                        <img src="{{asset('web/image/icons8-website-design-64.png')}}" alt="Service 2 Icon">
                    </div>
                    <h3 class="service-title">Web Design</h3>
                    <p class="service-description">Dotgix: Your Vision, Our Design.</p>
                </div>
                <div class="service-box" data-service="2">
                    <div class="service-icon">
                        <img src="{{asset('web/image/icons8-app-development-64.png')}}" alt="Service 2 Icon">
                    </div>
                    <h3 class="service-title">App Develompent</h3>
                    <p class="service-description"> we turn your visionary concepts into intuitive.</p>
                </div>
                <div class="service-box" data-service="2">
                    <div class="service-icon">
                        <img src="{{asset('web/image/icons8-videographer-66.png')}}" alt="Service 2 Icon">
                    </div>
                    <h3 class="service-title">Video Animation</h3>
                    <p class="service-description">Create a new composition with the desired resolution and frame rate.
                    </p>
                </div>
                <div class="service-box" data-service="2">
                    <div class="service-icon">
                        <img src="{{asset('web/image/icons8-social-60.png')}}" alt="Service 2 Icon">
                    </div>
                    <h3 class="service-title">Social Media </h3>
                    <p class="service-description"> “Elevate your business with Dotgix 🚀! From web development to
                        digital marketing.</p>
                </div>
                <div class="service-box" data-service="2">
                    <div class="service-icon">
                        <img src="{{asset('web/image/icons8-content-management-64.png')}}" alt="Service 2 Icon">
                    </div>
                    <h3 class="service-title">Content Mangment</h3>
                    <p class="service-description">We commit to honesty and transparency in all our dealings.</p>
                </div>
                <div class="service-box" data-service="2">
                    <div class="service-icon">
                        <img src="{{asset('web/image/icons8-seo-100.png')}}" alt="Service 2 Icon">
                    </div>
                    <h3 class="service-title">SEO,SEM Services</h3>
                    <p class="service-description">Explore Our Range of Services: From Web Design to SEO and Beyond

                    </p>
                </div>
                <div class="service-box" data-service="2">
                    <div class="service-icon">
                        <img src="{{asset('web/image/icons8-website-100.png')}}" alt="Service 2 Icon">
                    </div>
                    <h3 class="service-title">Media Websites</h3>
                    <p class="service-description"> Use the primary Dotgix logo on all major platforms and marketing
                        materials.</p>
                </div>

                <!-- Repeat for all 9 services -->
            </div>
        </section>
    </section>
    <br>
    <section id="about">
        <!-- Brows topic end -->
        <div class="content1">
            <div class="content2">
                <img src="{{asset('web/image/mobile-11.png')}}" alt="">

            </div>
            <div class="mob-img2">

                <h2> Great <span>Over</span> View </h2>
                <p>Their expert application designers and developers in Dubai are mainly focused on providing low-cost
                    app
                    development solutions that generate more revenue for customers. Mobile apps on the iPhone and
                    Android
                    versions can be tailored to the skills of their skilled engineer and create apps that make
                    smartphones
                    run faster for their clients.”Before you write these objectives, don’t forget to take inputs from
                    your
                    prospective client. They can help you to understand the tangible and measurable goals that you
                    should
                    use to gauge project success.

                </p>

            </div>
        </div>
    </section>
    <br>
    <!-- Brows topic -->
    <div class="brows">

        <div class="left2">
            <dotlottie-player src="https://lottie.host/c06efce8-a4fb-457d-aabb-98a0d77ca644/U4Sq3uKjwS.json"
                background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay>
            </dotlottie-player>
        </div>
        <div class="right2">
            <h2>Ready to <span>Use</span> <span class="underline">Dodgix</span> <span>Animation</span></h2>

            <div class="svg-icons1">
                <!-- Example SVGs -->
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"
                    class="svg-icon1 svg1">
                    <path fill="#83CD29"
                        d="M112.771 30.334L68.674 4.729c-2.781-1.584-6.402-1.584-9.205 0L14.901 30.334C12.031 31.985 10 35.088 10 38.407v51.142c0 3.319 2.084 6.423 4.954 8.083l11.775 6.688c5.628 2.772 7.617 2.772 10.178 2.772 8.333 0 13.093-5.039 13.093-13.828v-50.49c0-.713-.371-1.774-1.071-1.774h-5.623C42.594 41 41 42.061 41 42.773v50.49c0 3.896-3.524 7.773-10.11 4.48L18.723 90.73c-.424-.23-.723-.693-.723-1.181V38.407c0-.482.555-.966.982-1.213l44.424-25.561c.415-.235 1.025-.235 1.439 0l43.882 25.555c.42.253.272.722.272 1.219v51.142c0 .488.183.963-.232 1.198l-44.086 25.576c-.378.227-.847.227-1.261 0l-11.307-6.749c-.341-.198-.746-.269-1.073-.086-3.146 1.783-3.726 2.02-6.677 3.043-.726.253-1.797.692.41 1.929l14.798 8.754a9.294 9.294 0 004.647 1.246c1.642 0 3.25-.426 4.667-1.246l43.885-25.582c2.87-1.672 4.23-4.764 4.23-8.083V38.407c0-3.319-1.36-6.414-4.229-8.073zM77.91 81.445c-11.726 0-14.309-3.235-15.17-9.066-.1-.628-.633-1.379-1.272-1.379h-5.731c-.709 0-1.279.86-1.279 1.566 0 7.466 4.059 16.512 23.453 16.512 14.039 0 22.088-5.455 22.088-15.109 0-9.572-6.467-12.084-20.082-13.886-13.762-1.819-15.16-2.738-15.16-5.962 0-2.658 1.184-6.203 11.374-6.203 9.105 0 12.461 1.954 13.842 8.091.118.577.645.991 1.24.991h5.754c.354 0 .692-.143.94-.396.24-.272.367-.613.335-.979-.891-10.568-7.912-15.493-22.112-15.493-12.631 0-20.166 5.334-20.166 14.275 0 9.698 7.497 12.378 19.622 13.577 14.505 1.422 15.633 3.542 15.633 6.395 0 4.955-3.978 7.066-13.309 7.066z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"
                    class="svg-icon1 svg2" viewBox="0 0 128 128">
                    <defs>
                        <linearGradient id="a" x1="6" x2="235" y1="33" y2="344"
                            gradientTransform="translate(0 .937) scale(.3122)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#41d1ff" />
                            <stop offset="1" stop-color="#bd34fe" />
                        </linearGradient>
                        <linearGradient id="b" x1="194.651" x2="236.076" y1="8.818" y2="292.989"
                            gradientTransform="translate(0 .937) scale(.3122)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#ffea83" />
                            <stop offset=".083" stop-color="#ffdd35" />
                            <stop offset="1" stop-color="#ffa800" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#a)"
                        d="M124.766 19.52 67.324 122.238c-1.187 2.121-4.234 2.133-5.437.024L3.305 19.532c-1.313-2.302.652-5.087 3.261-4.622L64.07 25.187a3.09 3.09 0 0 0 1.11 0l56.3-10.261c2.598-.473 4.575 2.289 3.286 4.594Zm0 0" />
                    <path fill="url(#b)"
                        d="M91.46 1.43 48.954 9.758a1.56 1.56 0 0 0-1.258 1.437l-2.617 44.168a1.563 1.563 0 0 0 1.91 1.614l11.836-2.735a1.562 1.562 0 0 1 1.88 1.836l-3.517 17.219a1.562 1.562 0 0 0 1.985 1.805l7.308-2.223c1.133-.344 2.223.652 1.985 1.812l-5.59 27.047c-.348 1.692 1.902 2.614 2.84 1.164l.625-.968 34.64-69.13c.582-1.16-.421-2.48-1.69-2.234l-12.185 2.352a1.558 1.558 0 0 1-1.793-1.965l7.95-27.562A1.56 1.56 0 0 0 91.46 1.43Zm0 0" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 128 128"
                    class="svg-icon1 svg5" viewBox="0 0 128 128">
                    <path fill="#1572B6"
                        d="M18.814 114.123L8.76 1.352h110.48l-10.064 112.754-45.243 12.543-45.119-12.526z" />
                    <path fill="#33A9DC" d="M64.001 117.062l36.559-10.136 8.601-96.354h-45.16v106.49z" />
                    <path fill="#fff"
                        d="M64.001 51.429h18.302l1.264-14.163H64.001V23.435h34.682l-.332 3.711-3.4 38.114h-30.95V51.429z" />
                    <path fill="#EBEBEB"
                        d="M64.083 87.349l-.061.018-15.403-4.159-.985-11.031H33.752l1.937 21.717 28.331 7.863.063-.018v-14.39z" />
                    <path fill="#fff"
                        d="M81.127 64.675l-1.666 18.522-15.426 4.164v14.39l28.354-7.858.208-2.337 2.406-26.881H81.127z" />
                    <path fill="#EBEBEB"
                        d="M64.048 23.435v13.831H30.64l-.277-3.108-.63-7.012-.331-3.711h34.646zm-.047 27.996v13.831H48.792l-.277-3.108-.631-7.012-.33-3.711h16.447z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 128 128"
                    class="svg-icon1 svg6">
                    <path fill="#77c1d2" fill-rule="evenodd" d="M98.444 35.562 126 62.997 98.444 90.432 70.889 62.997z"
                        clip-rule="evenodd" />
                    <path fill="#2d3441" fill-rule="evenodd" d="m29.556 35.562 57.126 56.876H31.571L2 62.997z"
                        clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"
                    class="svg-icon1 svg7">
                    <path style="fill-rule:evenodd;fill:#fb70a9;fill-opacity:1"
                        d="M108.566 83.547c-1.937 2.926-3.406 6.527-7.34 6.527-6.624 0-6.98-10.203-13.609-10.203-6.625 0-6.265 10.203-12.887 10.203-6.625 0-6.98-10.203-13.609-10.203-6.625 0-6.266 10.203-12.887 10.203-6.625 0-6.98-10.203-13.605-10.203-6.629 0-6.27 10.203-12.89 10.203-2.083 0-3.544-1.008-4.778-2.39-4.738-8.239-7.465-17.895-7.465-28.22 0-30.222 23.367-54.722 52.191-54.722 28.825 0 52.192 24.5 52.192 54.723 0 8.64-1.91 16.816-5.313 24.082Zm0 0" />
                    <path style="fill-rule:evenodd;fill:#4e56a6;fill-opacity:1"
                        d="M40.844 78.145v22.668c0 4.066-3.301 7.363-7.371 7.363a7.365 7.365 0 0 1-7.371-7.364V73.45c1.375-2.523 2.945-4.707 5.78-4.707 4.61 0 6.223 5.79 8.962 9.403Zm27.843 1.183v35.844a8.185 8.185 0 0 1-8.187 8.183c-4.523 0-8.191-3.664-8.191-8.183v-40.57c1.543-2.973 3.132-5.86 6.39-5.86 5.16 0 6.563 7.242 9.989 10.586Zm26.211-.66v26.023c0 4.067-3.3 7.364-7.37 7.364-4.071 0-7.372-3.297-7.372-7.364V72.707c1.281-2.195 2.809-3.965 5.364-3.965 4.84 0 6.375 6.38 9.378 9.926Zm0 0" />
                    <path style="fill-rule:evenodd;fill:#000;fill-opacity:.298039"
                        d="M40.844 85.094c-1.309-1.602-2.856-2.79-5.094-2.79-5.316 0-6.293 6.696-9.648 9.712V63.145a7.365 7.365 0 0 1 7.37-7.364c4.071 0 7.372 3.297 7.372 7.364Zm27.843.515c-1.394-1.855-3.023-3.304-5.496-3.304-5.914 0-6.457 8.285-10.882 10.578v-12.77c0-4.52 3.668-8.183 8.191-8.183a8.185 8.185 0 0 1 8.188 8.183Zm26.211-1.433c-1.136-1.117-2.48-1.871-4.265-1.871-5.73 0-6.418 7.777-10.477 10.343V66.734a7.371 7.371 0 0 1 14.742 0Zm0 0" />
                    <path style="fill-rule:evenodd;fill:#fb70a9;fill-opacity:1"
                        d="M108.566 83.547c-1.937 2.926-3.406 6.527-7.34 6.527-6.624 0-6.98-10.203-13.609-10.203-6.625 0-6.265 10.203-12.887 10.203-6.625 0-6.98-10.203-13.609-10.203-6.625 0-6.266 10.203-12.887 10.203-6.625 0-6.98-10.203-13.605-10.203-6.629 0-6.27 10.203-12.89 10.203-2.083 0-3.544-1.008-4.778-2.39-4.738-8.239-7.465-17.895-7.465-28.22 0-30.222 23.367-54.722 52.191-54.722 28.825 0 52.192 24.5 52.192 54.723 0 8.64-1.91 16.816-5.313 24.082Zm0 0" />
                    <path style="fill-rule:evenodd;fill:#e24ca6;fill-opacity:1"
                        d="M97.273 88.984c13.676-20.332 14.028-42.879 1.059-67.652 9.613 9.844 15.547 23.348 15.547 38.25 0 8.61-1.98 16.75-5.508 23.992-2.004 2.91-3.531 6.5-7.61 6.5a5.947 5.947 0 0 1-3.488-1.09Zm0 0" />
                    <path style="fill-rule:evenodd;fill:#fff;fill-opacity:1"
                        d="M58.89 73.117c18.15 0 25.79-10.52 25.79-25.46 0-14.942-11.547-28.692-25.79-28.692-14.245 0-25.792 13.75-25.792 28.691 0 14.942 7.64 25.461 25.793 25.461Zm0 0" />
                    <path style="fill-rule:evenodd;fill:#030776;fill-opacity:1"
                        d="M61.625 37.836c0 5.89-4.332 10.668-9.672 10.668-5.344 0-9.672-4.777-9.672-10.668 0-5.89 4.328-10.668 9.672-10.668 5.34 0 9.672 4.777 9.672 10.668Zm0 0" />
                    <path style="fill-rule:evenodd;fill:#fff;fill-opacity:1"
                        d="M55.176 35.375c0 2.719-2.164 4.922-4.836 4.922s-4.836-2.203-4.836-4.922 2.164-4.922 4.836-4.922 4.836 2.203 4.836 4.922Zm0 0" />
                </svg>

            </div>
            <div class="svg-icons2">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"
                    class="svg-icon2 svg8">
                    <path fill="#0074BD"
                        d="M47.617 98.12s-4.767 2.774 3.397 3.71c9.892 1.13 14.947.968 25.845-1.092 0 0 2.871 1.795 6.873 3.351-24.439 10.47-55.308-.607-36.115-5.969zm-2.988-13.665s-5.348 3.959 2.823 4.805c10.567 1.091 18.91 1.18 33.354-1.6 0 0 1.993 2.025 5.132 3.131-29.542 8.64-62.446.68-41.309-6.336z" />
                    <path fill="#EA2D2E"
                        d="M69.802 61.271c6.025 6.935-1.58 13.17-1.58 13.17s15.289-7.891 8.269-17.777c-6.559-9.215-11.587-13.792 15.635-29.58 0 .001-42.731 10.67-22.324 34.187z" />
                    <path fill="#0074BD"
                        d="M102.123 108.229s3.529 2.91-3.888 5.159c-14.102 4.272-58.706 5.56-71.094.171-4.451-1.938 3.899-4.625 6.526-5.192 2.739-.593 4.303-.485 4.303-.485-4.953-3.487-32.013 6.85-13.743 9.815 49.821 8.076 90.817-3.637 77.896-9.468zM49.912 70.294s-22.686 5.389-8.033 7.348c6.188.828 18.518.638 30.011-.326 9.39-.789 18.813-2.474 18.813-2.474s-3.308 1.419-5.704 3.053c-23.042 6.061-67.544 3.238-54.731-2.958 10.832-5.239 19.644-4.643 19.644-4.643zm40.697 22.747c23.421-12.167 12.591-23.86 5.032-22.285-1.848.385-2.677.72-2.677.72s.688-1.079 2-1.543c14.953-5.255 26.451 15.503-4.823 23.725 0-.002.359-.327.468-.617z" />
                    <path fill="#EA2D2E"
                        d="M76.491 1.587S89.459 14.563 64.188 34.51c-20.266 16.006-4.621 25.13-.007 35.559-11.831-10.673-20.509-20.07-14.688-28.815C58.041 28.42 81.722 22.195 76.491 1.587z" />
                    <path fill="#0074BD"
                        d="M52.214 126.021c22.476 1.437 57-.8 57.817-11.436 0 0-1.571 4.032-18.577 7.231-19.186 3.612-42.854 3.191-56.887.874 0 .001 2.875 2.381 17.647 3.331z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"
                    class="svg-icon2 svg9">
                    <path
                        d="M0 8.934l49.854.158 14.167 24.47 14.432-24.47L128 8.935l-63.834 110.14zm126.98.637l-24.36.02-38.476 66.053L25.691 9.592.942 9.572l63.211 107.89zm-25.149-.008l-22.745.168-15.053 24.647L49.216 9.73l-22.794-.168 37.731 64.476zm-75.834-.17l23.002.009m-23.002-.01l23.002.01"
                        fill="none" />
                    <path d="M25.997 9.393l23.002.009L64.035 34.36 79.018 9.404 102 9.398 64.15 75.053z"
                        fill="#35495e" />
                    <path d="M.91 9.569l25.067-.172 38.15 65.659L101.98 9.401l25.11.026-62.966 108.06z"
                        fill="#41b883" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"
                    class="svg-icon2 svg12" viewBox="0 0 128 128">
                    <path fill="#DF234F"
                        d="M75.4.3c-.9 0-1.8.2-2.6.5 1.7 1.1 2.6 2.6 3.1 4.3 0 .2.1.4.1.6 0 .2.1.4.1.6.1 2.9-.8 3.3-1.4 5-1 2.2-.7 4.6.5 6.5.1.2.2.5.4.7-1.3-8.4 5.7-9.6 7-12.2.1-2.3-1.8-3.8-3.3-4.9C77.8.5 76.6.3 75.4.3zm10.5 1.8c-.1.8 0 .6-.1 1 0 .3 0 .6-.1.9-.1.3-.1.5-.2.8-.1.3-.2.5-.3.8-.1.2-.2.4-.3.7-.1.1-.2.3-.3.4-.1.1-.1.2-.2.3-.2.2-.3.5-.5.7l-.6.6c-.2.2-.4.4-.6.5-.7.5-1.5.9-2.2 1.4-.2.2-.5.3-.7.5-.2.2-.4.3-.6.5l-.6.6c-.2.2-.4.4-.5.7-.2.2-.3.5-.5.7-.1.3-.2.5-.4.8-.1.3-.2.5-.3.8-.1.3-.2.6-.2.8 0 .1 0 .3-.1.4 0 .1 0 .3-.1.4v1.4c0 .3 0 .5.1.8 0 .3.1.5.2.8.1.3.2.5.3.8.1.2.2.3.2.5l-7.6-2.9c-1.3-.4-2.5-.7-3.8-1-.7-.2-1.4-.3-2.1-.5-2-.4-4-.7-6-.9h-.2c-2-.2-3.9-.3-5.9-.3-1.5 0-2.9.1-4.3.2-2 .1-4 .4-6 .7l-1.5.3c-1 .2-2 .4-3 .7-.5.1-1 .3-1.5.4-.5.2-1 .4-1.4.6-.4.2-.7.3-1.1.5-.1 0-.1 0-.2.1-.3.2-.6.3-.9.5-.1 0-.2.1-.2.1-.4.2-.7.4-1 .5-.2.1-.5.2-.7.3-.1.1-.2.1-.3.2-.3.2-.6.3-.9.5-.3.2-.6.3-.8.5-.2.2-.5.3-.7.5 0 0-.1 0-.1.1-.2.1-.4.3-.6.5l-.1.1c-.2.1-.3.3-.5.4-.1 0-.1.1-.2.1-.2.1-.3.3-.5.4 0 .1-.1.1-.1.1l-.6.6-.1.1-.6.6s0 .1-.1.1l-.5.5c-.1.1-.2.1-.2.2l-.6.6c0 .1-.1.1-.1.2l-.8.8-.1.1c-.5.6-1.1 1.1-1.7 1.6-.6.5-1.2 1-1.9 1.5s-1.3.9-2 1.3-1.4.7-2.1 1c-.7.3-1.4.6-2.1.8-1.4.3-2.8.9-4 1 0-.5-.3-.4-.6-.4-.3.1-.6.1-.8.2-.3.1-.5.2-.8.3-.3.1-.5.2-.8.4-.2.2-.5.3-.7.5-.2.2-.5.4-.7.6-.2.2-.5.4-.7.6-.2.2-.4.4-.6.7-.2.3-.4.5-.5.8-.2.2-.3.5-.5.8-.1.3-.3.6-.4.9l-.3.9c-.1.3-.1.5-.2.8v.1c-.1.3-.1.7-.1.9.1-.1.1.1.1.3v.4c0 .2.1.4.1.6.1.2.1.4.2.6.1.2.2.4.4.6.1.2.3.4.4.6.2.2.4.4.6.5.2.2.4.4.6.5.8.7 1 .9 2 1.5.2.1.3.2.5.3h.1v.2c0 .3.1.5.2.8.1.3.2.6.3.8l.3.6c0 .1.1.1.1.2.1.3.3.5.4.7.2.2.3.5.5.7l.6.6.6.6H8c.2.2.4.3.6.5.2.2.5.3.7.4.2.1.5.3.8.4.2.1.4.2.7.2 0 0 .1 0 .1.1.1 0 .3.1.4.1-.1 1.8-.1 3.5.1 4.1.3.7 1.8-1.4 3.2-3.7-.2 2.3-.3 5 0 5.8.4.8 2.3-1.8 4.1-4.6 23.4-5.4 44.8 10.8 47.1 33.7-.4-3.6-4.8-5.6-6.9-5.1-1 2.4-2.7 5.6-5.4 7.5.2-2.2.1-4.4-.3-6.6-.7 3-2.1 5.9-4.1 8.3-3.1.2-6.3-1.3-7.9-3.6-.1-.1-.2-.3-.3-.4-.1-.2-.2-.5-.3-.7-.1-.2-.2-.5-.2-.7v-.7-.5c0-.2.1-.5.2-.7.1-.2.1-.5.2-.7.1-.2.2-.5.4-.7.6-1.6.6-2.9-.5-3.6l-.6-.3c-.1 0-.3-.1-.4-.1-.1 0-.2-.1-.3-.1-.2-.1-.5-.1-.7-.2-.2-.1-.5-.1-.7-.1-.2 0-.5-.1-.7-.1h-.5c-.3 0-.5 0-.7.1-.2 0-.5.1-.7.1-.2.1-.5.1-.7.2-.2.1-.4.2-.7.3l-.6.3c-7.7 5-3.1 16.8 2.1 20.2-2 .4-4 .8-4.6 1.2l-.1.1c1.4.9 2.9 1.6 4.5 2.2 2.1.7 4.4 1.3 5.4 1.6 2.7.6 5.5.8 8.3.6 14.6-1 26.6-12.2 28.8-26.8.1.3.1.6.2.9.1.6.2 1.2.3 1.9.1.3.1.6.1.9v.1c0 .3.1.6.1.9 0 .4.1.7.1 1.1V91.6c0 .3-.1.5-.1.8v.3c0 .3-.1.6-.1 1-.1.3-.1.6-.2.9v.1c-.1.3-.1.6-.2.9v.1c-.1.3-.1.6-.2.9v.1l-.3.9v.1c-.1.3-.2.7-.3 1-.1.3-.2.6-.4 1-.1.3-.2.7-.4 1-.1.3-.3.6-.4 1-.1.3-.3.6-.4.9 0 .1-.1.2-.1.2s0 .1-.1.1c-2.1 4.3-5.3 8.1-9.3 11.1-.3.2-.5.4-.8.6-.1.1-.2.1-.2.2-.2.2-.5.3-.7.5l.1.2c.5-.1.9-.1 1.4-.2.9-.1 1.7-.3 2.6-.5.2 0 .5-.1.7-.2.2 0 .3-.1.5-.1s.5-.1.7-.1c.2-.1.4-.1.6-.2 3.3-.8 6.5-1.9 9.6-3.2-5.3 7.2-12.3 13-20.5 16.8 3.8-.3 7.6-.9 11.3-2 13.3-3.9 24.5-12.9 31.2-25-1.4 7.6-4.4 14.9-8.9 21.3 3.2-2.1 6.1-4.6 8.8-7.3 7.4-7.7 12.3-17.6 13.9-28.1 1.1 5.2 1.5 10.6 1 15.9 23.9-33.3 2-67.8-7.2-76.9 0-.1-.1-.1-.1-.2v0c0 .4 0 .8-.1 1.2-.1.8-.2 1.5-.3 2.2-.2.7-.4 1.5-.6 2.2-.2.7-.5 1.4-.8 2.1-.3.7-.6 1.4-1 2-.4.6-.8 1.3-1.2 1.9-.4.6-.9 1.2-1.4 1.8-.5.6-1 1.1-1.6 1.7-.3.3-.6.6-1 .8-.3.2-.5.4-.8.7-.6.5-1.2.9-1.9 1.3-.6.4-1.3.8-2 1.1l-2.1.9c-.7.3-1.4.5-2.1.7-.7.2-1.5.4-2.2.5-.8.1-1.5.2-2.2.3-.5 0-1.1.1-1.6.1-.8 0-1.5-.1-2.2-.1-.8-.1-1.5-.2-2.2-.3-.8-.1-1.5-.3-2.2-.6.7-.1 1.5-.1 2.2-.3.8-.1 1.5-.3 2.2-.5.7-.2 1.5-.4 2.1-.7l2.1-.9c.7-.3 1.3-.7 2-1.1.6-.4 1.3-.9 1.9-1.3.6-.5 1.2-1 1.7-1.5.6-.5 1.1-1.1 1.6-1.6.5-.6 1-1.2 1.4-1.8.1-.1.1-.2.2-.3.3-.5.7-1.1 1-1.6.4-.7.7-1.3 1-2 .3-.7.6-1.4.8-2.1l.6-2.1c.1-.8.3-1.5.3-2.2.1-.8.1-1.5.1-2.2 0-.5 0-1.1-.1-1.6-.1-.8-.2-1.5-.3-2.2-.1-.8-.3-1.5-.5-2.2-.2-.7-.5-1.4-.7-2.1-.3-.7-.6-1.4-.9-2-.4-.7-.7-1.3-1.1-2-.4-.6-.9-1.2-1.3-1.8-.5-.6-1-1.1-1.5-1.7-.3-.3-.6-.6-.9-.8-1.5-1.2-3-2.2-4.6-3.2-.2-.1-.4-.2-.7-.3-1.3-1.1-2.3-1.4-3.3-1.8z" />
                </svg><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"
                    class="svg-icon2 svg13" viewBox="0 0 128 128">
                    <g fill="#61DAFB">
                        <circle cx="64" cy="64" r="11.4" />
                        <path
                            d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3.6-2.4 1.1-4.8 1.5-7.1 2.1-13.2-.2-22.5-6.6-26.1-1.9-1.1-4-1.6-6.4-1.6-7 0-15.9 5.2-24.9 13.9-9-8.7-17.9-13.9-24.9-13.9-2.4 0-4.5.5-6.4 1.6-6.4 3.7-8.7 13-6.6 26.1.4 2.3.9 4.7 1.5 7.1-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3-.6 2.4-1.1 4.8-1.5 7.1-2.1 13.2.2 22.5 6.6 26.1 1.9 1.1 4 1.6 6.4 1.6 7.1 0 16-5.2 24.9-13.9 9 8.7 17.9 13.9 24.9 13.9 2.4 0 4.5-.5 6.4-1.6 6.4-3.7 8.7-13 6.6-26.1-.4-2.3-.9-4.7-1.5-7.1 2.4-.7 4.7-1.4 6.9-2.3 12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8zM92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3-.3 2.1-.8 4.3-1.4 6.6-5.2-1.2-10.7-2-16.5-2.5-3.4-4.8-6.9-9.1-10.4-13 7.4-7.3 14.9-12.3 21-12.3 1.3 0 2.5.3 3.5.9zM81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6-3.7.3-7.4.4-11.2.4-3.9 0-7.6-.1-11.2-.4-2.2-3.2-4.2-6.4-6-9.6-1.9-3.3-3.7-6.7-5.3-10 1.6-3.3 3.4-6.7 5.3-10 1.8-3.2 3.9-6.4 6.1-9.6 3.7-.3 7.4-.4 11.2-.4 3.9 0 7.6.1 11.2.4 2.2 3.2 4.2 6.4 6 9.6 1.9 3.3 3.7 6.7 5.3 10-1.7 3.3-3.4 6.6-5.3 10zm8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3-3.4.8-7 1.4-10.8 1.9 1.2-1.9 2.5-3.9 3.6-6 1.2-2.1 2.3-4.2 3.4-6.2zM64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3 2.3.1 4.6.2 6.9.2 2.3 0 4.6-.1 6.9-.2-2.2 2.9-4.5 5.7-6.9 8.3zm-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9 1.1-3.3 2.3-6.8 3.8-10.3 1.1 2 2.2 4.1 3.4 6.1 1.2 2.2 2.4 4.1 3.6 6.1zm-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3 3.4-.8 7-1.4 10.8-1.9-1.2 1.9-2.5 3.9-3.6 6-1.2 2.1-2.3 4.2-3.4 6.2zM64 30.2c2.4 2.6 4.7 5.4 6.9 8.3-2.3-.1-4.6-.2-6.9-.2-2.3 0-4.6.1-6.9.2 2.2-2.9 4.5-5.7 6.9-8.3zm22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9-1.1 3.3-2.3 6.8-3.8 10.3-1.1-2.1-2.2-4.2-3.4-6.2zM31.7 35c-1.7-10.5-.3-17.9 3.8-20.3 1-.6 2.2-.9 3.5-.9 6 0 13.5 4.9 21 12.3-3.5 3.8-7 8.2-10.4 13-5.8.5-11.3 1.4-16.5 2.5-.6-2.3-1-4.5-1.4-6.6zM7 64c0-4.7 5.7-9.7 15.7-13.4 2-.8 4.2-1.5 6.4-2.1 1.6 5 3.6 10.3 6 15.6-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64zm28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3.3-2.1.8-4.3 1.4-6.6 5.2 1.2 10.7 2 16.5 2.5 3.4 4.8 6.9 9.1 10.4 13-7.4 7.3-14.9 12.3-21 12.3-1.3 0-2.5-.3-3.5-.9zM96.3 93c1.7 10.5.3 17.9-3.8 20.3-1 .6-2.2.9-3.5.9-6 0-13.5-4.9-21-12.3 3.5-3.8 7-8.2 10.4-13 5.8-.5 11.3-1.4 16.5-2.5.6 2.3 1 4.5 1.4 6.6zm9-15.6c-2 .8-4.2 1.5-6.4 2.1-1.6-5-3.6-10.3-6-15.6 2.4-5.3 4.5-10.5 6-15.5 13.8 4 22.1 10 22.1 15.6 0 4.7-5.8 9.7-15.7 13.4z" />
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"
                    class="svg-icon2 svg14" viewBox="0 0 128 128">
                    <path fill="#B3B3B3"
                        d="M63.81 1.026L4.553 21.88l9.363 77.637 49.957 27.457 50.214-27.828 9.36-77.635z" />
                    <path fill="#A6120D" d="M117.536 25.998L63.672 7.629v112.785l45.141-24.983z" />
                    <path fill="#DD1B16" d="M11.201 26.329l8.026 69.434 44.444 24.651V7.627z" />
                    <path fill="#F2F2F2"
                        d="M78.499 67.67l-14.827 6.934H48.044l-7.347 18.374-13.663.254 36.638-81.508L78.499 67.67zm-1.434-3.491L63.77 37.858 52.864 63.726h10.807l13.394.453z" />
                    <path fill="#B3B3B3"
                        d="M63.671 11.724l.098 26.134 12.375 25.888H63.698l-.027 10.841 17.209.017 8.042 18.63 13.074.242z" />
                </svg>
                <!-- Add more SVGs as needed -->
            </div>
            <div class="svg-icons3">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"
                    class="svg-icon3 svg15" viewBox="0 0 128 128">
                    <path fill="url(#a)"
                        d="M0 64c0 18.593 28.654 33.667 64 33.667 35.346 0 64-15.074 64-33.667 0-18.593-28.655-33.667-64-33.667C28.654 30.333 0 45.407 0 64Z" />
                    <path fill="#777bb3"
                        d="M64 95.167c33.965 0 61.5-13.955 61.5-31.167 0-17.214-27.535-31.167-61.5-31.167S2.5 46.786 2.5 64c0 17.212 27.535 31.167 61.5 31.167Z" />
                    <path
                        d="M34.772 67.864c2.793 0 4.877-.515 6.196-1.53 1.306-1.006 2.207-2.747 2.68-5.175.44-2.27.272-3.854-.5-4.71-.788-.874-2.493-1.317-5.067-1.317h-4.464l-2.473 12.732zM20.173 83.547a.694.694 0 0 1-.68-.828l6.557-33.738a.695.695 0 0 1 .68-.561h14.134c4.442 0 7.748 1.206 9.827 3.585 2.088 2.39 2.734 5.734 1.917 9.935-.333 1.711-.905 3.3-1.7 4.724a15.818 15.818 0 0 1-3.128 3.92c-1.531 1.432-3.264 2.472-5.147 3.083-1.852.604-4.232.91-7.07.91h-5.724l-1.634 8.408a.695.695 0 0 1-.682.562z" />
                    <path fill="#fff"
                        d="M34.19 55.826h3.891c3.107 0 4.186.682 4.553 1.089.607.674.723 2.097.331 4.112-.439 2.257-1.253 3.858-2.42 4.756-1.194.92-3.138 1.386-5.773 1.386h-2.786l2.205-11.342zm6.674-8.1H26.731a1.39 1.39 0 0 0-1.364 1.123L18.81 82.588a1.39 1.39 0 0 0 1.363 1.653h7.35a1.39 1.39 0 0 0 1.363-1.124l1.525-7.846h5.151c2.912 0 5.364-.318 7.287-.944 1.977-.642 3.796-1.731 5.406-3.237a16.522 16.522 0 0 0 3.259-4.087c.831-1.487 1.429-3.147 1.775-4.931.86-4.423.161-7.964-2.076-10.524-2.216-2.537-5.698-3.823-10.349-3.823zM30.301 68.557h4.471c2.963 0 5.17-.557 6.62-1.675 1.451-1.116 2.428-2.98 2.938-5.591.485-2.508.264-4.277-.665-5.308-.931-1.03-2.791-1.546-5.584-1.546h-5.036l-2.743 14.12m10.563-19.445c4.252 0 7.353 1.117 9.303 3.348 1.95 2.232 2.536 5.347 1.76 9.346-.322 1.648-.863 3.154-1.625 4.518-.764 1.366-1.76 2.614-2.991 3.747-1.468 1.373-3.097 2.352-4.892 2.935-1.794.584-4.08.875-6.857.875h-6.296l-1.743 8.97h-7.35l6.558-33.739h14.133" />
                    <path
                        d="M69.459 74.577a.694.694 0 0 1-.682-.827l2.9-14.928c.277-1.42.209-2.438-.19-2.87-.245-.263-.979-.704-3.15-.704h-5.256l-3.646 18.768a.695.695 0 0 1-.683.56h-7.29a.695.695 0 0 1-.683-.826l6.558-33.739a.695.695 0 0 1 .682-.561h7.29a.695.695 0 0 1 .683.826L64.41 48.42h5.653c4.307 0 7.227.758 8.928 2.321 1.733 1.593 2.275 4.14 1.608 7.573l-3.051 15.702a.695.695 0 0 1-.682.56h-7.407z" />
                    <path fill="#fff"
                        d="M65.31 38.755h-7.291a1.39 1.39 0 0 0-1.364 1.124l-6.557 33.738a1.39 1.39 0 0 0 1.363 1.654h7.291a1.39 1.39 0 0 0 1.364-1.124l3.537-18.205h4.682c2.168 0 2.624.463 2.641.484.132.14.305.795.019 2.264l-2.9 14.927a1.39 1.39 0 0 0 1.364 1.654h7.408a1.39 1.39 0 0 0 1.363-1.124l3.051-15.7c.715-3.686.103-6.45-1.82-8.217-1.836-1.686-4.91-2.505-9.398-2.505h-4.81l1.421-7.315a1.39 1.39 0 0 0-1.364-1.655zm0 1.39-1.743 8.968h6.496c4.087 0 6.907.714 8.457 2.14 1.553 1.426 2.017 3.735 1.398 6.93l-3.052 15.699h-7.407l2.901-14.928c.33-1.698.208-2.856-.365-3.474-.573-.617-1.793-.926-3.658-.926h-5.829l-3.756 19.327H51.46l6.558-33.739h7.292z" />
                    <path
                        d="M92.136 67.864c2.793 0 4.878-.515 6.198-1.53 1.304-1.006 2.206-2.747 2.679-5.175.44-2.27.273-3.854-.5-4.71-.788-.874-2.493-1.317-5.067-1.317h-4.463l-2.475 12.732zM77.54 83.547a.694.694 0 0 1-.682-.828l6.557-33.738a.695.695 0 0 1 .682-.561H98.23c4.442 0 7.748 1.206 9.826 3.585 2.089 2.39 2.734 5.734 1.917 9.935a15.878 15.878 0 0 1-1.699 4.724 15.838 15.838 0 0 1-3.128 3.92c-1.53 1.432-3.265 2.472-5.147 3.083-1.852.604-4.232.91-7.071.91h-5.723l-1.633 8.408a.695.695 0 0 1-.683.562z" />
                    <path fill="#fff"
                        d="M91.555 55.826h3.891c3.107 0 4.186.682 4.552 1.089.61.674.724 2.097.333 4.112-.44 2.257-1.254 3.858-2.421 4.756-1.195.92-3.139 1.386-5.773 1.386h-2.786l2.204-11.342zm6.674-8.1H84.096a1.39 1.39 0 0 0-1.363 1.123l-6.558 33.739a1.39 1.39 0 0 0 1.364 1.653h7.35a1.39 1.39 0 0 0 1.363-1.124l1.525-7.846h5.15c2.911 0 5.364-.318 7.286-.944 1.978-.642 3.797-1.731 5.408-3.238a16.52 16.52 0 0 0 3.258-4.086c.832-1.487 1.428-3.147 1.775-4.931.86-4.423.162-7.964-2.076-10.524-2.216-2.537-5.697-3.823-10.35-3.823zM87.666 68.557h4.47c2.964 0 5.17-.557 6.622-1.675 1.45-1.116 2.428-2.98 2.936-5.591.487-2.508.266-4.277-.665-5.308-.93-1.03-2.791-1.546-5.583-1.546h-5.035Zm10.563-19.445c4.251 0 7.354 1.117 9.303 3.348 1.95 2.232 2.537 5.347 1.759 9.346-.32 1.648-.862 3.154-1.624 4.518-.763 1.366-1.76 2.614-2.992 3.747-1.467 1.373-3.097 2.352-4.892 2.935-1.793.584-4.078.875-6.856.875h-6.295l-1.745 8.97h-7.35l6.558-33.739h14.133" />
                    <defs>
                        <radialGradient id="a" cx="0" cy="0" r="1"
                            gradientTransform="matrix(84.04136 0 0 84.04136 38.426 42.169)"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#AEB2D5" />
                            <stop offset=".3" stop-color="#AEB2D5" />
                            <stop offset=".75" stop-color="#484C89" />
                            <stop offset="1" stop-color="#484C89" />
                        </radialGradient>
                    </defs>
                </svg>

                <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                    viewBox="0 0 128 128" class="svg-icon3 svg16">
                    <path
                        d="M39.267 108.97l-.284-.567c-.567-1.135-.567-2.27-.283-3.689H8.059L53.454 24.14l19.009 34.33 6.241-4.54L59.695 19.6c-.283-.567-2.553-3.971-6.241-3.971-1.703 0-4.256.567-6.242 4.255L1.25 101.31c-.284.852-2.27 4.54-.568 7.66 1.135 1.703 2.838 3.405 6.81 3.405h38.585c-3.972 0-5.958-1.702-6.81-3.404z"
                        fill="#00c58e" />
                    <path
                        d="M126.65 101.59L89.767 35.201c-.567-.567-2.553-4.256-6.242-4.256-1.702 0-4.255.851-6.241 4.256l-4.823 7.944v15.321l11.065-19.009 36.599 65.254h-13.902a6.525 6.525 0 01-.568 3.972l-.284.284c-1.702 3.12-5.958 3.404-6.525 3.404h21.562c.851 0 4.823-.283 6.809-3.404.851-1.419 1.419-3.972-.567-7.377z"
                        fill="#108775" />
                    <path
                        d="M106.51 108.97v-.284l.284-.567c.283-1.135.567-2.27.283-3.405l-1.134-3.404-28.938-50.501-4.256-7.66h-.284l-4.256 7.66-28.938 50.5-1.134 3.405a6.81 6.81 0 00.567 4.256c1.135 1.702 2.837 3.405 6.809 3.405h53.906c.851 0 5.107-.284 7.093-3.405zM72.464 58.469l26.386 46.245H46.079z"
                        fill="#2f495e" />
                </svg>

            </div>

        </div>


    </div>


    <!-- Ticket Packages Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- Basic Package -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-item p-5 h-100">
                        <div class="pricing-head pb-4">
                            <h2 class="text-white mb-4" style="font-size: x-large;">Basic Packages</h2>
                            <h2 class="text-white mb-0" style="font-size: xxx-large;">$49.90</h2>
                            <span class="fs-5 fw-normal"
                                style="text-decoration: line-through; color: red;">$60.90</span>
                        </div>
                        <div class="feature-list">
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>5 GB Ram</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>40GB SSD Cloud Storage</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Month Subscription</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Responsive Framework</p>
                            <p class="mb-4" style="text-decoration: line-through;"><i
                                    class="fa fa-times text-dark me-2"></i>Monthly Billing Software</p>
                            <p class="mb-4" style="text-decoration: line-through;"><i
                                    class="fa fa-times text-dark me-2"></i>1 Free Website</p>
                        </div>
                        <br><br>
                        <button class="button-service  py-3 px-5">Buy Now</button>
                    </div>
                </div>
                <!-- Other Packages... -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-item2 p-5 h-100">
                        <div class="pricing-head2 pb-4">
                            <h2 class="text-white mb-4">Standard Packages</h2>
                            <h2 class="text-white mb-0">$200.00</h2>
                            <span class="fs-5 fw-normal"
                                style="text-decoration: line-through; color: red;">$250.00</span>
                        </div>
                        <div class="feature-list2" style="color: white;">
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>20 GB Ram
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>60GB SSD Cloud Storage
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Year Subscription
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Responsive Framework
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Monthly Billing Software
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Free Hosting</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>20 Emails </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>5 Domains </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Endless Support</p>
                            <p class="mb-4" style="text-decoration: line-through;"><i
                                    class="fa fa-times text-dark me-2"></i>1 Free Website</p>

                        </div><br><br>
                        <button class="button-service  py-3 px-5">Buy Now</button>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-item3 p-5 h-100">
                        <div class="pricing-head3 pb-4">
                            <h2 class="text-white mb-4" style="font-size: x-large;">Premium Packages</h2>
                            <h2 class="text-white mb-0" style="font-size: xxx-large;">$100.00</h2>
                            <span class="fs-5 fw-normal"
                                style="text-decoration: line-through; color: red;">$150.00</span>
                        </div>
                        <div class="feature-list">
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>10 GB Ram
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>50GB SSD Cloud Storage
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Year Subscription
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Responsive Framework
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Monthly Billing Software
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>1 Free Website
                            </p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>1GB Bandwidth
                            </p>
                        </div><br><br>
                        <button class="button-service  py-3 px-5">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ticket Packages End -->
    <section id="contact">
        <div class="background" id="contact">
            <div class="container">
                <div class="content-layout">
                    <!-- Contact Form -->
                    <div class="screen">
                        <div class="screen-header">
                            <div class="screen-header-left">
                                <div class="screen-header-button close"></div>
                                <div class="screen-header-button maximize"></div>
                                <div class="screen-header-button minimize"></div>
                            </div>
                            <div class="screen-header-right">
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                            </div>
                        </div>
                        <div class="screen-body">
                            <div class="screen-body-item ">
                                <div class="app-title">
                                    <span>CONTACT</span>
                                    <span>US</span>
                                </div>
                                <div class="p-text">
                                    <p>
                                        From concept to execution, Dodgix Technology is committed to delivering
                                        excellence. Our tailored software solutions are designed to meet your needs with
                                        precision and quality.

                                    </p>
                                </div>

                            </div>
                            <div class="screen-body-item">
                                <div class="app-form">
                                    <div class="app-form-group">
                                        <input class="app-form-control" placeholder="NAME">
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" placeholder="EMAIL">
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" placeholder="CONTACT NO">
                                    </div>
                                    <div class="app-form-group message">
                                        <input class="app-form-control" placeholder="MESSAGE">
                                    </div>
                                    <div class="app-form-group buttons">
                                        <button class="app-form-button">CANCEL</button>
                                        <button class="app-form-button">SEND</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="credits">
                    inspired by
                    <a class="credits-link" href="https://dribbble.com/shots/2666271-Contact" target="_blank">
                        <svg class="dribbble" viewBox="0 0 200 200">
                            <g stroke="#ffffff" fill="none">
                                <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
                                <path
                                    d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345"
                                    stroke-width="20"></path>
                                <path
                                    d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951"
                                    stroke-width="20"></path>
                                <path
                                    d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103"
                                    stroke-width="20"></path>
                            </g>
                        </svg>
                        Dodgix
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="footer-logo p-0">
                            <h4 class="text-white mb-4" style="font-size: 2vw;"><i
                                    class="fas fa-swimmer text-primary me-3"></i>Dodgix Technology</h4>
                        </a>
                        <p class="footer-description mb-2" style="font-size: 13px;">At Dodgix Technology, we’re not just
                            keeping up with the future; we’re shaping it. Our cutting-edge solutions and
                            forward-thinking approach ensure that your technology needs are met with precision and
                            excellence.</p>
                        <div class="footer-contact d-flex align-items-center">
                            <svg width="34px" height="34px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="0.5"
                                        d="M19.7165 20.3624C21.143 19.5846 22 18.5873 22 17.5C22 16.3475 21.0372 15.2961 19.4537 14.5C17.6226 13.5794 14.9617 13 12 13C9.03833 13 6.37738 13.5794 4.54631 14.5C2.96285 15.2961 2 16.3475 2 17.5C2 18.6525 2.96285 19.7039 4.54631 20.5C6.37738 21.4206 9.03833 22 12 22C15.1066 22 17.8823 21.3625 19.7165 20.3624Z"
                                        fill="#ebf8ff"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5 8.51464C5 4.9167 8.13401 2 12 2C15.866 2 19 4.9167 19 8.51464C19 12.0844 16.7658 16.2499 13.2801 17.7396C12.4675 18.0868 11.5325 18.0868 10.7199 17.7396C7.23416 16.2499 5 12.0844 5 8.51464ZM12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7C10.8954 7 10 7.89543 10 9C10 10.1046 10.8954 11 12 11Z"
                                        fill="#ebf8ff"></path>
                                </g>
                            </svg>
                            <p class="text-white mb-0 p-2">Gulsan-e-Iqbal</p>
                        </div><br>
                        <div class="footer-contact d-flex align-items-center">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                                width="30px" height="30px" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <polygon style="fill:#e0f0f5;"
                                        points="512,243.712 512,172.862 256,3.254 0,172.862 0,243.712 67.579,388.631 256,411.174 446.517,384.338 ">
                                    </polygon>
                                    <rect x="91.241" y="66.703" style="fill:#E6E6E6;" width="329.513" height="360.887">
                                    </rect>
                                    <g>
                                        <polygon style="fill:#7DD2F0;"
                                            points="0,508.746 0,243.712 167.628,364.022 104.078,477.73 "></polygon>
                                        <polygon style="fill:#7DD2F0;"
                                            points="512,508.746 512,243.712 344.37,364.022 407.922,477.73 "></polygon>
                                    </g>
                                    <g>
                                        <path style="fill:#515262;"
                                            d="M344.37,138.736H167.628c-4.867,0-8.813-3.945-8.813-8.813c0-4.868,3.946-8.813,8.813-8.813H344.37 c4.867,0,8.813,3.945,8.813,8.813C353.183,134.791,349.237,138.736,344.37,138.736z">
                                        </path>
                                        <path style="fill:#515262;"
                                            d="M344.37,179.528H167.628c-4.867,0-8.813-3.945-8.813-8.813s3.946-8.813,8.813-8.813H344.37 c4.867,0,8.813,3.945,8.813,8.813S349.237,179.528,344.37,179.528z">
                                        </path>
                                        <path style="fill:#515262;"
                                            d="M344.37,220.32H167.628c-4.867,0-8.813-3.945-8.813-8.813s3.946-8.813,8.813-8.813H344.37 c4.867,0,8.813,3.945,8.813,8.813S349.237,220.32,344.37,220.32z">
                                        </path>
                                    </g>
                                    <polygon style="fill:#99E4FF;" points="512,508.746 0,508.746 256,287.725 ">
                                    </polygon>
                                </g>
                            </svg>
                            <p class="text-white mb-0 p-2">tayyab@example.com</p>
                        </div><br>
                        <div class="footer-contact d-flex align-items-center">
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="34px"
                                viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path fill="#394240"
                                                d="M59,29H47c-1.657,0-3,1.344-3,3s1.343,3,3,3h12c1.657,0,3-1.344,3-3S60.657,29,59,29z M59,33H47 c-0.553,0-1-0.447-1-1s0.447-1,1-1h12c0.553,0,1,0.447,1,1S59.553,33,59,33z">
                                            </path>
                                            <path fill="#394240"
                                                d="M57.312,44.57l-11.275-4.104c-1.559-0.566-3.279,0.236-3.846,1.793c-0.566,1.556,0.235,3.277,1.793,3.845 l11.276,4.105c1.558,0.565,3.278-0.238,3.845-1.793C59.672,46.858,58.87,45.137,57.312,44.57z M57.227,47.731 c-0.189,0.521-0.763,0.786-1.281,0.598l-11.277-4.104c-0.52-0.189-0.786-0.762-0.598-1.281c0.189-0.52,0.763-0.788,1.282-0.599 l11.276,4.104C57.148,46.638,57.416,47.212,57.227,47.731z">
                                            </path>
                                            <path fill="#394240"
                                                d="M46.036,23.53l11.276-4.104c1.557-0.566,2.359-2.289,1.793-3.843c-0.566-1.558-2.288-2.362-3.846-1.796 l-11.275,4.105c-1.559,0.566-2.36,2.289-1.794,3.846C42.757,23.294,44.479,24.098,46.036,23.53z M44.668,19.772l11.276-4.104 c0.519-0.188,1.093,0.079,1.281,0.599c0.189,0.52-0.078,1.092-0.597,1.281l-11.277,4.104c-0.52,0.189-1.093-0.078-1.281-0.598 C43.881,20.534,44.148,19.962,44.668,19.772z">
                                            </path>
                                            <path fill="#394240"
                                                d="M30,0H14c-0.52,0-1.039,0.105-1.527,0.309c-0.492,0.203-0.938,0.496-1.309,0.871C10.766,1.578,2,12,2,32 s8.316,29.688,8.672,30.219c0.113,0.172,0.262,0.309,0.395,0.457c0.062,0.066,0.109,0.137,0.176,0.199 c0.328,0.316,0.699,0.562,1.102,0.742c0.086,0.043,0.176,0.07,0.266,0.102C13.055,63.883,13.52,64,13.992,64 C13.996,64,14,64,14,64h12h4c2.211,0,4-1.789,4-4V46c0-2.211-1.789-4-4-4h-9c-0.553,0-1-0.447-1-1V23c0-0.553,0.447-1,1-1h9 c2.211,0,4-1.789,4-4V4C34,1.789,32.211,0,30,0z M26,44h4c1.103,0,2,0.897,2,2v14c0,1.103-0.897,2-2,2h-4V44z M22,44h2v18h-2V44z M20,20c-1.104,0-2,0.896-2,2v20c0,1.104,0.896,2,2,2v18h-6.008c-0.175,0-0.407-0.053-0.726-0.17l-0.09-0.031 c-0.006-0.002-0.012-0.005-0.018-0.008c-0.18-0.08-0.338-0.183-0.493-0.323c-0.04-0.047-0.08-0.095-0.123-0.141 c-0.045-0.05-0.091-0.1-0.138-0.148c-0.03-0.032-0.062-0.063-0.071-0.072c-0.031-0.047-0.099-0.14-0.203-0.274 C9.687,57.643,4,48.447,4,32c0-19.467,8.524-29.346,8.586-29.414c0.179-0.18,0.397-0.324,0.655-0.431C13.488,2.053,13.744,2,14,2 h6V20z M24,20h-2V2h2V20z M32,18c0,1.103-0.897,2-2,2h-4V2h4c1.103,0,2,0.897,2,2V18z">
                                            </path>
                                        </g>
                                        <g>
                                            <path fill="#cdeef4"
                                                d="M30,2h-4v18h4c1.103,0,2-0.897,2-2V4C32,2.897,31.103,2,30,2z"></path>
                                            <rect x="22" y="2" fill="#cdeef4" width="2" height="18"></rect>
                                            <path fill="#cdeef4"
                                                d="M30,44h-4v18h4c1.103,0,2-0.897,2-2V46C32,44.897,31.103,44,30,44z">
                                            </path>
                                            <rect x="22" y="44" fill="#cdeef4" width="2" height="18"></rect>
                                            <path fill="#cdeef4"
                                                d="M13.241,2.155c-0.258,0.106-0.477,0.251-0.655,0.431C12.524,2.654,4,12.533,4,32 c0,16.447,5.687,25.643,8.131,28.832c0.104,0.135,0.172,0.228,0.203,0.274c0.01,0.009,0.041,0.04,0.071,0.072 c0.047,0.049,0.093,0.099,0.138,0.148c0.043,0.046,0.083,0.094,0.123,0.141c0.155,0.141,0.313,0.243,0.493,0.323 c0.006,0.003,0.012,0.006,0.018,0.008l0.09,0.031c0.318,0.117,0.551,0.17,0.726,0.17H20V44c-1.104,0-2-0.896-2-2V22 c0-1.104,0.896-2,2-2V2h-6C13.744,2,13.488,2.053,13.241,2.155z">
                                            </path>
                                        </g>
                                        <g>
                                            <rect x="22" y="2" fill="#ababab" width="2" height="18"></rect>
                                            <rect x="22" y="44" fill="#ababab" width="2" height="18"></rect>
                                        </g>
                                        <g opacity="0.2">
                                            <path d="M30,2h-4v18h4c1.103,0,2-0.897,2-2V4C32,2.897,31.103,2,30,2z">
                                            </path>
                                            <path d="M30,44h-4v18h4c1.103,0,2-0.897,2-2V46C32,44.897,31.103,44,30,44z">
                                            </path>
                                        </g>
                                        <g>
                                            <path fill="#B4CCB9"
                                                d="M45.352,21.651l11.277-4.104c0.519-0.189,0.786-0.762,0.597-1.281c-0.188-0.52-0.763-0.787-1.281-0.599 l-11.276,4.104c-0.52,0.189-0.787,0.762-0.598,1.281C44.259,21.573,44.832,21.841,45.352,21.651z">
                                            </path>
                                            <path fill="#B4CCB9"
                                                d="M59,31H47c-0.553,0-1,0.447-1,1s0.447,1,1,1h12c0.553,0,1-0.447,1-1S59.553,31,59,31z">
                                            </path>
                                            <path fill="#B4CCB9"
                                                d="M56.629,46.449l-11.276-4.104c-0.52-0.189-1.093,0.079-1.282,0.599c-0.188,0.52,0.078,1.092,0.598,1.281 l11.277,4.104c0.519,0.188,1.092-0.077,1.281-0.598C57.416,47.212,57.148,46.638,56.629,46.449z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p class="text-white mb-0 p-2">(+012) 3456 7890</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li class="">
                                <a class="page-scroll" href="#home">Home</a>
                            </li>
                            <li class="">
                                <a class="page-scroll" href="#service">Services</a>
                            </li>
                            <li class="">
                                <a class="page-scroll" href="#about">About </a>
                            </li>
                            <li class="">
                                <a class="page-scroll" href="#contact">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-col">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#">Graphic Designing</a></li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">App Develompent</a></li>
                            <li><a href="#">Video Animation</a></li>
                            <li><a href="#">Social Media </a></li>
                            <li><a href="#">Content Mangment</a></li>
                            <li><a href="#">SEO,SEM Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <h4 class="footer-title text-white mb-4">Follow Us</h4>
                        <div class="social-icons mb-3 pb-3 d-flex">
                            <a href="https://facebook.com" class="me-3 text-white" target="_blank">
                                <svg width="34px" height="34px" viewBox="0 0 48 48" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>Facebook-color</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs> </defs>
                                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Color-" transform="translate(-200.000000, -160.000000)"
                                                fill="#4460A0">
                                                <path
                                                    d="M225.638355,208 L202.649232,208 C201.185673,208 200,206.813592 200,205.350603 L200,162.649211 C200,161.18585 201.185859,160 202.649232,160 L245.350955,160 C246.813955,160 248,161.18585 248,162.649211 L248,205.350603 C248,206.813778 246.813769,208 245.350955,208 L233.119305,208 L233.119305,189.411755 L239.358521,189.411755 L240.292755,182.167586 L233.119305,182.167586 L233.119305,177.542641 C233.119305,175.445287 233.701712,174.01601 236.70929,174.01601 L240.545311,174.014333 L240.545311,167.535091 C239.881886,167.446808 237.604784,167.24957 234.955552,167.24957 C229.424834,167.24957 225.638355,170.625526 225.638355,176.825209 L225.638355,182.167586 L219.383122,182.167586 L219.383122,189.411755 L225.638355,189.411755 L225.638355,208 L225.638355,208 Z"
                                                    id="Facebook"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="https://instagram.com" class="me-3 text-white" target="_blank">
                                <svg width="34px" height="34px" viewBox="0 -4 48 48" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>Twitter-color</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs> </defs>
                                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Color-" transform="translate(-300.000000, -164.000000)"
                                                fill="#00AAEC">
                                                <path
                                                    d="M348,168.735283 C346.236309,169.538462 344.337383,170.081618 342.345483,170.324305 C344.379644,169.076201 345.940482,167.097147 346.675823,164.739617 C344.771263,165.895269 342.666667,166.736006 340.418384,167.18671 C338.626519,165.224991 336.065504,164 333.231203,164 C327.796443,164 323.387216,168.521488 323.387216,174.097508 C323.387216,174.88913 323.471738,175.657638 323.640782,176.397255 C315.456242,175.975442 308.201444,171.959552 303.341433,165.843265 C302.493397,167.339834 302.008804,169.076201 302.008804,170.925244 C302.008804,174.426869 303.747139,177.518238 306.389857,179.329722 C304.778306,179.280607 303.256911,178.821235 301.9271,178.070061 L301.9271,178.194294 C301.9271,183.08848 305.322064,187.17082 309.8299,188.095341 C309.004402,188.33225 308.133826,188.450704 307.235077,188.450704 C306.601162,188.450704 305.981335,188.390033 305.381229,188.271578 C306.634971,192.28169 310.269414,195.2026 314.580032,195.280607 C311.210424,197.99061 306.961789,199.605634 302.349709,199.605634 C301.555203,199.605634 300.769149,199.559408 300,199.466956 C304.358514,202.327194 309.53689,204 315.095615,204 C333.211481,204 343.114633,188.615385 343.114633,175.270495 C343.114633,174.831347 343.106181,174.392199 343.089276,173.961719 C345.013559,172.537378 346.684275,170.760563 348,168.735283"
                                                    id="Twitter"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="https://twitter.com" class="me-3 text-white" target="_blank">
                                <svg width="34px" height="34px" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <rect x="2" y="2" width="28" height="28" rx="6"
                                            fill="url(#paint0_radial_87_7153)"></rect>
                                        <rect x="2" y="2" width="28" height="28" rx="6"
                                            fill="url(#paint1_radial_87_7153)"></rect>
                                        <rect x="2" y="2" width="28" height="28" rx="6"
                                            fill="url(#paint2_radial_87_7153)"></rect>
                                        <path
                                            d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z"
                                            fill="white"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z"
                                            fill="white"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z"
                                            fill="white"></path>
                                        <defs>
                                            <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)">
                                                <stop stop-color="#B13589"></stop>
                                                <stop offset="0.79309" stop-color="#C62F94"></stop>
                                                <stop offset="1" stop-color="#8A3AC8"></stop>
                                            </radialGradient>
                                            <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)">
                                                <stop stop-color="#E0E8B7"></stop>
                                                <stop offset="0.444662" stop-color="#FB8A2E"></stop>
                                                <stop offset="0.71474" stop-color="#E2425C"></stop>
                                                <stop offset="1" stop-color="#E2425C" stop-opacity="0"></stop>
                                            </radialGradient>
                                            <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)">
                                                <stop offset="0.156701" stop-color="#406ADC"></stop>
                                                <stop offset="0.467799" stop-color="#6A45BE"></stop>
                                                <stop offset="1" stop-color="#6A45BE" stop-opacity="0"></stop>
                                            </radialGradient>
                                        </defs>
                                    </g>
                                </svg>
                            </a>
                            <a href="https://linkedin.com" class="me-3 text-white" target="_blank">
                                <svg width="34px" height="34px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                    fill="none">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="#0A66C2"
                                            d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z">
                                        </path>
                                    </g>
                                </svg>
                            </a>

                        </div>
                        <div class="reserved">
                            <div class="col-md-12">
                                <p>Powerd By<a href="#"> <Span style="color: #000;">Dodgix Technology</Span></a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->


  <livewire:visitor.index />
    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        const mobileNav = document.querySelector(".hamburger");
        const navbar = document.querySelector(".menubar");

        const toggleNav = () => {
            navbar.classList.toggle("active");
            mobileNav.classList.toggle("hamburger-active");
        };
        mobileNav.addEventListener("click", () => toggleNav());
        document.querySelectorAll('.page-scroll').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6688161eeaf3bd8d4d187e94/1i21pcqc7';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
        
        @livewireScripts
    </body>
</html>
