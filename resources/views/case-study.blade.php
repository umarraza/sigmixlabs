@extends('layouts.app')

@section('title', 'Case Study - Sigmix Labs')
@section('nav-case-study', 'active')

@section('content')

<!-- Start Breadcrumb section -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Case Study</h2>
                    <ul class="breadcrumb-list wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>Case Study</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb section -->

<!-- Start Case Study section -->
<div class="case-study-section mb-110">
    <div class="container">
        <div class="row mb-60 align-items-end">
            <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="section-title">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path d="M6.6304 0.338424C6.67018 -0.112811 7.32982 -0.112807 7.3696 0.338428L7.72654 4.38625C7.75291 4.68505 8.10454 4.83069 8.33443 4.63804L11.4491 2.02821C11.7963 1.73728 12.2627 2.20368 11.9718 2.55089L9.36197 5.66556C9.1693 5.89546 9.31496 6.24709 9.61374 6.27346L13.6615 6.6304C14.1128 6.67018 14.1128 7.32982 13.6615 7.3696L9.61374 7.72654C9.31496 7.75291 9.1693 8.10454 9.36197 8.33443L11.9718 11.4491C12.2627 11.7963 11.7963 12.2627 11.4491 11.9718L8.33443 9.36197C8.10454 9.1693 7.75291 9.31496 7.72654 9.61374L7.3696 13.6615C7.32982 14.1128 6.67018 14.1128 6.6304 13.6615L6.27346 9.61374C6.24709 9.31496 5.89546 9.1693 5.66556 9.36197L2.55089 11.9718C2.20368 12.2627 1.73729 11.7963 2.02822 11.4491L4.63804 8.33443C4.83069 8.10454 4.68504 7.75291 4.38625 7.72654L0.338424 7.3696C-0.112811 7.32982 -0.112807 6.67018 0.338428 6.6304L4.38625 6.27346C4.68505 6.24709 4.83069 5.89546 4.63804 5.66556L2.02821 2.55089C1.73728 2.20368 2.20368 1.73729 2.55089 2.02822L5.66556 4.63804C5.89546 4.83069 6.24709 4.68504 6.27346 4.38625L6.6304 0.338424Z"/>
                        </svg>
                        Our Work
                    </span>
                    <h2>Real Results for <br>Real Businesses</h2>
                </div>
            </div>
            <div class="col-lg-5 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <p>Explore how we've helped businesses across industries harness the power of technology to achieve their goals and outpace the competition.</p>
            </div>
        </div>

        <!-- Filter Tabs -->
        <div class="portfolio-filter mb-40 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <ul class="filter-tab-list">
                <li class="active"><a href="#" data-filter="*">All Projects</a></li>
                <li><a href="#" data-filter=".web">Web Development</a></li>
                <li><a href="#" data-filter=".mobile">Mobile Apps</a></li>
                <li><a href="#" data-filter=".ai">AI Solutions</a></li>
                <li><a href="#" data-filter=".cloud">Cloud</a></li>
            </ul>
        </div>

        <div class="row g-4">
            <!-- Case Study 1 -->
            <div class="col-lg-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="case-study-card">
                    <div class="case-study-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study/case1.jpg') }}" alt="E-Commerce Platform" class="img-fluid">
                        <div class="case-study-overlay">
                            <a href="{{ route('contact') }}" class="view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 10 10">
                                    <path d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="case-study-content">
                        <span class="tag">Web Development</span>
                        <h4><a href="{{ route('contact') }}">Enterprise E-Commerce Platform</a></h4>
                        <p>Built a scalable e-commerce solution handling 50,000+ daily transactions with 99.98% uptime for a leading retail chain in Pakistan.</p>
                        <div class="case-study-meta">
                            <div class="meta-item">
                                <span class="label">Client</span>
                                <span class="value">Retail Corporation</span>
                            </div>
                            <div class="meta-item">
                                <span class="label">Result</span>
                                <span class="value">+240% Revenue Growth</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 2 -->
            <div class="col-lg-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="case-study-card">
                    <div class="case-study-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study/case2.jpg') }}" alt="Healthcare App" class="img-fluid">
                        <div class="case-study-overlay">
                            <a href="{{ route('contact') }}" class="view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 10 10">
                                    <path d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="case-study-content">
                        <span class="tag">Mobile Development</span>
                        <h4><a href="{{ route('contact') }}">Healthcare Patient Management App</a></h4>
                        <p>Developed a HIPAA-compliant mobile application connecting 200+ doctors with patients, reducing appointment wait times by 65%.</p>
                        <div class="case-study-meta">
                            <div class="meta-item">
                                <span class="label">Client</span>
                                <span class="value">MedConnect Inc.</span>
                            </div>
                            <div class="meta-item">
                                <span class="label">Result</span>
                                <span class="value">65% Faster Appointments</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 3 -->
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="case-study-card small">
                    <div class="case-study-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study/case3.jpg') }}" alt="AI Analytics" class="img-fluid">
                        <div class="case-study-overlay">
                            <a href="{{ route('contact') }}" class="view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 10 10">
                                    <path d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="case-study-content">
                        <span class="tag">AI Solutions</span>
                        <h4><a href="{{ route('contact') }}">Predictive Sales Analytics</a></h4>
                        <p>AI-powered sales forecasting tool that improved prediction accuracy by 88% for a fintech company.</p>
                        <div class="case-study-meta">
                            <div class="meta-item">
                                <span class="label">Result</span>
                                <span class="value">88% Accuracy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 4 -->
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="case-study-card small">
                    <div class="case-study-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study/case4.jpg') }}" alt="Cloud Migration" class="img-fluid">
                        <div class="case-study-overlay">
                            <a href="{{ route('contact') }}" class="view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 10 10">
                                    <path d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="case-study-content">
                        <span class="tag">Cloud</span>
                        <h4><a href="{{ route('contact') }}">Legacy System Cloud Migration</a></h4>
                        <p>Migrated a 15-year-old banking system to AWS, reducing infrastructure costs by 42% while improving performance.</p>
                        <div class="case-study-meta">
                            <div class="meta-item">
                                <span class="label">Result</span>
                                <span class="value">42% Cost Reduction</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 5 -->
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="case-study-card small">
                    <div class="case-study-img">
                        <img src="{{ asset('assets/theme/img/home1/case-study/case5.jpg') }}" alt="ERP System" class="img-fluid">
                        <div class="case-study-overlay">
                            <a href="{{ route('contact') }}" class="view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 10 10">
                                    <path d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="case-study-content">
                        <span class="tag">Web Development</span>
                        <h4><a href="{{ route('contact') }}">Manufacturing ERP Solution</a></h4>
                        <p>Custom ERP system for a manufacturing firm, automating 80% of manual processes and cutting operational costs significantly.</p>
                        <div class="case-study-meta">
                            <div class="meta-item">
                                <span class="label">Result</span>
                                <span class="value">80% Process Automation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Case Study section -->

<!-- Start Stats section -->
<div class="counter-section mb-110">
    <div class="container">
        <div class="counter-wrap">
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="counter-item">
                        <h2 class="counter">120</h2><span>+</span>
                        <p>Projects Delivered</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="counter-item">
                        <h2 class="counter">85</h2><span>+</span>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="counter-item">
                        <h2 class="counter">98</h2><span>%</span>
                        <p>Client Retention Rate</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="counter-item">
                        <h2 class="counter">7</h2><span>+</span>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Stats section -->

@endsection
