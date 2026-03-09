<?php

return [
    'title'        => 'E-commerce Solutions - Sigmix Labs',
    'breadcrumb'   => 'E-commerce Solutions',
    'heading'      => 'E-commerce <span>Solutions.</span>',
    'pageH1'       => 'High-performance e-commerce platforms built to convert visitors into loyal customers — at any scale.',
    'description'  => 'At Sigmix Labs, we build e-commerce experiences that go far beyond a standard online store. From lightning-fast storefronts and frictionless checkout flows to intelligent product recommendations and seamless third-party integrations, our solutions are engineered to maximise conversion, reduce cart abandonment, and grow your revenue. Whether you\'re launching your first store or re-platforming an enterprise operation, we deliver battle-tested e-commerce architecture that scales with your business.',
    'features' => [
        'Custom Storefront Development',
        'Payment Gateway Integration',
        'Inventory & Order Management',
        'Mobile-First Shopping Experience',
        'SEO & Performance Optimisation',
        'Analytics & Conversion Tracking',
    ],
    'faq' => [
        [
            'q' => 'Which e-commerce platforms do you build on?',
            'a' => 'We build custom Laravel/Vue storefronts, and integrate with Shopify, WooCommerce, and Magento. For high-scale operations we recommend headless commerce architectures with a decoupled front-end for maximum performance.',
        ],
        [
            'q' => 'Can you migrate our existing store to a new platform?',
            'a' => 'Yes. We handle full platform migrations — products, categories, customer data, order history, and SEO redirects — with zero downtime strategies to protect your revenue during the transition.',
        ],
        [
            'q' => 'How do you handle payment security and PCI compliance?',
            'a' => 'We integrate industry-standard payment gateways (Stripe, PayPal, Braintree) that offload PCI scope. We never store raw card data and implement HTTPS, CSP headers, and fraud-detection hooks throughout the checkout flow.',
        ],
        [
            'q' => 'Can you integrate with our ERP, CRM, or warehouse system?',
            'a' => 'Absolutely. We build robust API integrations with ERPs (SAP, NetSuite), CRMs (HubSpot, Salesforce), fulfilment providers, and third-party logistics platforms so your data flows seamlessly across your entire operation.',
        ],
        [
            'q' => 'How do you optimise for conversion and search engine ranking?',
            'a' => 'We implement technical SEO from the ground up — structured product data, schema markup, server-side rendering, Core Web Vitals optimisation, and A/B testing frameworks — so your store ranks well and converts at every stage of the funnel.',
        ],
    ],
    'process' => [
        ['step' => '01', 'title' => 'Discovery & Strategy',       'desc' => 'We analyse your products, target market, competitors, and conversion goals to define the optimal platform and feature set for your store.'],
        ['step' => '02', 'title' => 'UX & Design',                'desc' => 'Our designers craft brand-aligned, conversion-focused storefronts — from product pages to checkout — tested against real user behaviour patterns.'],
        ['step' => '03', 'title' => 'Development & Integration', 'desc' => 'We build your store with clean, maintainable code and integrate payments, inventory, shipping, and marketing tools into a unified system.'],
        ['step' => '04', 'title' => 'Testing & Optimisation',     'desc' => 'Rigorous load testing, cross-browser QA, and performance benchmarking ensure a fast, reliable, and secure shopping experience before launch.'],
        ['step' => '05', 'title' => 'Launch & Growth Support',    'desc' => 'We manage a staged go-live, monitor key metrics, and provide ongoing iteration based on analytics — continuously improving conversion and revenue.'],
    ],
    'featureTitle' => 'E-commerce <span>Solution Capabilities.</span>',
    'featureItems' => [
        ['icon' => 0, 'title' => 'Custom Storefront & Headless Commerce', 'desc'  => 'Pixel-perfect, blazing-fast storefronts built with modern frameworks — React, Vue, or Blade — decoupled from your commerce backend for ultimate flexibility.'],
        ['icon' => 1, 'title' => 'Payments, Fraud & Security',             'desc'  => 'Seamless integration with leading payment gateways, 3DS2 authentication, fraud scoring, and PCI-compliant architecture to protect every transaction.'],
        ['icon' => 2, 'title' => 'Catalogue, Orders & Fulfilment',         'desc'  => 'End-to-end management of complex product catalogues, multi-warehouse inventory, automated order routing, and real-time shipping rate calculation.'],
        ['icon' => 3, 'title' => 'Analytics & Personalisation',            'desc'  => 'GA4, heatmaps, funnel analysis, and AI-powered recommendations that surface the right products to the right shopper at exactly the right moment.'],
    ],
];
