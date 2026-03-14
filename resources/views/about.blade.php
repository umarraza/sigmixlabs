@extends('layouts.app')

@section('title', 'About - Sigmix Labs')
@section('nav-pages', 'active')

@section('content')

<!-- Start Breadcrumb section -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">About Us</h2>
                    <ul class="breadcrumb-list wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb section -->

<!-- Start About section -->
<div class="about-section mb-110">
    <div class="container">
        <div class="row g-lg-5 gy-5 align-items-center mb-90">
            <div class="col-lg-6 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="about-img-area">
                    <img src="{{ asset('assets/theme/img/home1/about-img.jpg') }}" alt="About Sigmix Labs"
                        class="img-fluid main-img">
                    <div class="experience-badge">
                        <h3>7+</h3>
                        <p>Years of Excellence</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="section-title mb-30">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path
                                d="M6.6304 0.338424C6.67018 -0.112811 7.32982 -0.112807 7.3696 0.338428L7.72654 4.38625C7.75291 4.68505 8.10454 4.83069 8.33443 4.63804L11.4491 2.02821C11.7963 1.73728 12.2627 2.20368 11.9718 2.55089L9.36197 5.66556C9.1693 5.89546 9.31496 6.24709 9.61374 6.27346L13.6615 6.6304C14.1128 6.67018 14.1128 7.32982 13.6615 7.3696L9.61374 7.72654C9.31496 7.75291 9.1693 8.10454 9.36197 8.33443L11.9718 11.4491C12.2627 11.7963 11.7963 12.2627 11.4491 11.9718L8.33443 9.36197C8.10454 9.1693 7.75291 9.31496 7.72654 9.61374L7.3696 13.6615C7.32982 14.1128 6.67018 14.1128 6.6304 13.6615L6.27346 9.61374C6.24709 9.31496 5.89546 9.1693 5.66556 9.36197L2.55089 11.9718C2.20368 12.2627 1.73729 11.7963 2.02822 11.4491L4.63804 8.33443C4.83069 8.10454 4.68504 7.75291 4.38625 7.72654L0.338424 7.3696C-0.112811 7.32982 -0.112807 6.67018 0.338428 6.6304L4.38625 6.27346C4.68505 6.24709 4.83069 5.89546 4.63804 5.66556L2.02821 2.55089C1.73728 2.20368 2.20368 1.73729 2.55089 2.02822L5.66556 4.63804C5.89546 4.83069 6.24709 4.68504 6.27346 4.38625L6.6304 0.338424Z" />
                        </svg>
                        Who We Are
                    </span>
                    <h2>Building the Future <br>Through Technology</h2>
                </div>
                <p class="mb-20">Sigmix Labs is a technology company headquartered in 471/1, DHA Phase 5, Lahore,
                    Pakistan. We partner with businesses of all sizes — from ambitious startups to established
                    enterprises — to design, build, and scale digital products that matter.</p>
                <p class="mb-30">Our multidisciplinary team of engineers, designers, and strategists brings together
                    deep technical skills and creative problem-solving to deliver solutions that are both innovative and
                    practical.</p>
                <ul class="about-feature-list mb-30">
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Client-First Approach — Your goals are our goals
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Agile Delivery — Fast, iterative, and transparent
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Quality Obsessed — We don't ship until it's right
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Long-Term Partnerships — We grow with you
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="primary-btn4">
                    Work With Us
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                        <path
                            d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End About section -->

<!-- Start Mission & Vision section -->
<div class="mission-vision-section mb-110">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="mission-card">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z" />
                        </svg>
                    </div>
                    <h4>Our Mission</h4>
                    <p>To empower businesses worldwide with innovative, reliable, and scalable technology solutions that
                        fuel growth and create lasting competitive advantages.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="mission-card active">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                        </svg>
                    </div>
                    <h4>Our Vision</h4>
                    <p>To be the most trusted technology partner for businesses across South Asia and beyond, known for
                        engineering excellence, innovation, and integrity.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="mission-card">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M11.5 2C6.81 2 3 5.81 3 10.5S6.81 19 11.5 19h.5v3c4.86-2.34 8-7 8-11.5C20 5.81 16.19 2 11.5 2zm1 14.5h-2v-2h2v2zm0-4h-2c0-3.25 3-3 3-5 0-1.1-.9-2-2-2s-2 .9-2 2h-2c0-2.21 1.79-4 4-4s4 1.79 4 4c0 2.5-3 2.75-3 5z" />
                        </svg>
                    </div>
                    <h4>Our Values</h4>
                    <p>Transparency, innovation, quality, and accountability are the cornerstone of everything we do. We
                        build relationships on trust and deliver on our promises.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Mission & Vision section -->

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
                        <h2 class="counter">35</h2><span>+</span>
                        <p>Team Members</p>
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

<!-- Start Team section -->
<div class="team-section mb-110">
    <div class="container">
        <div class="row mb-60 align-items-end">
            <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="section-title">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path
                                d="M6.6304 0.338424C6.67018 -0.112811 7.32982 -0.112807 7.3696 0.338428L7.72654 4.38625C7.75291 4.68505 8.10454 4.83069 8.33443 4.63804L11.4491 2.02821C11.7963 1.73728 12.2627 2.20368 11.9718 2.55089L9.36197 5.66556C9.1693 5.89546 9.31496 6.24709 9.61374 6.27346L13.6615 6.6304C14.1128 6.67018 14.1128 7.32982 13.6615 7.3696L9.61374 7.72654C9.31496 7.75291 9.1693 8.10454 9.36197 8.33443L11.9718 11.4491C12.2627 11.7963 11.7963 12.2627 11.4491 11.9718L8.33443 9.36197C8.10454 9.1693 7.75291 9.31496 7.72654 9.61374L7.3696 13.6615C7.32982 14.1128 6.67018 14.1128 6.6304 13.6615L6.27346 9.61374C6.24709 9.31496 5.89546 9.1693 5.66556 9.36197L2.55089 11.9718C2.20368 12.2627 1.73729 11.7963 2.02822 11.4491L4.63804 8.33443C4.83069 8.10454 4.68504 7.75291 4.38625 7.72654L0.338424 7.3696C-0.112811 7.32982 -0.112807 6.67018 0.338428 6.6304L4.38625 6.27346C4.68505 6.24709 4.83069 5.89546 4.63804 5.66556L2.02821 2.55089C1.73728 2.20368 2.20368 1.73729 2.55089 2.02822L5.66556 4.63804C5.89546 4.83069 6.24709 4.68504 6.27346 4.38625L6.6304 0.338424Z" />
                        </svg>
                        Our Team
                    </span>
                    <h2>Meet the People <br>Behind Sigmix Labs</h2>
                </div>
            </div>
            <div class="col-lg-5 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <p>Our diverse team of engineers, designers, and strategists brings together decades of combined
                    experience across web, mobile, AI, and cloud technologies.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="team-card">
                    <div class="team-img">
                        <img src="{{ asset('assets/theme/img/home1/team/team1.jpg') }}" alt="CEO" class="img-fluid">
                        <div class="team-social">
                            <ul>
                                <li><a href="https://www.linkedin.com/company/sigmixlabs"><i
                                            class="bi bi-linkedin"></i></a></li>
                                <li><a href="https://twitter.com/sigmixlabs"><i class="bi bi-twitter-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5>Umar Rehan</h5>
                        <span>CEO & Co-Founder</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="team-card">
                    <div class="team-img">
                        <img src="{{ asset('assets/theme/img/home1/team/team2.jpg') }}" alt="CTO" class="img-fluid">
                        <div class="team-social">
                            <ul>
                                <li><a href="https://www.linkedin.com/company/sigmixlabs"><i
                                            class="bi bi-linkedin"></i></a></li>
                                <li><a href="https://github.com/sigmixlabs"><i class="bi bi-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5>Ali Hassan</h5>
                        <span>CTO & Co-Founder</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="team-card">
                    <div class="team-img">
                        <img src="{{ asset('assets/theme/img/home1/team/team3.jpg') }}" alt="Design Lead"
                            class="img-fluid">
                        <div class="team-social">
                            <ul>
                                <li><a href="https://www.linkedin.com/company/sigmixlabs"><i
                                            class="bi bi-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/sigmixlabs"><i class="bi bi-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5>Aisha Raza</h5>
                        <span>Head of Design</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow animate fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                <div class="team-card">
                    <div class="team-img">
                        <img src="{{ asset('assets/theme/img/home1/team/team4.jpg') }}" alt="Engineering Lead"
                            class="img-fluid">
                        <div class="team-social">
                            <ul>
                                <li><a href="https://www.linkedin.com/company/sigmixlabs"><i
                                            class="bi bi-linkedin"></i></a></li>
                                <li><a href="https://github.com/sigmixlabs"><i class="bi bi-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5>Omar Farooq</h5>
                        <span>Lead Engineer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Team section -->

<!-- Start CTA section -->
<div class="cta-section mb-110">
    <div class="container">
        <div class="cta-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="row align-items-center gy-4">
                <div class="col-lg-8">
                    <h3>Ready to build something great together?</h3>
                    <p>Join the growing list of companies that trust Sigmix Labs to power their digital success.</p>
                </div>
                <div class="col-lg-4 d-flex justify-content-lg-end">
                    <a href="{{ route('contact') }}" class="primary-btn4">
                        Get In Touch
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                            <path
                                d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End CTA section -->

@endsection
