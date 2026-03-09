@extends('layouts.app')

@section('title', 'Contact - Sigmix Labs')
@section('nav-contact', 'active')

@section('content')

<!-- Start Breadcrumb section -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Contact Us</h2>
                    <ul class="breadcrumb-list wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb section -->

<!-- Start Contact Info section -->
<div class="contact-info-section mb-80">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="contact-info-card">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                            <g>
                                <path d="M26.0803 20.4417C25.4047 19.7383 24.5898 19.3622 23.7262 19.3622C22.8695 19.3622 22.0477 19.7313 21.3442 20.4348L19.1433 22.6287C18.9622 22.5312 18.7811 22.4407 18.607 22.3501C18.3563 22.2248 18.1195 22.1063 17.9175 21.981C15.8559 20.6716 13.9823 18.9652 12.1854 16.7573C11.3148 15.6569 10.7297 14.7305 10.3049 13.7903C10.876 13.2679 11.4053 12.7247 11.9207 12.2023C12.1157 12.0073 12.3108 11.8053 12.5058 11.6103C13.9684 10.1477 13.9684 8.25321 12.5058 6.79058L10.6044 4.88917C10.3885 4.67326 10.1656 4.45038 9.95664 4.22751C9.53874 3.79569 9.09996 3.34993 8.64724 2.93204C7.97165 2.26341 7.16372 1.9082 6.31401 1.9082C5.46429 1.9082 4.64244 2.26341 3.94595 2.93204L1.56396 5.33492C0.672459 6.22643 0.164023 7.31295 0.0525852 8.57359C-0.114572 10.6073 0.484407 12.5018 0.944089 13.7415C2.0724 16.7852 3.7579 19.606 6.27222 22.6287C9.32283 26.2713 12.9933 29.1478 17.1862 31.1746C18.7881 31.9338 20.9263 32.8323 23.3153 32.9855C23.4615 32.9924 23.6148 32.9994 23.7541 32.9994C25.3629 32.9994 26.7141 32.4213 27.7728 31.2721L29.9249 29.0782C30.6145 28.3608 30.9766 27.525 30.9766 26.6683C30.9766 25.8047 30.6075 24.9759 29.904 24.2794L26.0803 20.4417Z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <h5>Call Any Time</h5>
                        <p><a href="tel:+923034969407">+92 303 4969407</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="contact-info-card">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                            <g>
                                <path d="M0 8.25C0 7.15598 0.434597 6.10677 1.20818 5.33318C1.98177 4.5596 3.03098 4.125 4.125 4.125H28.875C29.969 4.125 31.0182 4.5596 31.7918 5.33318C32.5654 6.10677 33 7.15598 33 8.25V24.75C33 25.844 32.5654 26.8932 31.7918 27.6668C31.0182 28.4404 29.969 28.875 28.875 28.875H4.125C3.03098 28.875 1.98177 28.4404 1.20818 27.6668C0.434597 26.8932 0 25.844 0 24.75V8.25ZM4.125 6.1875C3.56141 6.1875 3.02082 6.41132 2.62465 6.80748C2.22848 7.20365 2.00466 7.74424 2.00466 8.30783V8.7V9.30783L16.5 17.3602L30.9954 9.30783V8.30783C30.9954 7.74424 30.7715 7.20365 30.3754 6.80748C29.9792 6.41132 29.4386 6.1875 28.875 6.1875H4.125ZM30.9954 11.1024L20.9271 16.929L30.9954 22.9026V11.1024ZM30.9339 25.2845L19.233 18.0819L16.5 19.5981L13.767 18.0819L2.06512 25.2845C2.17551 25.7209 2.42534 26.1088 2.77891 26.3857C3.13247 26.6625 3.56939 26.8125 4.0184 26.8125H28.9816C29.4299 26.8125 29.866 26.6629 30.2197 26.3866C30.5734 26.1103 30.8235 25.7229 30.9339 25.2845ZM2.00466 22.9026L12.073 16.929L2.00466 11.1024V22.9026Z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <h5>Say Hello</h5>
                        <p><a href="mailto:info@sigmixlabs.com">info@sigmixlabs.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="contact-info-card">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                            <g>
                                <path d="M16.4999 0C9.77802 0 4.30957 5.46845 4.30957 12.1904C4.30957 14.4033 5.30201 16.7832 5.3436 16.8836C5.66413 17.6445 6.2966 18.8262 6.75266 19.5189L15.1109 32.1832C15.453 32.7024 15.9592 33 16.4999 33C17.0406 33 17.5469 32.7024 17.8889 32.184L26.2479 19.5189C26.7047 18.8262 27.3364 17.6445 27.657 16.8836C27.6986 16.784 28.6903 14.404 28.6903 12.1904C28.6903 5.46845 23.2218 0 16.4999 0ZM16.5001 17.2106C13.7329 17.2106 11.4805 14.9589 11.4805 12.191C11.4805 9.42309 13.7329 7.17146 16.5001 7.17146C19.2673 7.17146 21.5197 9.42309 21.5197 12.191C21.5197 14.9589 19.2673 17.2106 16.5001 17.2106Z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <h5>Our Location</h5>
                        <p><a href="https://maps.google.com/?q=DHA+Lahore+Pakistan">471/1, Block D, Phase 5, DHA Lahore</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Info section -->

<!-- Start Contact Form section -->
<div class="contact-section mb-110">
    <div class="container">
        <div class="row g-lg-5 gy-5">
            <div class="col-lg-6 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="section-title mb-40">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path d="M6.6304 0.338424C6.67018 -0.112811 7.32982 -0.112807 7.3696 0.338428L7.72654 4.38625C7.75291 4.68505 8.10454 4.83069 8.33443 4.63804L11.4491 2.02821C11.7963 1.73728 12.2627 2.20368 11.9718 2.55089L9.36197 5.66556C9.1693 5.89546 9.31496 6.24709 9.61374 6.27346L13.6615 6.6304C14.1128 6.67018 14.1128 7.32982 13.6615 7.3696L9.61374 7.72654C9.31496 7.75291 9.1693 8.10454 9.36197 8.33443L11.9718 11.4491C12.2627 11.7963 11.7963 12.2627 11.4491 11.9718L8.33443 9.36197C8.10454 9.1693 7.75291 9.31496 7.72654 9.61374L7.3696 13.6615C7.32982 14.1128 6.67018 14.1128 6.6304 13.6615L6.27346 9.61374C6.24709 9.31496 5.89546 9.1693 5.66556 9.36197L2.55089 11.9718C2.20368 12.2627 1.73729 11.7963 2.02822 11.4491L4.63804 8.33443C4.83069 8.10454 4.68504 7.75291 4.38625 7.72654L0.338424 7.3696C-0.112811 7.32982 -0.112807 6.67018 0.338428 6.6304L4.38625 6.27346C4.68505 6.24709 4.83069 5.89546 4.63804 5.66556L2.02821 2.55089C1.73728 2.20368 2.20368 1.73729 2.55089 2.02822L5.66556 4.63804C5.89546 4.83069 6.24709 4.68504 6.27346 4.38625L6.6304 0.338424Z"/>
                        </svg>
                        Get In Touch
                    </span>
                    <h2>Let's Talk About <br>Your Project</h2>
                </div>
                <p class="mb-30">Have a project in mind? We'd love to hear about it. Drop us a message and our team will get back to you within 24 hours.</p>
                <ul class="contact-feature-list">
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Free consultation for new projects
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Response within 24 hours
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        No commitment required
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Experienced team ready to help
                    </li>
                </ul>
                <div class="social-links mt-40">
                    <h6>Follow Us:</h6>
                    <ul class="social-area">
                        <li><a href="https://www.linkedin.com/company/sigmixlabs"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="https://github.com/sigmixlabs"><i class="bi bi-github"></i></a></li>
                        <li><a href="https://twitter.com/sigmixlabs"><i class="bi bi-twitter-x"></i></a></li>
                        <li><a href="https://www.instagram.com/sigmixlabs"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="contact-form-wrap">
                    <form action="#" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-inner">
                                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                                    <input type="text" id="first_name" name="first_name" placeholder="John" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner">
                                    <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner">
                                    <label for="email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" placeholder="john@example.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" placeholder="+1 234 567 890">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-inner">
                                    <label for="subject">Subject <span class="text-danger">*</span></label>
                                    <input type="text" id="subject" name="subject" placeholder="How can we help you?" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-inner">
                                    <label for="service">Service Interested In</label>
                                    <select id="service" name="service">
                                        <option value="" disabled selected>Select a service</option>
                                        <option value="web-development">Web Development</option>
                                        <option value="mobile-development">Mobile Development</option>
                                        <option value="ui-ux-design">UI/UX Design</option>
                                        <option value="cloud-services">Cloud Services</option>
                                        <option value="ai-ml">AI & Machine Learning</option>
                                        <option value="cyber-security">Cyber Security</option>
                                        <option value="erp-solutions">ERP Solutions</option>
                                        <option value="it-consulting">IT Consulting</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-inner">
                                    <label for="message">Message <span class="text-danger">*</span></label>
                                    <textarea id="message" name="message" rows="5" placeholder="Tell us about your project..." required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="primary-btn4 w-100">
                                    Send Message
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                        <path d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Form section -->

<!-- Start Map section -->
<div class="map-section mb-110">
    <div class="container">
        <div class="map-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13618.789!2d74.3587!3d31.4816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904b98e5e7f33%3A0x5c13b7da5c43b0b4!2sDHA%20Phase%205%2C%20Lahore%2C%20Pakistan!5e0!3m2!1sen!2s!4v1609459200000!5m2!1sen!2s"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Sigmix Labs Location - DHA Lahore">
            </iframe>
        </div>
    </div>
</div>
<!-- End Map section -->

@endsection
