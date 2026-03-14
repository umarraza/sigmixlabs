<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/theme/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/theme/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/theme/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/theme/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/theme/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/slick-theme.css') }}">
    <link href="{{ asset('assets/theme/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <title>@yield('title', 'Sigmix Labs')</title>
    <link rel="icon" href="{{ asset('assets/theme/img/sm-logo.svg') }}" type="image/gif" sizes="20x20">
    @stack('styles')
</head>

<body>
    <div class="tt-style-switch index-dark">
        <i class="bi bi-brightness-low-fill"></i>
    </div>
    <div class="circle-container">
        <svg class="circle-progress svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Start Sidebar section -->
    <div class="sidebar-menu">
        <div class="sidebar-menu-top-area">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="sidebar-menu-logo">
                    <a href="{{ route('home') }}" class="logo-dark"><img alt="image" class="img-fluid"
                            src="{{ asset('assets/theme/img/logo.svg') }}"></a>
                    <a href="{{ route('home') }}" class="logo-light"><img alt="image" class="img-fluid"
                            src="{{ asset('assets/theme/img/logo-light.svg') }}"></a>
                </div>
                <div class="sidebar-menu-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 18">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18 0L11.1686 8.99601L18 18L9.0041 11.1605L0 18L6.83156 8.99601L0 0L9.0041 6.83156L18 0Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <div class="sidebar-menu-wrap">
                        <ul class="main-menu">
                            <li>
                                <a href="{{ route('home') }}">Agency</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('case-study') }}">Case Study</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">Pages</a>
                                <span class="dropdown-icon2"><i class="bi bi-plus"></i></span>
                                <ul class="submenu-list">
                                    <li>
                                        <a href="{{ route('about') }}">About
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 10 10">
                                                <path
                                                    d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 d-lg-flex align-items-center">
                    <div class="sidebar-contact">
                        <div class="getin-touch-area mb-60">
                            <h4>Get in Touch
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <path
                                        d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z" />
                                </svg>
                            </h4>
                            <ul>
                                <li class="single-contact">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 18 18">
                                            <path
                                                d="M14.2333 11.1504C13.8642 10.7667 13.4191 10.5615 12.9473 10.5615C12.4794 10.5615 12.0304 10.7629 11.6462 11.1466L10.4439 12.3433C10.345 12.2901 10.2461 12.2407 10.151 12.1913C10.014 12.1229 9.88467 12.0583 9.77433 11.9899C8.64819 11.2757 7.62476 10.345 6.64319 9.14067C6.16762 8.54043 5.84804 8.03516 5.61596 7.52229C5.92793 7.23736 6.21708 6.94104 6.49861 6.65611C6.60514 6.54974 6.71167 6.43957 6.8182 6.33319C7.61715 5.5354 7.61715 4.50207 6.8182 3.70427L5.77955 2.66714C5.66161 2.54937 5.53987 2.4278 5.42573 2.30623C5.19746 2.07069 4.95777 1.82755 4.71047 1.59961C4.34143 1.2349 3.9001 1.04115 3.43595 1.04115C2.97179 1.04115 2.52286 1.2349 2.1424 1.59961L2.13479 1.60721L0.841243 2.91027C0.35426 3.39655 0.076528 3.9892 0.0156552 4.67682C-0.0756541 5.78614 0.251537 6.81947 0.502638 7.4957C1.11898 9.15587 2.03968 10.6945 3.41312 12.3433C5.07952 14.3301 7.08452 15.8991 9.37486 17.0047C10.2499 17.4187 11.4179 17.9088 12.7229 17.9924C12.8028 17.9962 12.8865 18 12.9626 18C13.8414 18 14.5795 17.6847 15.1578 17.0578C15.1616 17.0502 15.1692 17.0464 15.173 17.0388C15.3708 16.7995 15.5991 16.583 15.8388 16.3512C16.0024 16.1955 16.1698 16.0321 16.3334 15.8611C16.71 15.4698 16.9079 15.014 16.9079 14.5467C16.9079 14.0756 16.7062 13.6235 16.322 13.2436L14.2333 11.1504Z" />
                                        </svg>
                                    </div>
                                    <div class="contact">
                                        <span>Phone</span>
                                        <h6><a href="tel:+923034969407">+92 303 4969407</a></h6>
                                    </div>
                                </li>
                                <li class="single-contact">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 18 18">
                                            <path
                                                d="M0 4.5C0 3.90326 0.237053 3.33097 0.65901 2.90901C1.08097 2.48705 1.65326 2.25 2.25 2.25H15.75C16.3467 2.25 16.919 2.48705 17.341 2.90901C17.7629 3.33097 18 3.90326 18 4.5V13.5C18 14.0967 17.7629 14.669 17.341 15.091C16.919 15.5129 16.3467 15.75 15.75 15.75H2.25C1.65326 15.75 1.08097 15.5129 0.65901 15.091C0.237053 14.669 0 14.0967 0 13.5V4.5ZM2.25 3.375C1.95163 3.375 1.66548 3.49353 1.4545 3.7045C1.24353 3.91548 1.125 4.20163 1.125 4.5V4.74413L9 9.46912L16.875 4.74413V4.5C16.875 4.20163 16.7565 3.91548 16.5455 3.7045C16.3345 3.49353 16.0484 3.375 15.75 3.375H2.25ZM16.875 6.05587L11.5785 9.234L16.875 12.4931V6.05587ZM16.8367 13.7914L10.4918 9.8865L9 10.7809L7.50825 9.8865L1.16325 13.7903C1.22718 14.0296 1.36836 14.2412 1.56486 14.3922C1.76137 14.5431 2.00221 14.625 2.25 14.625H15.75C15.9976 14.625 16.2384 14.5434 16.4349 14.3926C16.6313 14.2419 16.7726 14.0306 16.8367 13.7914ZM1.125 12.4931L6.4215 9.234L1.125 6.05587V12.4931Z" />
                                        </svg>
                                    </div>
                                    <div class="contact">
                                        <span>Email Now</span>
                                        <h6><a href="mailto:info@sigmixlabs.com">info@sigmixlabs.com</a></h6>
                                    </div>
                                </li>
                                <li class="single-contact">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18"
                                            viewBox="0 0 14 18">
                                            <path
                                                d="M11.8603 10.0575C11.249 11.2522 10.4207 12.4425 9.57367 13.5113C8.77018 14.5188 7.91105 15.484 7 16.4025C6.08893 15.484 5.2298 14.5188 4.42633 13.5113C3.57933 12.4425 2.751 11.2522 2.13967 10.0575C1.52133 8.85037 1.16667 7.71975 1.16667 6.75C1.16667 5.25816 1.78125 3.82742 2.87521 2.77252C3.96917 1.71763 5.4529 1.125 7 1.125C8.5471 1.125 10.0308 1.71763 11.1248 2.77252C12.2188 3.82742 12.8333 5.25816 12.8333 6.75C12.8333 7.71975 12.4775 8.85037 11.8603 10.0575ZM7 18C7 18 14 11.6033 14 6.75C14 4.95979 13.2625 3.2429 11.9497 1.97703C10.637 0.711159 8.85652 0 7 0C5.14348 0 3.36301 0.711159 2.05025 1.97703C0.737498 3.2429 2.76642e-08 4.95979 0 6.75C0 11.6033 7 18 7 18Z" />
                                            <path
                                                d="M7 9C6.38116 9 5.78767 8.76295 5.35008 8.34099C4.9125 7.91903 4.66667 7.34674 4.66667 6.75C4.66667 6.15326 4.9125 5.58097 5.35008 5.15901C5.78767 4.73705 6.38116 4.5 7 4.5C7.61884 4.5 8.21233 4.73705 8.64992 5.15901C9.0875 5.58097 9.33333 6.15326 9.33333 6.75C9.33333 7.34674 9.0875 7.91903 8.64992 8.34099C8.21233 8.76295 7.61884 9 7 9ZM7 10.125C7.92826 10.125 8.8185 9.76942 9.47487 9.13649C10.1313 8.50355 10.5 7.64511 10.5 6.75C10.5 5.85489 10.1313 4.99645 9.47487 4.36351C8.8185 3.73058 7.92826 3.375 7 3.375C6.07174 3.375 5.1815 3.73058 4.52513 4.36351C3.86875 4.99645 3.5 5.85489 3.5 6.75C3.5 7.64511 3.86875 8.50355 4.52513 9.13649C5.1815 9.76942 6.07174 10.125 7 10.125V10.125Z" />
                                        </svg>
                                    </div>
                                    <div class="contact">
                                        <h6>471/1, Block D, Phase 5, DHA Lahore</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="social-link-area">
                            <h6>Social Link
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <path
                                        d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z" />
                                </svg>
                            </h6>
                            <ul class="social-area">
                                <li><a href="https://www.linkedin.com/company/sigmixlabs"><i class="bi bi-linkedin"></i>
                                        LinkedIn</a></li>
                                <li><a href="https://github.com/sigmixlabs"><i class="bi bi-github"></i> GitHub</a></li>
                                <li><a href="https://twitter.com/sigmixlabs"><i class="bi bi-twitter-x"></i> Twitter</a>
                                </li>
                                <li><a href="https://www.instagram.com/sigmixlabs"><i class="bi bi-instagram"></i>
                                        Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar section -->

    <!-- Start header section -->
    <header class="header-area style-2">
        <div class="container d-flex flex-nowrap align-items-center justify-content-between">
            <div class="company-logo">
                <a href="{{ route('home') }}" class="logo-dark"><img alt="image" class="img-fluid"
                        src="{{ asset('assets/theme/img/logo-light.svg') }}"></a>
                <a href="{{ route('home') }}" class="logo-light"><img alt="image" class="img-fluid"
                        src="{{ asset('assets/theme/img/logo-light.svg') }}"></a>
            </div>
            <div class="main-menu d-lg-flex d-none">
                <ul class="menu-list">
                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}" class="drop-down">Home</a><i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ route('home') }}">Agency</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children @yield('nav-services')">
                        <a href="{{ route('services') }}" class="drop-down">Services</a><i
                            class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ route('services') }}">Services &amp; Solutions</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children @yield('nav-case-study')">
                        <a href="{{ route('case-study') }}" class="drop-down">Case Study</a><i
                            class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ route('case-study') }}">Case Study</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children @yield('nav-blog')">
                        <a href="{{ route('blog') }}" class="drop-down">Blog</a><i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children @yield('nav-pages')">
                        <a href="#" class="drop-down">Pages</a><i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about') }}">About</a></li>
                        </ul>
                    </li>
                    <li class="@yield('nav-contact')">
                        <a href="{{ route('contact') }}" class="drop-down">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="nav-right d-flex jsutify-content-end align-items-center">
                <div class="sidebar-and-btn">
                    <div class="sidebar-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <g>
                                <path
                                    d="M6.79688 9.375H2.57812C1.15652 9.375 0 8.21848 0 6.79688V2.57812C0 1.15652 1.15652 0 2.57812 0H6.79688C8.21848 0 9.375 1.15652 9.375 2.57812V6.79688C9.375 8.21848 8.21848 9.375 6.79688 9.375ZM2.57812 1.25C1.84578 1.25 1.25 1.84578 1.25 2.57812V6.79688C1.25 7.52922 1.84578 8.125 2.57812 8.125H6.79688C7.52922 8.125 8.125 7.52922 8.125 6.79688V2.57812C8.125 1.84578 7.52922 1.25 6.79688 1.25H2.57812ZM17.4219 9.375H13.2031C11.7815 9.375 10.625 8.21848 10.625 6.79688V2.57812C10.625 1.15652 11.7815 0 13.2031 0H17.4219C18.8435 0 20 1.15652 20 2.57812V6.79688C20 8.21848 18.8435 9.375 17.4219 9.375ZM13.2031 1.25C12.4708 1.25 11.875 1.84578 11.875 2.57812V6.79688C11.875 7.52922 12.4708 8.125 13.2031 8.125H17.4219C18.1542 8.125 18.75 7.52922 18.75 6.79688V2.57812C18.75 1.84578 18.1542 1.25 17.4219 1.25H13.2031ZM15.3125 20C12.7278 20 10.625 17.8972 10.625 15.3125C10.625 12.7278 12.7278 10.625 15.3125 10.625C17.8972 10.625 20 12.7278 20 15.3125C20 17.8972 17.8972 20 15.3125 20ZM15.3125 11.875C13.4171 11.875 11.875 13.4171 11.875 15.3125C11.875 17.2079 13.4171 18.75 15.3125 18.75C17.2079 18.75 18.75 17.2079 18.75 15.3125C18.75 13.4171 17.2079 11.875 15.3125 11.875ZM6.79688 20H2.57812C1.15652 20 0 18.8435 0 17.4219V13.2031C0 11.7815 1.15652 10.625 2.57812 10.625H6.79688C8.21848 10.625 9.375 11.7815 9.375 13.2031V17.4219C9.375 18.8435 8.21848 20 6.79688 20ZM2.57812 11.875C1.84578 11.875 1.25 12.4708 1.25 13.2031V17.4219C1.25 18.1542 1.84578 18.75 2.57812 18.75H6.79688C7.52922 18.75 8.125 18.1542 8.125 17.4219V13.2031C8.125 12.4708 7.52922 11.875 6.79688 11.875H2.57812Z" />
                            </g>
                        </svg>
                    </div>
                    <a href="{{ route('contact') }}" class="primary-btn4 d-xl-flex d-none">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- End header section -->

    @yield('content')

    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        @include('partials.footer-solutions')
                    </div>
                    <div
                        class="col-lg-4 col-md-6 d-flex justify-content-lg-center justify-content-md-end justify-content-sm-start">
                        <div class="footer-logo-area">
                            <div class="logo-bg">
                                <img src="{{ asset('assets/theme/img/home1/footer-logo-bg.png') }}" alt=""
                                    class="light">
                                <img src="{{ asset('assets/theme/img/home1/footer-logo-bg-dark.png') }}" alt=""
                                    class="dark">
                            </div>
                            <div class="logo">
                                <img src="{{ asset('assets/theme/img/footer-logo.svg') }}" alt="" class="light">
                                <img src="{{ asset('assets/theme/img/footer-logo-dark.svg') }}" alt="" class="dark">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 d-flex justify-content-lg-end justify-content-sm-end">
                        @include('partials.footer-sets-apart')
                    </div>
                </div>
            </div>
            <div class="contact-area">
                <div class="hotline-area">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                            <g>
                                <path
                                    d="M26.0803 20.4417C25.4047 19.7383 24.5898 19.3622 23.7262 19.3622C22.8695 19.3622 22.0477 19.7313 21.3442 20.4348L19.1433 22.6287C18.9622 22.5312 18.7811 22.4407 18.607 22.3501C18.3563 22.2248 18.1195 22.1063 17.9175 21.981C15.8559 20.6716 13.9823 18.9652 12.1854 16.7573C11.3148 15.6569 10.7297 14.7305 10.3049 13.7903C10.876 13.2679 11.4053 12.7247 11.9207 12.2023C12.1157 12.0073 12.3108 11.8053 12.5058 11.6103C13.9684 10.1477 13.9684 8.25321 12.5058 6.79058L10.6044 4.88917C10.3885 4.67326 10.1656 4.45038 9.95664 4.22751C9.53874 3.79569 9.09996 3.34993 8.64724 2.93204C7.97165 2.26341 7.16372 1.9082 6.31401 1.9082C5.46429 1.9082 4.64244 2.26341 3.94595 2.93204C3.93899 2.939 3.93899 2.939 3.93202 2.94597L1.56396 5.33492C0.672459 6.22643 0.164023 7.31295 0.0525852 8.57359C-0.114572 10.6073 0.484407 12.5018 0.944089 13.7415C2.0724 16.7852 3.7579 19.606 6.27222 22.6287C9.32283 26.2713 12.9933 29.1478 17.1862 31.1746C18.7881 31.9338 20.9263 32.8323 23.3153 32.9855C23.4615 32.9924 23.6148 32.9994 23.7541 32.9994C25.3629 32.9994 26.7141 32.4213 27.7728 31.2721C27.7798 31.2582 27.7937 31.2512 27.8006 31.2373C28.1628 30.7985 28.5807 30.4015 29.0195 29.9767C29.319 29.6911 29.6254 29.3916 29.9249 29.0782C30.6145 28.3608 30.9766 27.525 30.9766 26.6683C30.9766 25.8047 30.6075 24.9759 29.904 24.2794L26.0803 20.4417Z" />
                                <path
                                    d="M17.834 7.8506C19.6588 8.15705 21.3164 9.0207 22.6398 10.344C23.9631 11.6673 24.8198 13.325 25.1332 15.1498C25.2098 15.6095 25.6068 15.9299 26.0595 15.9299C26.1152 15.9299 26.164 15.9229 26.2197 15.9159C26.7351 15.8323 27.0764 15.3448 26.9928 14.8294C26.6167 12.6215 25.572 10.6087 23.977 9.01373C22.3821 7.41877 20.3692 6.37404 18.1614 5.99794C17.646 5.91436 17.1654 6.25564 17.0748 6.76408C16.9843 7.27251 17.3186 7.76702 17.834 7.8506Z" />
                                <path
                                    d="M32.9617 14.557C32.3418 10.9213 30.6285 7.61301 27.9957 4.98029C25.363 2.34757 22.0547 0.634209 18.419 0.0143347C17.9106 -0.0762086 17.43 0.272035 17.3395 0.780471C17.2559 1.29587 17.5972 1.77645 18.1126 1.86699C21.3582 2.41722 24.3183 3.95645 26.6724 6.30362C29.0265 8.65774 30.5588 11.6178 31.109 14.8634C31.1857 15.3231 31.5827 15.6435 32.0354 15.6435C32.0911 15.6435 32.1398 15.6365 32.1956 15.6296C32.704 15.553 33.0522 15.0654 32.9617 14.557Z" />
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <span>Call Any Time</span>
                        <h6><a href="tel:+923034969407">+92 303 4969407</a></h6>
                    </div>
                </div>
                <div class="hotline-area">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                            <g>
                                <path
                                    d="M16.4999 0C9.77802 0 4.30957 5.46845 4.30957 12.1904C4.30957 14.4033 5.30201 16.7832 5.3436 16.8836C5.66413 17.6445 6.2966 18.8262 6.75266 19.5189L15.1109 32.1832C15.453 32.7024 15.9592 33 16.4999 33C17.0406 33 17.5469 32.7024 17.8889 32.184L26.2479 19.5189C26.7047 18.8262 27.3364 17.6445 27.657 16.8836C27.6986 16.784 28.6903 14.404 28.6903 12.1904C28.6903 5.46845 23.2218 0 16.4999 0ZM16.5001 17.2106C13.7329 17.2106 11.4805 14.9589 11.4805 12.191C11.4805 9.42309 13.7329 7.17146 16.5001 7.17146C19.2673 7.17146 21.5197 9.42309 21.5197 12.191C21.5197 14.9589 19.2673 17.2106 16.5001 17.2106Z" />
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <span>Address</span>
                        <h6><a href="https://maps.google.com/?q=DHA+Lahore+Pakistan">471/1, DHA Phase 5, Lahore,
                                Pakistan</a></h6>
                    </div>
                </div>
                <div class="hotline-area">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M32.9891 1.18398C33.0171 0.995671 32.9925 0.803292 32.918 0.628097C32.8435 0.452902 32.722 0.301711 32.567 0.191227C32.4121 0.0808885 32.2296 0.0155543 32.0399 0.00245033C31.8501 -0.0106536 31.6604 0.0289832 31.4918 0.116977L0.554265 16.2732C0.376261 16.3673 0.229594 16.5113 0.132265 16.6876C0.0349358 16.8638 -0.00882138 17.0646 0.00636356 17.2654C0.0215485 17.4662 0.0950149 17.6581 0.217747 17.8177C0.340478 17.9773 0.507135 18.0976 0.697265 18.1639L9.29789 21.1036L27.6143 5.44235L13.4408 22.5185L27.8549 27.4451C27.9979 27.4932 28.1497 27.5094 28.2997 27.4926C28.4496 27.4758 28.5941 27.4265 28.723 27.348C28.8519 27.2696 28.962 27.1639 29.0458 27.0384C29.1296 26.9129 29.1849 26.7706 29.2079 26.6215L32.9891 1.18398ZM12.0314 24.2166V30.5939C12.0324 30.8106 12.1017 31.0215 12.2292 31.1967C12.3568 31.3719 12.5363 31.5025 12.7422 31.5701C12.9482 31.6376 13.1702 31.6386 13.3767 31.573C13.5833 31.5073 13.764 31.3784 13.8931 31.2044L17.6235 26.1279L12.0314 24.2166Z" />
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <span>Say Hello</span>
                        <h6><a href="mailto:info@sigmixlabs.com">info@sigmixlabs.com</a></h6>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright-area">
                    <p>Copyright {{ date('Y') }} Sigmix Labs. All rights reserved.</p>
                </div>
                <div class="footer-bottom-right">
                    <ul>
                        <li><a href="#">Support Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <script src="{{ asset('assets/theme/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/type.js') }}"></script>
    <script src="{{ asset('assets/theme/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/slick.js') }}"></script>
    <script src="{{ asset('assets/theme/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/custom.js') }}"></script>
    <script>
        $(".marquee_text").marquee({
            direction: "left",
            duration: 45000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
        $(".marquee_text2").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>

    @stack('scripts')

</body>

</html>
