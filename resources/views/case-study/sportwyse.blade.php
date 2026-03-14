@extends('layouts.app')

@section('title', 'Sportwyse Case Study — Sigmix Labs')
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
                            <li>Sportwyse</li>
                        </ul>
                        <h1>Sportwyse.</h1>
                    </div>
                    <div class="scroll-down-btn">
                        <a href="#case-study-detail">
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

<!-- Start Case Study Detail section -->
<div class="case-study-details-section scroll-margin mb-110 pt-110" id="case-study-detail">
    <div class="container">

        <!-- Overview + meta sidebar -->
        <div class="row g-lg-5 g-4 mb-80">
            <div class="col-lg-8 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <p style="font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.5; margin-bottom:16px;">Executive Summary</p>
                <h2 style="font-size:clamp(26px,4vw,40px); font-weight:700; margin-bottom:24px; line-height:1.2;">Modernizing Youth Soccer Club Operations</h2>
                <p style="font-size:16px; line-height:1.85; opacity:.8; margin-bottom:16px;">
                    Youth soccer clubs face a persistent operational challenge: as teams grow, the administrative overhead of managing registrations, communication, tryouts, scheduling, and player rosters compounds rapidly. Staff spend hours on manual data entry, parents chase emails for updates, and coaches lack real-time access to the information they need.
                </p>
                <p style="font-size:16px; line-height:1.85; opacity:.8; margin-bottom:16px;">
                    Sportwyse is a purpose-built sports management platform that consolidates every layer of club operations into a single, multi-role digital environment. Built on Laravel 11 + Vue 3, it replaces disconnected spreadsheets, email threads, and paper-based workflows with an integrated application serving San Jose Rush Soccer and multiple youth leagues across the United States.
                </p>
                <p style="font-size:16px; line-height:1.85; opacity:.8;">
                    Clubs have reported measurable reductions in administrative time, faster payment collection, and dramatically improved parent and coach satisfaction.
                </p>
            </div>
            <div class="col-lg-4 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div style="padding:32px; border-radius:12px; border:1px solid rgba(255,255,255,0.1); display:flex; flex-direction:column; gap:20px;">
                    <div>
                        <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.45; margin-bottom:6px;">Client</p>
                        <p style="font-size:15px; font-weight:600; margin:0;"><a href="https://www.sanjoserush.com/" target="_blank" rel="noopener noreferrer" style="color:inherit; text-decoration:underline; text-underline-offset:3px;">San Jose Rush Soccer</a></p>
                    </div>
                    <div>
                        <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.45; margin-bottom:6px;">Industry</p>
                        <p style="font-size:15px; font-weight:600; margin:0;">Sports Management / SaaS</p>
                    </div>
                    <div>
                        <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.45; margin-bottom:6px;">Platform</p>
                        <p style="font-size:15px; font-weight:600; margin:0;">Laravel 11 + Vue 3 SaaS</p>
                    </div>
                    <div>
                        <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.45; margin-bottom:12px;">Tech Stack</p>
                        <div style="display:flex; flex-wrap:wrap; gap:8px;">
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">Laravel 11</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">Vue 3</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">MySQL</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">Redis</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">Pusher</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">Stripe</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">Firebase FCM</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">AWS S3</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">Docker</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">Laravel Passport</span>
                            <span style="padding:4px 12px; border-radius:30px; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); font-size:12px; font-weight:600;">Spatie Permission</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Challenge -->
        <div class="row mb-80">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="padding:48px; border-radius:16px; border:1px solid rgba(255,255,255,0.08);">
                    <p style="font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.5; margin-bottom:12px;">The Problem</p>
                    <h3 style="font-size:clamp(22px,3vw,32px); font-weight:700; margin-bottom:32px;">Managing Growth Without Infrastructure</h3>
                    <p style="font-size:15px; line-height:1.8; opacity:.75; margin-bottom:32px;">A mid-to-large youth soccer club serving hundreds of families across multiple age divisions faces operational demands that grow non-linearly. Before Sportwyse, clubs struggled with:</p>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div style="display:flex; gap:14px; align-items:flex-start;">
                                <div style="width:36px; height:36px; border-radius:8px; background:rgba(255,255,255,0.06); display:flex; align-items:center; justify-content:center; font-size:18px; flex-shrink:0; margin-top:2px;">💳</div>
                                <div>
                                    <h6 style="font-weight:700; font-size:15px; margin-bottom:6px;">Registration Chaos</h6>
                                    <p style="font-size:13px; line-height:1.65; opacity:.65; margin:0;">Manual invoice creation and phone-based payments with no visibility into balances or enrollment status.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div style="display:flex; gap:14px; align-items:flex-start;">
                                <div style="width:36px; height:36px; border-radius:8px; background:rgba(255,255,255,0.06); display:flex; align-items:center; justify-content:center; font-size:18px; flex-shrink:0; margin-top:2px;">💬</div>
                                <div>
                                    <h6 style="font-weight:700; font-size:15px; margin-bottom:6px;">Fragmented Communication</h6>
                                    <p style="font-size:13px; line-height:1.65; opacity:.65; margin:0;">Coaches, parents, and admins operating across email chains, group texts, and social media with no record retention.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div style="display:flex; gap:14px; align-items:flex-start;">
                                <div style="width:36px; height:36px; border-radius:8px; background:rgba(255,255,255,0.06); display:flex; align-items:center; justify-content:center; font-size:18px; flex-shrink:0; margin-top:2px;">🏃</div>
                                <div>
                                    <h6 style="font-weight:700; font-size:15px; margin-bottom:6px;">Tryout Bottlenecks</h6>
                                    <p style="font-size:13px; line-height:1.65; opacity:.65; margin:0;">Prospect data spread across paper forms and spreadsheets; offer letters hand-drafted; no pipeline visibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div style="display:flex; gap:14px; align-items:flex-start;">
                                <div style="width:36px; height:36px; border-radius:8px; background:rgba(255,255,255,0.06); display:flex; align-items:center; justify-content:center; font-size:18px; flex-shrink:0; margin-top:2px;">📅</div>
                                <div>
                                    <h6 style="font-weight:700; font-size:15px; margin-bottom:6px;">Schedule Management by Committee</h6>
                                    <p style="font-size:13px; line-height:1.65; opacity:.65; margin:0;">Schedules distributed via PDF, updated through broadcast emails — no automated notifications on changes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div style="display:flex; gap:14px; align-items:flex-start;">
                                <div style="width:36px; height:36px; border-radius:8px; background:rgba(255,255,255,0.06); display:flex; align-items:center; justify-content:center; font-size:18px; flex-shrink:0; margin-top:2px;">📋</div>
                                <div>
                                    <h6 style="font-weight:700; font-size:15px; margin-bottom:6px;">Roster Opacity</h6>
                                    <p style="font-size:13px; line-height:1.65; opacity:.65; margin:0;">Team rosters in local spreadsheets per coach, frequently out of sync — no single source of truth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Solution overview -->
        <div class="row mb-80">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <p style="font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.5; margin-bottom:12px;">The Solution</p>
                <h3 style="font-size:clamp(22px,3vw,32px); font-weight:700; margin-bottom:20px;">The Sportwyse Platform</h3>
                <p style="font-size:16px; line-height:1.85; opacity:.8; margin-bottom:32px;">Sportwyse introduces a role-based management layer covering four distinct user types — each with tailored access, dashboards, and workflows.</p>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div style="padding:24px; border-radius:12px; border:1px solid rgba(255,255,255,0.08); text-align:center; height:100%;">
                            <div style="font-size:28px; margin-bottom:12px;">🏢</div>
                            <h6 style="font-weight:700; font-size:14px; letter-spacing:.5px; margin-bottom:8px;">Club Administrators</h6>
                            <p style="font-size:13px; opacity:.6; margin:0; line-height:1.6;">Full system access — registrations, billing, announcements, and analytics.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div style="padding:24px; border-radius:12px; border:1px solid rgba(255,255,255,0.08); text-align:center; height:100%;">
                            <div style="font-size:28px; margin-bottom:12px;">🏅</div>
                            <h6 style="font-weight:700; font-size:14px; letter-spacing:.5px; margin-bottom:8px;">Coaches</h6>
                            <p style="font-size:13px; opacity:.6; margin:0; line-height:1.6;">Team rosters, schedules, match reports, player evaluations, and team chat.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div style="padding:24px; border-radius:12px; border:1px solid rgba(255,255,255,0.08); text-align:center; height:100%;">
                            <div style="font-size:28px; margin-bottom:12px;">👨‍👩‍👧</div>
                            <h6 style="font-weight:700; font-size:14px; letter-spacing:.5px; margin-bottom:8px;">Parents / Guardians</h6>
                            <p style="font-size:13px; opacity:.6; margin:0; line-height:1.6;">Registration, payments, schedule visibility, availability responses, and direct messaging.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div style="padding:24px; border-radius:12px; border:1px solid rgba(255,255,255,0.08); text-align:center; height:100%;">
                            <div style="font-size:28px; margin-bottom:12px;">⚽</div>
                            <h6 style="font-weight:700; font-size:14px; letter-spacing:.5px; margin-bottom:8px;">Players</h6>
                            <p style="font-size:13px; opacity:.6; margin:0; line-height:1.6;">Profile management, schedule access, performance history, and communication.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 1: Registration & Billing -->
        <div class="row g-lg-5 g-4 mb-60 align-items-start">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:48px; margin-bottom:32px;">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.4; margin-bottom:8px;">Feature 01</p>
                    <h3 style="font-size:clamp(20px,3vw,30px); font-weight:700; margin-bottom:16px;">Player Registration &amp; Payment Processing</h3>
                    <p style="font-size:15px; line-height:1.8; opacity:.75; max-width:760px;">The registration module is the financial backbone of the platform. Sportwyse replaces manual invoicing with a structured Stripe-powered checkout pipeline supporting installment plans, scholarships, coupons, and promotional pricing — all within a single, auditable flow.</p>
                </div>
            </div>
            <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="display:flex; flex-direction:column; gap:16px;">
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Flexible checkout flow</strong> — multi-step checkout with installment options, scholarship awards, coupon validation, and Stripe payments all in one flow.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Installment plan engine</strong> — dynamically generates payment schedules based on per-installment pricing tiers, applying credits and scholarship deductions proportionally.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Scholarship management</strong> — pre-configured discount tiers distributed proportionally across installments, eliminating manual negotiation.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Coupon &amp; promotion system</strong> — time-limited coupons with eligibility validation, double-application prevention, and redemption tracking.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Payment error logging</strong> — every failed transaction captured with metadata, enabling billing staff to resolve issues without blindly contacting parents.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div style="padding:36px; border-radius:12px; background:rgba(123,104,238,0.06); border:1px solid rgba(123,104,238,0.2);">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.6; margin-bottom:24px;">Operational Impact</p>
                    <div style="display:flex; flex-direction:column; gap:24px;">
                        <div>
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">70–80%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">reduction in per-registration admin time vs. manual invoicing</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">~60%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">fewer failed-payment follow-up calls with automated Stripe collection</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">Near-zero</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">end-of-season reconciliation time with real-time enrollment dashboard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 2: Communication -->
        <div class="row g-lg-5 g-4 mb-60 align-items-start">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:48px; margin-bottom:32px;">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.4; margin-bottom:8px;">Feature 02</p>
                    <h3 style="font-size:clamp(20px,3vw,30px); font-weight:700; margin-bottom:16px;">Multi-Channel Communication</h3>
                    <p style="font-size:15px; line-height:1.8; opacity:.75; max-width:760px;">Communication operates across three purpose-built channels: team group chat, private direct messages, and club-wide announcements — each designed for its audience and context, powered by Pusher and Firebase FCM.</p>
                </div>
            </div>
            <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="display:flex; flex-direction:column; gap:16px;">
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Real-time team chat</strong> — Pusher-powered group chat with replies, reactions, file attachments, read receipts, and typing indicators.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Private messaging</strong> — 1-on-1 conversations between coaches and parents with delivery and read status tracking (sent/delivered/read timestamps) and a user block system.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Targeted announcements</strong> — flexible audience filters (e.g., only U14 Division 1 parents) with simultaneous push and email delivery plus real-time read tracking.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Firebase FCM push notifications</strong> — every key event triggers iOS and Android push notifications with multi-device support, ensuring no device is missed.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Coach global chat</strong> — auto-enrolls all coaches on onboarding, maintaining an always-current staff communication channel without manual list management.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div style="padding:36px; border-radius:12px; background:rgba(123,104,238,0.06); border:1px solid rgba(123,104,238,0.2);">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.6; margin-bottom:24px;">Operational Impact</p>
                    <div style="display:flex; flex-direction:column; gap:24px;">
                        <div>
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">60–75%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">push notification open rate vs. 20–25% for broadcast email</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">40–50%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">reduction in re-communication overhead with built-in read receipts</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">~65%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">fewer "missed message" incidents during high-communication periods</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 3: Tryout Management -->
        <div class="row g-lg-5 g-4 mb-60 align-items-start">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:48px; margin-bottom:32px;">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.4; margin-bottom:8px;">Feature 03</p>
                    <h3 style="font-size:clamp(20px,3vw,30px); font-weight:700; margin-bottom:16px;">Tryout Management &amp; Pipeline Analytics</h3>
                    <p style="font-size:15px; line-height:1.8; opacity:.75; max-width:760px;">The tryout module models the complete prospect lifecycle as a structured pipeline with full analytics — from initial inquiry through offer acceptance — with automated notifications and conversion funnel visibility at every stage.</p>
                </div>
            </div>
            <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="margin-bottom:20px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.5; margin-bottom:10px;">Pipeline Stages</p>
                    <div style="display:flex; flex-wrap:wrap; gap:6px; align-items:center; font-size:12px; font-weight:600;">
                        <span style="padding:5px 12px; border-radius:20px; background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12);">Assigned</span>
                        <span style="opacity:.4;">→</span>
                        <span style="padding:5px 12px; border-radius:20px; background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12);">Pending</span>
                        <span style="opacity:.4;">→</span>
                        <span style="padding:5px 12px; border-radius:20px; background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12);">Attending</span>
                        <span style="opacity:.4;">→</span>
                        <span style="padding:5px 12px; border-radius:20px; background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12);">Attended</span>
                        <span style="opacity:.4;">→</span>
                        <span style="padding:5px 12px; border-radius:20px; background:rgba(123,104,238,0.15); border:1px solid rgba(123,104,238,0.3);">Offered</span>
                        <span style="opacity:.4;">→</span>
                        <span style="padding:5px 12px; border-radius:20px; background:rgba(34,197,94,0.1); border:1px solid rgba(34,197,94,0.3);">Accepted</span>
                    </div>
                </div>
                <div style="display:flex; flex-direction:column; gap:16px;">
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Analytics dashboard</strong> — KPI visibility across pipeline health, conversion rates per stage, response efficiency, temporal trends, and demographic breakdowns — cached for performance.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Offer management with expiry</strong> — time-bound offers with automated notifications on send, expiry approach, and expiry — no manual deadline tracking by staff.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Bulk assignment &amp; audit trail</strong> — large cohorts assigned to schedule slots in bulk with complete activity logging for accountability.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Coach score assignments</strong> — tryout prospects linked to coach evaluations, centralizing scoring that previously lived on paper clipboards.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div style="padding:36px; border-radius:12px; background:rgba(123,104,238,0.06); border:1px solid rgba(123,104,238,0.2);">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.6; margin-bottom:24px;">Operational Impact</p>
                    <div style="display:flex; flex-direction:column; gap:24px;">
                        <div>
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">55–65%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">reduction in coordinator hours per season vs. spreadsheet-based tracking (200+ prospects)</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">~30%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">higher prospect response rates with automated offer expiry notifications</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">15–25%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">improvement in offer-acceptance rates season-over-season using funnel analytics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 4: Scheduling -->
        <div class="row g-lg-5 g-4 mb-60 align-items-start">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:48px; margin-bottom:32px;">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.4; margin-bottom:8px;">Feature 04</p>
                    <h3 style="font-size:clamp(20px,3vw,30px); font-weight:700; margin-bottom:16px;">Schedule Management</h3>
                    <p style="font-size:15px; line-height:1.8; opacity:.75; max-width:760px;">Scheduling is the mechanical heartbeat of a sports club. Sportwyse unifies games and practices in one model, digitizes parent availability responses, and pushes change notifications within seconds — eliminating the per-game coordination overhead entirely.</p>
                </div>
            </div>
            <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="display:flex; flex-direction:column; gap:16px;">
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Availability tracking</strong> — parents respond per event; coaches see a real-time availability summary before each game, eliminating the "who can make Saturday?" text thread.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Repeat schedules</strong> — practice schedules repeat until a specified end date, eliminating dozens of manual entries at the start of each season.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Cancellation with reason</strong> — cancelled events carry a reason and trigger optional parent push notifications automatically on field or weather changes.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Schedule import via Excel</strong> — bulk-import league-issued fixture lists directly rather than re-entering them manually, with a complete change history for accountability.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Locked availability</strong> — administrators freeze availability responses after a deadline, giving coaches confident final lineups.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div style="padding:36px; border-radius:12px; background:rgba(123,104,238,0.06); border:1px solid rgba(123,104,238,0.2);">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.6; margin-bottom:24px;">Operational Impact</p>
                    <div style="display:flex; flex-direction:column; gap:24px;">
                        <div>
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">3–5 hrs</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">saved per team per week during competitive season with digital availability collection</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">~40%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">fewer no-show incidents — push notifications reach parents in seconds vs. 30–90 min for email</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">~70%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">reduction in per-season schedule setup time with repeat schedule generation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 5: Roster Management -->
        <div class="row g-lg-5 g-4 mb-80 align-items-start">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:48px; margin-bottom:32px;">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.4; margin-bottom:8px;">Feature 05</p>
                    <h3 style="font-size:clamp(20px,3vw,30px); font-weight:700; margin-bottom:16px;">Roster Management</h3>
                    <p style="font-size:15px; line-height:1.8; opacity:.75; max-width:760px;">Accurate rosters are foundational to every other workflow. Sportwyse provides a single source of truth for player data, with structured transfer logs, duplicate detection, and family access management built in.</p>
                </div>
            </div>
            <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="display:flex; flex-direction:column; gap:16px;">
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Player transfer system</strong> — structured mid-season transfers with an auditable record, preventing silent data inconsistencies from direct spreadsheet edits.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Duplicate player detection</strong> — automatic identification of potential duplicate records prevents double-billing and communication confusion from name spelling variations.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Family access model</strong> — secondary guardians access schedules and communications without requiring admins to manually manage multiple contact records.</div>
                    </div>
                    <div style="display:flex; gap:14px; padding:20px; border-radius:10px; border:1px solid rgba(255,255,255,0.07);">
                        <span style="color:#7B68EE; font-weight:900; flex-shrink:0; font-size:16px; margin-top:1px;">→</span>
                        <div><strong style="font-size:14px;">Player notes &amp; availability history</strong> — coaches attach longitudinal notes on development and injuries; attendance is accumulated season-long automatically without manual collection.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div style="padding:36px; border-radius:12px; background:rgba(123,104,238,0.06); border:1px solid rgba(123,104,238,0.2);">
                    <p style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.6; margin-bottom:24px;">Operational Impact</p>
                    <div style="display:flex; flex-direction:column; gap:24px;">
                        <div>
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">90%+</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">reduction in roster discrepancy incidents vs. parallel spreadsheets per coach</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">2–4 hrs</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">billing staff time saved per 100 players with duplicate detection preventing refund investigations</p>
                        </div>
                        <div style="border-top:1px solid rgba(255,255,255,0.07); padding-top:24px;">
                            <h4 style="font-size:36px; font-weight:800; margin-bottom:4px; color:#a89af0;">~50%</h4>
                            <p style="font-size:13px; opacity:.7; margin:0;">fewer guardian access support requests with the family access model</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Impact Summary Table -->
        <div class="row mb-80">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:48px; margin-bottom:32px;">
                    <h3 style="font-size:clamp(22px,3vw,32px); font-weight:700; margin-bottom:8px;">Platform-Wide Operational Summary</h3>
                </div>
                <div style="border-radius:12px; border:1px solid rgba(255,255,255,0.08); overflow:hidden;">
                    <table style="width:100%; border-collapse:collapse; font-size:14px;">
                        <thead>
                            <tr style="background:rgba(255,255,255,0.04);">
                                <th style="padding:16px 20px; text-align:left; font-weight:700; font-size:12px; text-transform:uppercase; letter-spacing:1px; opacity:.6; border-bottom:1px solid rgba(255,255,255,0.08);">Area</th>
                                <th style="padding:16px 20px; text-align:left; font-weight:700; font-size:12px; text-transform:uppercase; letter-spacing:1px; opacity:.6; border-bottom:1px solid rgba(255,255,255,0.08);">Key Automation</th>
                                <th style="padding:16px 20px; text-align:left; font-weight:700; font-size:12px; text-transform:uppercase; letter-spacing:1px; opacity:.6; border-bottom:1px solid rgba(255,255,255,0.08);">Estimated Time Savings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                                <td style="padding:16px 20px; font-weight:600;">Registration &amp; Billing</td>
                                <td style="padding:16px 20px; opacity:.7;">Installment plans, Stripe, scholarship automation</td>
                                <td style="padding:16px 20px; color:#a89af0; font-weight:700;">70–80% reduction in per-registration admin time</td>
                            </tr>
                            <tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                                <td style="padding:16px 20px; font-weight:600;">Communication</td>
                                <td style="padding:16px 20px; opacity:.7;">Targeted push notifications, read receipts, team chat</td>
                                <td style="padding:16px 20px; color:#a89af0; font-weight:700;">40–65% reduction in re-communication overhead</td>
                            </tr>
                            <tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                                <td style="padding:16px 20px; font-weight:600;">Tryout Management</td>
                                <td style="padding:16px 20px; opacity:.7;">Pipeline tracking, auto-notifications, bulk assignment</td>
                                <td style="padding:16px 20px; color:#a89af0; font-weight:700;">55–65% reduction in coordinator season hours</td>
                            </tr>
                            <tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                                <td style="padding:16px 20px; font-weight:600;">Scheduling</td>
                                <td style="padding:16px 20px; opacity:.7;">Bulk import, repeat setup, availability tracking</td>
                                <td style="padding:16px 20px; color:#a89af0; font-weight:700;">3–5 hours saved per team per week (season)</td>
                            </tr>
                            <tr>
                                <td style="padding:16px 20px; font-weight:600;">Roster Management</td>
                                <td style="padding:16px 20px; opacity:.7;">Single source of truth, transfer logs, deduplication</td>
                                <td style="padding:16px 20px; color:#a89af0; font-weight:700;">90%+ reduction in roster discrepancy incidents</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Conclusion -->
        <div class="row mb-80">
            <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div style="padding:48px; border-radius:16px; border:1px solid rgba(255,255,255,0.1);">
                    <p style="font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:2px; opacity:.5; margin-bottom:12px;">Conclusion</p>
                    <h3 style="font-size:clamp(20px,3vw,30px); font-weight:700; margin-bottom:20px;">Purpose-Built Software Delivers Measurable Results</h3>
                    <p style="font-size:15px; line-height:1.85; opacity:.8; margin-bottom:20px;">
                        Sportwyse demonstrates that vertical software designed around actual operational workflows — rather than generic tools — delivers measurable improvements at every layer. By unifying registration, communication, tryout management, scheduling, and roster management in a single platform with differentiated workflows for administrators, coaches, and parents, Sportwyse removes the manual coordination overhead that prevents club staff from focusing on what matters: athlete development and family experience.
                    </p>
                    <p style="font-size:15px; line-height:1.85; opacity:.8; margin-bottom:32px;">
                        The platform's architecture — Laravel Passport for secure API authentication, Spatie Permission for role-based access control, Stripe Cashier for reliable payment processing, Firebase for push delivery, and Pusher for real-time communication — ensures the operational gains are built on a technically sound and maintainable foundation, capable of scaling alongside the clubs it serves.
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:12px;">
                                <li style="display:flex; align-items:flex-start; gap:12px; font-size:14px; line-height:1.6;">
                                    <span style="color:#7B68EE; font-weight:900; flex-shrink:0; margin-top:2px;">→</span>
                                    Designed and built the entire platform architecture from scratch
                                </li>
                                <li style="display:flex; align-items:flex-start; gap:12px; font-size:14px; line-height:1.6;">
                                    <span style="color:#7B68EE; font-weight:900; flex-shrink:0; margin-top:2px;">→</span>
                                    Real-time features via Laravel Echo, Pusher, and Firebase FCM
                                </li>
                                <li style="display:flex; align-items:flex-start; gap:12px; font-size:14px; line-height:1.6;">
                                    <span style="color:#7B68EE; font-weight:900; flex-shrink:0; margin-top:2px;">→</span>
                                    RESTful APIs powering iOS &amp; Android mobile apps
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:12px;">
                                <li style="display:flex; align-items:flex-start; gap:12px; font-size:14px; line-height:1.6;">
                                    <span style="color:#7B68EE; font-weight:900; flex-shrink:0; margin-top:2px;">→</span>
                                    Stripe payment gateway integration
                                </li>
                                <li style="display:flex; align-items:flex-start; gap:12px; font-size:14px; line-height:1.6;">
                                    <span style="color:#7B68EE; font-weight:900; flex-shrink:0; margin-top:2px;">→</span>
                                    Redis caching &amp; query optimization for high-traffic seasons
                                </li>
                                <li style="display:flex; align-items:flex-start; gap:12px; font-size:14px; line-height:1.6;">
                                    <span style="color:#7B68EE; font-weight:900; flex-shrink:0; margin-top:2px;">→</span>
                                    Fully containerized with Docker, deployed on AWS
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center gap-3 flex-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{ route('case-study.sportwyse.gallery') }}" target="_blank" class="primary-btn2" data-text="View Gallery"><span>View Gallery</span></a>
                <a href="{{ route('contact') }}" style="display:inline-flex; align-items:center; gap:8px; padding:14px 32px; border-radius:6px; border:1px solid rgba(255,255,255,0.15); font-size:14px; font-weight:600; text-decoration:none; color:inherit; transition:border-color 0.2s;">Start Your Project</a>
            </div>
        </div>

    </div>
</div>
<!-- End Case Study Detail section -->

@endsection
