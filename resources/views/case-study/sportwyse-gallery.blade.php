@extends('layouts.app')

@section('title', 'Sportwyse Gallery — Sigmix Labs')
@section('nav-case-study', 'active')

@section('content')

<!-- Start Breadcrumb section -->
<div class="breadcrumb-section" style="background-image: url({{ asset('assets/theme/img/innerpage/breadcrumb-bg1.png') }}), linear-gradient(180deg, #121212 0%, #121212 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-wrapper">
                    <div class="banner-content">
                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('case-study') }}">Case Studies</a></li>
                            <li><a href="{{ route('case-study.sportwyse') }}">Sportwyse</a></li>
                            <li>Gallery</li>
                        </ul>
                        <h1>Sportwyse Gallery.</h1>
                    </div>
                    <div class="scroll-down-btn">
                        <a href="#gallery-section">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="29" viewBox="0 0 19 29">
                                <path d="M9.5 0V28M9.5 28C10 24.3333 12.4 17.1 18 17.5M9.5 28C8.5 24.1667 5.4 16.7 1 17.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb section -->

<!-- Start Gallery section -->
<div class="scroll-margin pt-110 mb-110" id="gallery-section">
    <div class="container">

        <!-- Section header -->
        <div class="row mb-60">
            <div class="col-lg-8 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <p style="font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.5; margin-bottom:12px;">Platform Screens</p>
                <h2 style="font-size:clamp(26px,4vw,40px); font-weight:700; margin-bottom:16px; line-height:1.2;">A Look Inside Sportwyse</h2>
                <p style="font-size:15px; line-height:1.8; opacity:.7;">Screenshots from the live platform — covering dashboards, registration flows, communication channels, tryout pipelines, and scheduling tools. Click any image to view full-size.</p>            </div>
            <div class="col-lg-4 d-flex align-items-end justify-content-lg-end wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <a href="{{ route('case-study.sportwyse') }}" class="explore-btn" style="text-decoration:none;">
                    ← Back to Case Study
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" viewBox="0 0 17 9">
                        <path d="M12.1691 4.97333L0.234337 4.95394C0.172187 4.95394 0.112583 4.9041 0.0686358 4.81538C0.024689 4.72666 0 4.60634 0 4.48087C0 4.35541 0.024689 4.23509 0.0686358 4.14637C0.112583 4.05765 0.172187 4.00781 0.234337 4.00781L12.1694 4.02721C12.2315 4.02721 12.2911 4.07705 12.3351 4.16576C12.379 4.25448 12.4037 4.37481 12.4037 4.50027C12.4037 4.62573 12.379 4.74606 12.3351 4.83478C12.2911 4.92349 12.2313 4.97333 12.1691 4.97333Z"/>
                        <path d="M16.7659 4.47881C16.7647 4.00124 16.4347 3.55823 16.0535 3.17852L13.3546 0.427842C13.0714 0.141815 12.5853 0.141815 12.3021 0.427842C12.0189 0.713869 12.0189 1.17851 12.3021 1.46454L14.6613 3.87311C14.9061 4.12281 15.226 4.34 15.226 4.50027C15.226 4.66054 14.8969 4.89235 14.6516 5.14421L12.2924 7.52338C12.0092 7.80941 12.0092 8.27405 12.2924 8.56008C12.5756 8.8461 13.0617 8.8461 13.3449 8.56008L16.0535 5.79147C16.4347 5.41176 16.7647 4.96875 16.7659 4.47881Z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Filter tabs -->
        <div class="row mb-40">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="display:flex; flex-wrap:wrap; gap:10px;" id="gallery-filters">
                    <button class="gallery-filter-btn active" data-filter="all" style="padding:8px 20px; border-radius:30px; border:1px solid rgba(255,255,255,0.2); background:rgba(123,104,238,0.15); color:inherit; font-size:13px; font-weight:600; cursor:pointer; transition:all 0.2s;">All</button>
                    <button class="gallery-filter-btn" data-filter="dashboard" style="padding:8px 20px; border-radius:30px; border:1px solid rgba(255,255,255,0.1); background:transparent; color:inherit; font-size:13px; font-weight:600; cursor:pointer; transition:all 0.2s;">Dashboard</button>
                    <button class="gallery-filter-btn" data-filter="registration" style="padding:8px 20px; border-radius:30px; border:1px solid rgba(255,255,255,0.1); background:transparent; color:inherit; font-size:13px; font-weight:600; cursor:pointer; transition:all 0.2s;">Registration</button>
                    <button class="gallery-filter-btn" data-filter="communication" style="padding:8px 20px; border-radius:30px; border:1px solid rgba(255,255,255,0.1); background:transparent; color:inherit; font-size:13px; font-weight:600; cursor:pointer; transition:all 0.2s;">Communication</button>
                    <button class="gallery-filter-btn" data-filter="tryouts" style="padding:8px 20px; border-radius:30px; border:1px solid rgba(255,255,255,0.1); background:transparent; color:inherit; font-size:13px; font-weight:600; cursor:pointer; transition:all 0.2s;">Tryouts</button>
                    <button class="gallery-filter-btn" data-filter="scheduling" style="padding:8px 20px; border-radius:30px; border:1px solid rgba(255,255,255,0.1); background:transparent; color:inherit; font-size:13px; font-weight:600; cursor:pointer; transition:all 0.2s;">Scheduling</button>
                    <button class="gallery-filter-btn" data-filter="roster" style="padding:8px 20px; border-radius:30px; border:1px solid rgba(255,255,255,0.1); background:transparent; color:inherit; font-size:13px; font-weight:600; cursor:pointer; transition:all 0.2s;">Roster</button>
                </div>
            </div>
        </div>

        <!-- Gallery grid -->
        @php
        $base = 'assets/theme/img/casestudy/sportwyse/';
        $images = [
            // [file, category, label, title, featured]
            ['Dashboard.png',           'dashboard',     'Dashboard',     'Admin Dashboard',        true],
            ['Registrations.png',       'registration',  'Registration',  'Registrations',          false],
            ['Tryouts Dashboard.png',   'tryouts',       'Tryouts',       'Tryouts Dashboard',      false],
            ['Tryouts Dashboard 2.png', 'tryouts',       'Tryouts',       'Tryouts Pipeline',       false],
            ['Tryouts Dashboard 3.png', 'tryouts',       'Tryouts',       'Tryouts Analytics',      false],
            ['Tryouts.png',             'tryouts',       'Tryouts',       'Tryout Overview',        false],
            ['Tryouts 2.png',           'tryouts',       'Tryouts',       'Tryout Detail',          false],
            ['Tryouts 3.png',           'tryouts',       'Tryouts',       'Tryout Evaluation',      false],
            ['Schedules.png',           'scheduling',    'Scheduling',    'Schedule Overview',      false],
            ['Schedules 1.png',         'scheduling',    'Scheduling',    'Schedules',              false],
            ['Events.png',              'scheduling',    'Scheduling',    'Events',                 false],
            ['Announcements.png',       'communication', 'Communication', 'Announcements',          false],
            ['Teams.png',               'roster',        'Roster',        'Teams',                  false],
            ['Settings.png',            'dashboard',     'Dashboard',     'Settings',               false],
        ];
        @endphp

        <div class="row g-4" id="gallery-grid">
            @foreach ($images as $img)
            @php
                $colClass = $img[4] ? 'col-lg-8 col-md-12' : 'col-lg-4 col-md-6';
                $height   = $img[4] ? '380px' : '240px';
                $src      = asset($base . rawurlencode($img[0]));
            @endphp
            <div class="{{ $colClass }} gallery-item wow animate fadeInUp" data-category="{{ $img[1] }}" data-wow-delay="200ms" data-wow-duration="1500ms" style="transition: opacity 0.3s, transform 0.3s;">
                <a href="{{ $src }}"
                   data-fancybox="sportwyse-gallery"
                   data-caption="Sportwyse — {{ $img[3] }}"
                   style="display:block; border-radius:12px; overflow:hidden; border:1px solid rgba(255,255,255,0.08); position:relative; cursor:zoom-in;">
                    <img src="{{ $src }}"
                         alt="Sportwyse — {{ $img[3] }}"
                         class="img-fluid w-100"
                         style="display:block; transition:transform 0.4s ease; height:{{ $height }}; object-fit:cover; object-position:top;">
                    <div class="gallery-overlay" style="position:absolute; inset:0; background:rgba(0,0,0,0); display:flex; align-items:center; justify-content:center; transition:background 0.3s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="opacity:0; transition:opacity 0.3s; color:#fff;">
                            <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/>
                        </svg>
                    </div>
                    <div style="position:absolute; bottom:0; left:0; right:0; padding:16px 18px 14px; background:linear-gradient(to top, rgba(0,0,0,0.72) 0%, transparent 100%);">
                        <span style="font-size:10px; font-weight:700; text-transform:uppercase; letter-spacing:1.5px; opacity:.7; display:block; margin-bottom:3px;">{{ $img[2] }}</span>
                        <p style="font-size:13px; font-weight:600; margin:0; color:#fff;">{{ $img[3] }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="row mt-60">
            <div class="col-lg-12 d-flex justify-content-center gap-3 flex-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{ route('case-study.sportwyse') }}" class="primary-btn2" data-text="View Full Case Study"><span>View Full Case Study</span></a>
                <a href="{{ route('contact') }}" style="display:inline-flex; align-items:center; gap:8px; padding:14px 32px; border-radius:6px; border:1px solid rgba(255,255,255,0.15); font-size:14px; font-weight:600; text-decoration:none; color:inherit; transition:border-color 0.2s;">Get in Touch</a>
            </div>
        </div>

    </div>
</div>
<!-- End Gallery section -->

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Filter buttons
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const items = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            filterBtns.forEach(b => {
                b.style.background = 'transparent';
                b.style.borderColor = 'rgba(255,255,255,0.1)';
            });
            this.style.background = 'rgba(123,104,238,0.15)';
            this.style.borderColor = 'rgba(255,255,255,0.2)';

            const filter = this.dataset.filter;
            items.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.opacity = '1';
                    item.style.pointerEvents = 'auto';
                    item.style.display = '';
                } else {
                    item.style.opacity = '0';
                    item.style.pointerEvents = 'none';
                    item.style.display = 'none';
                }
            });
        });
    });

    // Hover zoom on real thumbnails
    document.querySelectorAll('#gallery-grid a[data-fancybox]').forEach(link => {
        const img = link.querySelector('img');
        const overlay = link.querySelector('.gallery-overlay');
        const icon = overlay ? overlay.querySelector('svg') : null;

        link.addEventListener('mouseenter', () => {
            if (img) img.style.transform = 'scale(1.04)';
            if (overlay) overlay.style.background = 'rgba(0,0,0,0.35)';
            if (icon) icon.style.opacity = '1';
        });
        link.addEventListener('mouseleave', () => {
            if (img) img.style.transform = 'scale(1)';
            if (overlay) overlay.style.background = 'rgba(0,0,0,0)';
            if (icon) icon.style.opacity = '0';
        });
    });
});
</script>
@endpush

@endsection
