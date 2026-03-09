<?php

return [
    'title'        => 'Software Development - Sigmix Labs',
    'breadcrumb'   => 'Software Development',
    'heading'      => 'Software <span>Development.</span>',
    'pageH1'       => 'Bespoke software engineered for performance, scalability, and long-term business impact.',
    'img1'         => 'software development-1.jpg',
    'img2'         => 'software development-2.jpg',
    'description'  => 'At Sigmix Labs, we design and build custom software that solves real problems — not off-the-shelf products that force you to adapt your workflow to their limitations. From web applications and internal tools to complex enterprise systems, our engineering teams deliver clean, maintainable code backed by rigorous testing and a deep understanding of your business domain. We work in agile sprints with full transparency, so you always know where your project stands and can adapt priorities as your needs evolve.',
    'features' => [
        'Custom Web & Enterprise Applications',
        'API Design & Third-Party Integrations',
        'Agile Development & Sprint Delivery',
        'Database Architecture & Optimisation',
        'Legacy System Modernisation',
        'Code Review & Quality Assurance',
    ],
    'faq' => [
        [
            'q' => 'How do you handle changing requirements mid-project?',
            'a' => 'We work in short agile sprints — typically two weeks — with planning sessions at the start of each cycle. This means requirements can be reprioritised between sprints without derailing the project, so your software evolves alongside your business.',
        ],
        [
            'q' => 'What technologies do you use for custom software?',
            'a' => 'Our stack is selected based on project requirements, not habit. We commonly use Laravel, Node.js, React, Vue, and PostgreSQL, but we evaluate each engagement independently and recommend the right tool for the job.',
        ],
        [
            'q' => 'Can you integrate with our existing systems and third-party services?',
            'a' => 'Yes. We design RESTful and GraphQL APIs and build integrations with ERPs, CRMs, payment gateways, authentication providers, and any third-party platform that exposes an API — with thorough error handling and retry logic throughout.',
        ],
        [
            'q' => 'How do you ensure the software is secure?',
            'a' => 'Security is built into our development process from day one. We follow OWASP guidelines, conduct code reviews with a security focus, implement proper authentication and authorisation, and perform penetration testing before major releases.',
        ],
        [
            'q' => 'Do you provide post-launch maintenance and support?',
            'a' => 'Absolutely. We offer ongoing maintenance retainers that cover bug fixes, dependency updates, performance monitoring, and incremental feature development — ensuring your software stays secure and relevant long after launch.',
        ],
    ],
    'process' => [
        ['step' => '01', 'title' => 'Discovery & Requirements',   'desc' => 'We work closely with your stakeholders to map workflows, define functional requirements, and identify technical constraints before a single line of code is written.'],
        ['step' => '02', 'title' => 'Architecture & Planning',    'desc' => 'Our engineers design the system architecture — database schema, API contracts, service boundaries — and break the work into prioritised, deliverable sprints.'],
        ['step' => '03', 'title' => 'Agile Development',          'desc' => 'We build in iterative cycles with continuous integration, automated testing, and regular demos so you can provide feedback and steer direction at every stage.'],
        ['step' => '04', 'title' => 'QA & Security Review',       'desc' => 'Every feature goes through unit, integration, and end-to-end testing alongside a security review before it ships — zero known bugs reach production.'],
        ['step' => '05', 'title' => 'Deployment & Handover',      'desc' => 'We deploy to your infrastructure with documented runbooks, CI/CD pipelines, and full knowledge transfer so your team can operate and extend the system with confidence.'],
    ],
    'featureTitle' => 'Software <span>Development Capabilities.</span>',
    'featureItems' => [
        ['icon' => 0, 'title' => 'Full-Stack Web Applications',      'desc'  => 'End-to-end development of web applications — from rich, responsive front-ends to robust back-end services and scalable database layers.'],
        ['icon' => 1, 'title' => 'API Design & Integrations',        'desc'  => 'Well-documented RESTful and GraphQL APIs, plus seamless integrations with the third-party platforms your business depends on.'],
        ['icon' => 2, 'title' => 'Legacy Modernisation',             'desc'  => 'Incremental refactoring strategies that extend the life of existing systems, reduce technical debt, and unlock new capabilities without a costly full rewrite.'],
        ['icon' => 3, 'title' => 'DevOps & Continuous Delivery',     'desc'  => 'Automated CI/CD pipelines, containerisation, infrastructure-as-code, and monitoring set up from day one to keep deployment fast, safe, and repeatable.'],
    ],
];
