@extends('layouts.app')

@section('title', 'Case Studies - Sigmix Labs')
@section('nav-case-study', 'active')

@push('styles')
<style>
    /* Filter Nav Pills */
    #caseStudyFilter .nav-link {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: var(--text-color);
        border-radius: 50px;
        padding: 8px 22px;
        font-family: var(--font-inter);
        font-size: 12px;
        font-weight: 500;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    #caseStudyFilter .nav-link:hover,
    #caseStudyFilter .nav-link.active {
        background: var(--primary-color1);
        border-color: var(--primary-color1);
        color: #fff;
    }

    .case-item {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .case-item.hidden {
        display: none !important;
    }

    /* Stats section */
    .stats-section {
        padding: 80px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    .stats-section .single-countdown {
        text-align: center;
        padding: 30px 20px;
    }

    .stats-section .single-countdown .number {
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        margin-bottom: 10px;
    }

    .stats-section .single-countdown .number h5 {
        color: var(--title-color);
        font-family: var(--font-hankenGrotesk);
        font-size: 48px;
        font-weight: 800;
        margin-bottom: 0;
        line-height: 1;
    }

    .stats-section .single-countdown .number span {
        color: var(--primary-color1);
        font-family: var(--font-hankenGrotesk);
        font-size: 32px;
        font-weight: 700;
        margin-left: 4px;
    }

    .stats-section .single-countdown p {
        color: var(--text-color);
        font-family: var(--font-inter);
        font-size: 15px;
        font-weight: 500;
        margin-bottom: 0;
    }

    .stats-divider {
        width: 1px;
        background: rgba(255, 255, 255, 0.08);
        align-self: stretch;
    }
</style>
@endpush

@section('content')

<!-- Start Breadcrumb section -->
<div class="breadcrumb-section"
    style="background-image: url({{ asset('assets/theme/img/innerpage/breadcrumb-bg1.png') }}), linear-gradient(180deg, #121212 0%, #121212 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-wrapper">
                    <div class="banner-content">
                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Case Studies</li>
                        </ul>
                        <h1>Case Studies.</h1>
                    </div>
                    <div class="scroll-down-btn">
                        <a href="#case-study-card-section">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="29" viewBox="0 0 19 29">
                                <path
                                    d="M9.5 0V28M9.5 28C10 24.3333 12.4 17.1 18 17.5M9.5 28C8.5 24.1667 5.4 16.7 1 17.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb section -->

<!-- Start Case Study Section -->
<div class="case-study-card-section scroll-margin pt-120 mb-120" id="case-study-card-section">
    <div class="container">

        <!-- Section Header -->
        <div class="row mb-60 align-items-end">
            <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="section-title">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path
                                d="M6.6304 0.338424C6.67018 -0.112811 7.32982 -0.112807 7.3696 0.338428L7.72654 4.38625C7.75291 4.68505 8.10454 4.83069 8.33443 4.63804L11.4491 2.02821C11.7963 1.73728 12.2627 2.20368 11.9718 2.55089L9.36197 5.66556C9.1693 5.89546 9.31496 6.24709 9.61374 6.27346L13.6615 6.6304C14.1128 6.67018 14.1128 7.32982 13.6615 7.3696L9.61374 7.72654C9.31496 7.75291 9.1693 8.10454 9.36197 8.33443L11.9718 11.4491C12.2627 11.7963 11.7963 12.2627 11.4491 11.9718L8.33443 9.36197C8.10454 9.1693 7.75291 9.31496 7.72654 9.61374L7.3696 13.6615C7.32982 14.1128 6.67018 14.1128 6.6304 13.6615L6.27346 9.61374C6.24709 9.31496 5.89546 9.1693 5.66556 9.36197L2.55089 11.9718C2.20368 12.2627 1.73729 11.7963 2.02822 11.4491L4.63804 8.33443C4.83069 8.10454 4.68504 7.75291 4.38625 7.72654L0.338424 7.3696C-0.112811 7.32982 -0.112807 6.67018 0.338428 6.6304L4.38625 6.27346C4.68505 6.24709 4.83069 5.89546 4.63804 5.66556L2.02821 2.55089C1.73728 2.20368 2.20368 1.73729 2.55089 2.02822L5.66556 4.63804C5.89546 4.83069 6.24709 4.68504 6.27346 4.38625L6.6304 0.338424Z" />
                        </svg>
                        Our Work
                    </span>
                    <h2>Real Results for <br>Real Businesses</h2>
                </div>
            </div>
            <div class="col-lg-5 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <p>Explore how we've helped businesses across industries harness the power of technology to achieve
                    their goals and outpace the competition.</p>
            </div>
        </div>

        <!-- Filter Tabs -->
        <div class="row mb-50 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-12">
                <ul class="nav nav-pills gap-2 flex-wrap" id="caseStudyFilter">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-filter="all">All Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-filter="web">Web Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-filter="mobile">Mobile Apps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-filter="ai">AI Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-filter="cloud">Cloud</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Cards Grid -->
        <div class="row g-4" id="caseStudyGrid">

            <!-- Case Study 1 – Web -->
            <div class="col-xl-4 col-md-6 case-item web wow animate fadeInDown" data-wow-delay="200ms"
                data-wow-duration="1500ms">
                <div class="case-study-card style-2">
                    <div class="card-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study-img1.jpg') }}"
                            alt="Enterprise E-Commerce Platform" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <a href="{{ route('contact') }}">Web Development</a>
                        <h4><a href="{{ route('contact') }}">Enterprise E-Commerce Platform</a></h4>
                        <p>Built a scalable e-commerce solution handling 50,000+ daily transactions with 99.98% uptime —
                            driving a <strong>+240% revenue growth</strong> for a leading retail chain in Pakistan.</p>
                        <a href="{{ route('contact') }}" class="learn-more-btn">Learn MORE
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" viewBox="0 0 17 9">
                                <path
                                    d="M12.1691 4.97333L0.234337 4.95394C0.172187 4.95394 0.112583 4.9041 0.0686358 4.81538C0.024689 4.72666 0 4.60634 0 4.48087C0 4.35541 0.024689 4.23509 0.0686358 4.14637C0.112583 4.05765 0.172187 4.00781 0.234337 4.00781L12.1694 4.02721C12.2315 4.02721 12.2911 4.07705 12.3351 4.16576C12.379 4.25448 12.4037 4.37481 12.4037 4.50027C12.4037 4.62573 12.379 4.74606 12.3351 4.83478C12.2911 4.92349 12.2313 4.97333 12.1691 4.97333Z" />
                                <path
                                    d="M16.9998 4.50591C14.3171 5.49934 10.9879 7.19858 8.9248 9L10.5521 4.50024L8.93094 0C10.9922 1.80378 14.3185 3.50681 16.9998 4.50591Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Case Study 2 – Mobile -->
            <div class="col-xl-4 col-md-6 case-item mobile wow animate fadeInDown" data-wow-delay="400ms"
                data-wow-duration="1500ms">
                <div class="case-study-card style-2">
                    <div class="card-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study-img2.jpg') }}"
                            alt="Healthcare Patient Management App" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <a href="{{ route('contact') }}">Mobile Apps</a>
                        <h4><a href="{{ route('contact') }}">Healthcare Patient Management App</a></h4>
                        <p>Developed a HIPAA-compliant mobile application connecting 200+ doctors with patients —
                            reducing appointment wait times by <strong>65%</strong> for MedConnect Inc.</p>
                        <a href="{{ route('contact') }}" class="learn-more-btn">Learn MORE
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" viewBox="0 0 17 9">
                                <path
                                    d="M12.1691 4.97333L0.234337 4.95394C0.172187 4.95394 0.112583 4.9041 0.0686358 4.81538C0.024689 4.72666 0 4.60634 0 4.48087C0 4.35541 0.024689 4.23509 0.0686358 4.14637C0.112583 4.05765 0.172187 4.00781 0.234337 4.00781L12.1694 4.02721C12.2315 4.02721 12.2911 4.07705 12.3351 4.16576C12.379 4.25448 12.4037 4.37481 12.4037 4.50027C12.4037 4.62573 12.379 4.74606 12.3351 4.83478C12.2911 4.92349 12.2313 4.97333 12.1691 4.97333Z" />
                                <path
                                    d="M16.9998 4.50591C14.3171 5.49934 10.9879 7.19858 8.9248 9L10.5521 4.50024L8.93094 0C10.9922 1.80378 14.3185 3.50681 16.9998 4.50591Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Case Study 3 – AI -->
            <div class="col-xl-4 col-md-6 case-item ai wow animate fadeInDown" data-wow-delay="600ms"
                data-wow-duration="1500ms">
                <div class="case-study-card style-2">
                    <div class="card-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study-img3.jpg') }}"
                            alt="Predictive Sales Analytics" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <a href="{{ route('contact') }}">AI Solutions</a>
                        <h4><a href="{{ route('contact') }}">Predictive Sales Analytics</a></h4>
                        <p>AI-powered sales forecasting tool that improved prediction accuracy by <strong>88%</strong>
                            for a leading fintech company, enabling smarter, data-driven growth decisions.</p>
                        <a href="{{ route('contact') }}" class="learn-more-btn">Learn MORE
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" viewBox="0 0 17 9">
                                <path
                                    d="M12.1691 4.97333L0.234337 4.95394C0.172187 4.95394 0.112583 4.9041 0.0686358 4.81538C0.024689 4.72666 0 4.60634 0 4.48087C0 4.35541 0.024689 4.23509 0.0686358 4.14637C0.112583 4.05765 0.172187 4.00781 0.234337 4.00781L12.1694 4.02721C12.2315 4.02721 12.2911 4.07705 12.3351 4.16576C12.379 4.25448 12.4037 4.37481 12.4037 4.50027C12.4037 4.62573 12.379 4.74606 12.3351 4.83478C12.2911 4.92349 12.2313 4.97333 12.1691 4.97333Z" />
                                <path
                                    d="M16.9998 4.50591C14.3171 5.49934 10.9879 7.19858 8.9248 9L10.5521 4.50024L8.93094 0C10.9922 1.80378 14.3185 3.50681 16.9998 4.50591Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Case Study 4 – Cloud -->
            <div class="col-xl-4 col-md-6 case-item cloud wow animate fadeInDown" data-wow-delay="200ms"
                data-wow-duration="1500ms">
                <div class="case-study-card style-2">
                    <div class="card-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study-img4.jpg') }}"
                            alt="Legacy System Cloud Migration" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <a href="{{ route('contact') }}">Cloud</a>
                        <h4><a href="{{ route('contact') }}">Legacy System Cloud Migration</a></h4>
                        <p>Migrated a 15-year-old banking system to AWS — reducing infrastructure costs by
                            <strong>42%</strong> while significantly improving performance and scalability.</p>
                        <a href="{{ route('contact') }}" class="learn-more-btn">Learn MORE
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" viewBox="0 0 17 9">
                                <path
                                    d="M12.1691 4.97333L0.234337 4.95394C0.172187 4.95394 0.112583 4.9041 0.0686358 4.81538C0.024689 4.72666 0 4.60634 0 4.48087C0 4.35541 0.024689 4.23509 0.0686358 4.14637C0.112583 4.05765 0.172187 4.00781 0.234337 4.00781L12.1694 4.02721C12.2315 4.02721 12.2911 4.07705 12.3351 4.16576C12.379 4.25448 12.4037 4.37481 12.4037 4.50027C12.4037 4.62573 12.379 4.74606 12.3351 4.83478C12.2911 4.92349 12.2313 4.97333 12.1691 4.97333Z" />
                                <path
                                    d="M16.9998 4.50591C14.3171 5.49934 10.9879 7.19858 8.9248 9L10.5521 4.50024L8.93094 0C10.9922 1.80378 14.3185 3.50681 16.9998 4.50591Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Case Study 5 – Web -->
            <div class="col-xl-4 col-md-6 case-item web wow animate fadeInDown" data-wow-delay="400ms"
                data-wow-duration="1500ms">
                <div class="case-study-card style-2">
                    <div class="card-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study-img5.jpg') }}"
                            alt="Manufacturing ERP Solution" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <a href="{{ route('contact') }}">Web Development</a>
                        <h4><a href="{{ route('contact') }}">Manufacturing ERP Solution</a></h4>
                        <p>Custom ERP system for a manufacturing firm automating <strong>80% of manual
                                processes</strong>, cutting operational costs and delivering real-time production
                            visibility.</p>
                        <a href="{{ route('contact') }}" class="learn-more-btn">Learn MORE
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" viewBox="0 0 17 9">
                                <path
                                    d="M12.1691 4.97333L0.234337 4.95394C0.172187 4.95394 0.112583 4.9041 0.0686358 4.81538C0.024689 4.72666 0 4.60634 0 4.48087C0 4.35541 0.024689 4.23509 0.0686358 4.14637C0.112583 4.05765 0.172187 4.00781 0.234337 4.00781L12.1694 4.02721C12.2315 4.02721 12.2911 4.07705 12.3351 4.16576C12.379 4.25448 12.4037 4.37481 12.4037 4.50027C12.4037 4.62573 12.379 4.74606 12.3351 4.83478C12.2911 4.92349 12.2313 4.97333 12.1691 4.97333Z" />
                                <path
                                    d="M16.9998 4.50591C14.3171 5.49934 10.9879 7.19858 8.9248 9L10.5521 4.50024L8.93094 0C10.9922 1.80378 14.3185 3.50681 16.9998 4.50591Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Case Study Section -->

<!-- Start Stats Section -->
<div class="stats-section mb-110">
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-3 col-sm-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="single-countdown">
                    <div class="number">
                        <h5 class="counter">120</h5>
                        <span>+</span>
                    </div>
                    <p>Projects Delivered</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="single-countdown">
                    <div class="number">
                        <h5 class="counter">85</h5>
                        <span>+</span>
                    </div>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="single-countdown">
                    <div class="number">
                        <h5 class="counter">98</h5>
                        <span>%</span>
                    </div>
                    <p>Client Retention Rate</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow animate fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                <div class="single-countdown">
                    <div class="number">
                        <h5 class="counter">7</h5>
                        <span>+</span>
                    </div>
                    <p>Years of Experience</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Stats Section -->

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var filterLinks = document.querySelectorAll('#caseStudyFilter .nav-link');
        var items = document.querySelectorAll('#caseStudyGrid .case-item');

        filterLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                filterLinks.forEach(function (l) { l.classList.remove('active'); });
                this.classList.add('active');

                var filter = this.getAttribute('data-filter');
                items.forEach(function (item) {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    });
</script>
@endpush

@endsection
