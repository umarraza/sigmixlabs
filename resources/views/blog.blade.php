@extends('layouts.app')

@section('title', 'Blog - Sigmix Labs')
@section('nav-blog', 'active')

@section('content')

<!-- Start Breadcrumb section -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Blog</h2>
                    <ul class="breadcrumb-list wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb section -->

<!-- Start Blog section -->
<div class="blog-section mb-110">
    <div class="container">
        <div class="row mb-60 align-items-end">
            <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="section-title">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path
                                d="M6.6304 0.338424C6.67018 -0.112811 7.32982 -0.112807 7.3696 0.338428L7.72654 4.38625C7.75291 4.68505 8.10454 4.83069 8.33443 4.63804L11.4491 2.02821C11.7963 1.73728 12.2627 2.20368 11.9718 2.55089L9.36197 5.66556C9.1693 5.89546 9.31496 6.24709 9.61374 6.27346L13.6615 6.6304C14.1128 6.67018 14.1128 7.32982 13.6615 7.3696L9.61374 7.72654C9.31496 7.75291 9.1693 8.10454 9.36197 8.33443L11.9718 11.4491C12.2627 11.7963 11.7963 12.2627 11.4491 11.9718L8.33443 9.36197C8.10454 9.1693 7.75291 9.31496 7.72654 9.61374L7.3696 13.6615C7.32982 14.1128 6.67018 14.1128 6.6304 13.6615L6.27346 9.61374C6.24709 9.31496 5.89546 9.1693 5.66556 9.36197L2.55089 11.9718C2.20368 12.2627 1.73729 11.7963 2.02822 11.4491L4.63804 8.33443C4.83069 8.10454 4.68504 7.75291 4.38625 7.72654L0.338424 7.3696C-0.112811 7.32982 -0.112807 6.67018 0.338428 6.6304L4.38625 6.27346C4.68505 6.24709 4.83069 5.89546 4.63804 5.66556L2.02821 2.55089C1.73728 2.20368 2.20368 1.73729 2.55089 2.02822L5.66556 4.63804C5.89546 4.83069 6.24709 4.68504 6.27346 4.38625L6.6304 0.338424Z" />
                        </svg>
                        Insights & Updates
                    </span>
                    <h2>Latest News From <br>Sigmix Labs</h2>
                </div>
            </div>
            <div class="col-lg-5 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <p>Stay up-to-date with the latest trends in technology, our project highlights, and expert insights
                    from the Sigmix Labs team.</p>
            </div>
        </div>

        <div class="row g-md-4 gy-5">
            <!-- Blog Post 1 - Featured -->
            <div class="col-lg-8 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="blog-card featured">
                    <div class="blog-img">
                        <img src="{{ asset('assets/theme/img/home1/blog/blog1.jpg') }}" alt="AI in Business"
                            class="img-fluid">
                        <span class="blog-tag">AI & Technology</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> March 5, 2026</span>
                            <span><i class="bi bi-person"></i> Sigmix Labs Team</span>
                            <span><i class="bi bi-chat-dots"></i> 12 Comments</span>
                        </div>
                        <h3><a href="{{ route('blog.ai-transforming-business') }}">How AI is Transforming the Way Modern
                                Businesses Operate</a></h3>
                        <p>Artificial intelligence is no longer a futuristic concept — it's actively transforming how
                            businesses build, deploy, and scale their software. From intelligent code assistants to
                            automated testing pipelines and predictive analytics, AI is embedded in every layer of the
                            modern development stack.</p>
                        <a href="{{ route('blog.ai-transforming-business') }}" class="read-more-btn">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                <path
                                    d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar Posts -->
            <div class="col-lg-4 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="blog-card side-card mb-4">
                    <div class="blog-img">
                        <img src="{{ asset('assets/theme/img/home1/blog/blog2.jpg') }}" alt="Laravel 11"
                            class="img-fluid">
                        <span class="blog-tag">Web Dev</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Feb 20, 2026</span>
                        </div>
                        <h5><a href="#">Laravel 12: What's New and What's Changed</a></h5>
                        <a href="#" class="read-more-btn small">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-card side-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/theme/img/home1/blog/blog3.jpg') }}" alt="Cloud Security"
                            class="img-fluid">
                        <span class="blog-tag">Security</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Feb 10, 2026</span>
                        </div>
                        <h5><a href="#">Cloud Security Best Practices Every Startup Should Follow</a></h5>
                        <a href="#" class="read-more-btn small">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/theme/img/home1/blog/blog4.jpg') }}" alt="React Native"
                            class="img-fluid">
                        <span class="blog-tag">Mobile Dev</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Jan 28, 2026</span>
                            <span><i class="bi bi-person"></i> Ali Hassan</span>
                        </div>
                        <h4><a href="#">React Native vs Flutter: The 2026 Comparison</a></h4>
                        <p>We break down the key differences between these two powerhouse frameworks and help you choose
                            the right one for your next project.</p>
                        <a href="#" class="read-more-btn">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                <path
                                    d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/theme/img/home1/blog/blog5.jpg') }}" alt="DevOps" class="img-fluid">
                        <span class="blog-tag">DevOps</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Jan 15, 2026</span>
                            <span><i class="bi bi-person"></i> Sara Khan</span>
                        </div>
                        <h4><a href="#">Building a Zero-Downtime Deployment Pipeline with GitHub Actions</a></h4>
                        <p>A step-by-step guide to setting up CI/CD pipelines that ensure your applications are always
                            available, even during deployments.</p>
                        <a href="#" class="read-more-btn">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                <path
                                    d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 4 -->
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/theme/img/home1/blog/blog6.jpg') }}" alt="UX Design"
                            class="img-fluid">
                        <span class="blog-tag">Design</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Jan 5, 2026</span>
                            <span><i class="bi bi-person"></i> Aisha Raza</span>
                        </div>
                        <h4><a href="#">10 UX Principles That Drive Higher Conversion Rates</a></h4>
                        <p>Discover the design principles our team uses to create user experiences that not only look
                            great but also convert visitors into customers.</p>
                        <a href="#" class="read-more-btn">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                <path
                                    d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 5 -->
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/theme/img/home1/blog/blog1.jpg') }}" alt="Microservices"
                            class="img-fluid">
                        <span class="blog-tag">Architecture</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Dec 20, 2025</span>
                            <span><i class="bi bi-person"></i> Omar Farooq</span>
                        </div>
                        <h4><a href="#">Microservices vs Monolith: Choosing the Right Architecture</a></h4>
                        <p>We analyze real-world trade-offs between microservices and monolithic architectures based on
                            our experience delivering 100+ projects.</p>
                        <a href="#" class="read-more-btn">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                <path
                                    d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 6 -->
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/theme/img/home1/blog/blog2.jpg') }}" alt="Blockchain"
                            class="img-fluid">
                        <span class="blog-tag">Blockchain</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Dec 10, 2025</span>
                            <span><i class="bi bi-person"></i> Sigmix Labs Team</span>
                        </div>
                        <h4><a href="#">Practical Blockchain Use Cases Beyond Cryptocurrency</a></h4>
                        <p>Real-world applications of blockchain in supply chain, healthcare, and finance that are
                            delivering tangible value for businesses today.</p>
                        <a href="#" class="read-more-btn">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                <path
                                    d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 7 -->
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/theme/img/home1/blog/blog3.jpg') }}" alt="Agile" class="img-fluid">
                        <span class="blog-tag">Agile</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Nov 28, 2025</span>
                            <span><i class="bi bi-person"></i> Umar Rehan</span>
                        </div>
                        <h4><a href="#">How We Run Agile Sprints Across Remote Teams</a></h4>
                        <p>Our proven agile process for keeping distributed teams aligned, productive, and delivering
                            consistent value to clients across time zones.</p>
                        <a href="#" class="read-more-btn">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                <path
                                    d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination-area mt-60 d-flex justify-content-center wow animate fadeInUp" data-wow-delay="200ms"
            data-wow-duration="1500ms">
            <ul class="pagination-list">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">
                        <i class="bi bi-arrow-right"></i>
                    </a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Blog section -->

@endsection
