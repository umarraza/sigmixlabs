<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sigmix Labs - Portfolio</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #8b5cf6;
            --dark-bg: #ffffff;
            --card-bg: #f8f9fa;
            --text-light: #1e293b;
            --text-muted: #64748b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            color: var(--text-light);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-weight: 800;
        }
        
        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .nav-link {
            color: var(--text-light) !important;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
            padding: 0.5rem 1rem !important;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 60%;
        }
        
        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background-image: url('{{ asset("assets/img/dataanalytics.jpg") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.75) 0%, rgba(248, 249, 250, 0.7) 100%);
            z-index: 0;
        }
        
        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(99, 102, 241, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            animation: fadeInUp 1s ease-out;
        }
        
        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
            font-weight: 400;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 1rem 2.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(99, 102, 241, 0.4);
        }
        
        .btn-outline-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 1rem 2.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            background: transparent;
        }
        
        .btn-outline-custom:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Section Styling */
        section {
            padding: 6rem 0;
            position: relative;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .section-subtitle {
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 4rem;
            font-size: 1.1rem;
        }
        
        /* About Section */
        .about-section {
            background: rgba(248, 249, 250, 0.5);
        }
        
        .feature-card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            inset: -1px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.65), rgba(248, 249, 250, 0.6));
            z-index: 0;
            border-radius: 20px;
        }
        
        .feature-card > * {
            position: relative;
            z-index: 1;
        }
        
        .feature-card h4 {
            color: #0f172a;
            font-weight: 700;
        }
        
        .feature-card p {
            color: #475569 !important;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary-color);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.2);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }
        
        /* Portfolio Grid */
        .portfolio-section {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }
        
        .project-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            cursor: pointer;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-color);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.3);
        }
        
        .project-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .project-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.2), rgba(139, 92, 246, 0.2));
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .project-card:hover .project-image::before {
            opacity: 1;
        }
        
        .project-image i {
            font-size: 4rem;
            color: var(--primary-color);
            opacity: 0.3;
            transition: all 0.3s ease;
        }
        
        .project-card:hover .project-image i {
            opacity: 0.6;
            transform: scale(1.1);
        }
        
        .project-content {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #0f172a;
        }
        
        .project-description {
            color: var(--text-muted);
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        
        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: auto;
        }
        
        .project-tag {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary-color);
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(99, 102, 241, 0.2);
        }
        
        /* Contact Section */
        .contact-section {
            background: rgba(248, 249, 250, 0.5);
        }
        
        .contact-info {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 3rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        
        .contact-item h5 {
            margin-bottom: 0.25rem;
            font-weight: 600;
        }
        
        .contact-item p {
            margin: 0;
            color: var(--text-muted);
        }
        
        /* Footer */
        footer {
            background: rgba(255, 255, 255, 0.95);
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            padding: 3rem 0;
        }
        
        .social-links a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--card-bg);
            border: 1px solid rgba(0, 0, 0, 0.1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            color: var(--text-light);
            font-size: 1.2rem;
        }
        
        .social-links a:hover {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-color: transparent;
            transform: translateY(-3px);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            section {
                padding: 4rem 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Sigmix Labs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content">
                    <h1 class="hero-title">
                        AI-Powered Digital<br>
                        <span class="gradient-text">Experiences</span>
                    </h1>
                    <p class="hero-subtitle">
                        Leveraging artificial intelligence to deliver solutions with unprecedented speed and precision
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#portfolio" class="btn btn-primary-custom">View Our Work</a>
                        <a href="#contact" class="btn btn-outline-custom">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">What We Do</h2>
            <p class="section-subtitle animate-on-scroll">We specialize in delivering cutting-edge digital solutions</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="feature-card" style="background-image: url('{{ asset('assets/img/webdevelopment.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="feature-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <h4>Web Development</h4>
                        <p class="text-muted mb-0">Building responsive, scalable web applications using modern technologies and frameworks.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate-on-scroll" style="transition-delay: 0.1s;">
                    <div class="feature-card" style="background-image: url('{{ asset('assets/img/mobileappdevelopment.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="feature-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4>Mobile Apps</h4>
                        <p class="text-muted mb-0">Creating intuitive mobile experiences for iOS and Android platforms.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate-on-scroll" style="transition-delay: 0.2s;">
                    <div class="feature-card" style="background-image: url('{{ asset('assets/img/uiuxdesign.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="feature-icon">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h4>UI/UX Design</h4>
                        <p class="text-muted mb-0">Designing beautiful, user-centered interfaces that enhance engagement.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate-on-scroll" style="transition-delay: 0.3s;">
                    <div class="feature-card" style="background-image: url('{{ asset('assets/img/cloudsolutions.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="feature-icon">
                            <i class="bi bi-cloud"></i>
                        </div>
                        <h4>Cloud Solutions</h4>
                        <p class="text-muted mb-0">Implementing robust cloud infrastructure for scalable business operations.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate-on-scroll" style="transition-delay: 0.4s;">
                    <div class="feature-card" style="background-image: url('{{ asset('assets/img/dataanalytics.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h4>Data Analytics</h4>
                        <p class="text-muted mb-0">Turning data into actionable insights for informed decision-making.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate-on-scroll" style="transition-delay: 0.5s;">
                    <div class="feature-card" style="background-image: url('{{ asset('assets/img/security.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Security</h4>
                        <p class="text-muted mb-0">Ensuring your digital assets are protected with industry-leading security practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Our Portfolio</h2>
            <p class="section-subtitle animate-on-scroll">Recent projects showcasing our expertise</p>
            
            <div class="row g-4 justify-content-center">
                <!-- Project 1: Sports Management System -->
                <div class="col-md-10 col-lg-8 animate-on-scroll">
                    <div class="project-card">
                        <div class="project-image">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">All-in-One Sports Management System</h3>
                            <p class="project-description">
                                A comprehensive SaaS platform built from the ground up to revolutionize how football clubs manage their operations. Serving San Jose Rush Soccer and multiple youth leagues across the US, the system handles everything from player registrations to performance analytics, providing a seamless experience for administrators, coaches, players, and parents.
                            </p>
                            <div class="mb-3">
                                <h5 style="font-size: 1rem; font-weight: 600; color: #0f172a;">Key Features:</h5>
                                <ul style="font-size: 0.9rem; line-height: 1.8; color: #475569;">
                                    <li><strong style="color: #0f172a;">Team & Player Management:</strong> Complete roster management with player profiles, medical records, and performance tracking</li>
                                    <li><strong style="color: #0f172a;">Registration System:</strong> Online registration with payment processing, document uploads, and automated approval workflows</li>
                                    <li><strong style="color: #0f172a;">Scheduling & Calendar:</strong> Practice sessions, matches, and events with automated notifications and calendar integrations</li>
                                    <li><strong style="color: #0f172a;">Match Reports:</strong> Detailed match analytics, player ratings, and tactical analysis tools</li>
                                    <li><strong style="color: #0f172a;">Parent Portal:</strong> Real-time updates, photo galleries, and communication tools for parent engagement</li>
                                    <li><strong style="color: #0f172a;">Financial Management:</strong> Payment tracking, invoicing, and financial reporting</li>
                                    <li><strong style="color: #0f172a;">Mobile App:</strong> iOS and Android apps for on-the-go access</li>
                                </ul>
                            </div>
                            <div class="project-tags mb-3">
                                <span class="project-tag">Laravel</span>
                                <span class="project-tag">Vue.js</span>
                                <span class="project-tag">MySQL</span>
                                <span class="project-tag">Redis</span>
                                <span class="project-tag">Pusher</span>
                                <span class="project-tag">Stripe API</span>
                                <span class="project-tag">AWS S3</span>
                                <span class="project-tag">Docker</span>
                            </div>
                            <div class="d-flex gap-3 flex-wrap">
                                <a href="https://www.sanjoserush.com/" target="_blank" class="btn btn-primary-custom btn-sm">
                                    <i class="bi bi-globe me-2"></i>View Website
                                </a>
                                <a href="https://app.sportwyse.com/" target="_blank" class="btn btn-outline-custom btn-sm">
                                    <i class="bi bi-box-arrow-up-right me-2"></i>View Platform
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Get In Touch</h2>
            <p class="section-subtitle animate-on-scroll">Let's discuss your next project</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-info animate-on-scroll">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <h5>Email Us</h5>
                                <p>info@sigmixlabs.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div>
                                <h5>Call Us</h5>
                                <p>+92 303 4969407</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h5>Visit Us</h5>
                                <p>471/1, Block D, Phase 5, DHA Lahore</p>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <div class="social-links">
                                <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" aria-label="GitHub"><i class="bi bi-github"></i></a>
                                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Sigmix Labs. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Animate on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(element => {
            observer.observe(element);
        });

        // Active nav link on scroll
        window.addEventListener('scroll', function() {
            let current = '';
            const sections = document.querySelectorAll('section');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
