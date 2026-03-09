<?php

return [
    'title'        => 'Cloud Services - Sigmix Labs',
    'breadcrumb'   => 'Cloud Services',
    'heading'      => 'Cloud <span>Services.</span>',
    'pageH1'       => 'Modern cloud infrastructure — designed for reliability, built for scale, and optimised to keep your costs under control.',
    'description'  => 'Cloud done well is a competitive advantage. Sigmix Labs helps organisations design, migrate, and operate cloud environments on AWS, GCP, and Azure that are genuinely resilient, secure, and cost-efficient. We go beyond lift-and-shift: our cloud engagements encompass infrastructure-as-code, containerisation, serverless architectures, DevSecOps pipelines, and FinOps disciplines. Whether you\'re cloud-native from day one or moving a legacy estate, we build cloud foundations that give your engineering teams the speed and confidence to ship.',
    'features' => [
        'Cloud Architecture & Design',
        'Infrastructure as Code (IaC)',
        'Cloud Migration & Re-platforming',
        'Kubernetes & Container Orchestration',
        'DevSecOps & CI/CD Pipelines',
        'Cloud Cost Optimisation (FinOps)',
    ],
    'faq' => [
        [
            'q' => 'Which cloud providers do you work with?',
            'a' => 'We are experienced across AWS, Google Cloud Platform, and Microsoft Azure. Most of our work is cloud-agnostic — using Terraform and Kubernetes so you\'re never locked to a single provider, with a preference for whichever platform best fits your workload and team.',
        ],
        [
            'q' => 'What does a cloud migration engagement look like?',
            'a' => 'We start with a discovery and dependency mapping phase, then define a migration wave plan — typically moving lower-risk workloads first. We use automated tooling for rehosting and rebuild critical services as cloud-native where it makes sense, targeting zero downtime.',
        ],
        [
            'q' => 'How do you ensure security in the cloud?',
            'a' => 'Security is built in from the start: least-privilege IAM policies, network segmentation with private subnets, encryption at rest and in transit, secrets management (AWS Secrets Manager / Vault), SIEM integration, and automated compliance scanning on every deployment.',
        ],
        [
            'q' => 'Can you help reduce our existing cloud spend?',
            'a' => 'Yes. Our FinOps reviews typically identify 20–40% in cost savings through rightsizing, reserved/spot instance strategies, storage tier optimisation, and eliminating orphaned resources — without any degradation in performance or reliability.',
        ],
        [
            'q' => 'Do you provide ongoing managed cloud support?',
            'a' => 'Yes. We offer retained managed cloud services covering infrastructure monitoring, incident response, patching, cost reporting, and quarterly architecture reviews — giving you a dedicated cloud team without the overhead of hiring one.',
        ],
    ],
    'process' => [
        ['step' => '01', 'title' => 'Assessment & Planning',      'desc' => 'We audit your current infrastructure, application dependencies, and compliance requirements to build a detailed cloud adoption or migration roadmap.'],
        ['step' => '02', 'title' => 'Architecture Design',        'desc' => 'We design a cloud-native, well-architected environment — VPCs, compute, storage, networking, IAM, and observability — defined entirely as code.'],
        ['step' => '03', 'title' => 'Build & Automate',           'desc' => 'Infrastructure is provisioned via Terraform, containerised workloads deployed on Kubernetes, and CI/CD pipelines wired up for automated, safe deployments.'],
        ['step' => '04', 'title' => 'Migrate & Validate',         'desc' => 'Workloads are migrated in planned waves with rollback capabilities, validated against performance, security, and functional acceptance criteria.'],
        ['step' => '05', 'title' => 'Operate & Optimise',         'desc' => 'Post-migration we monitor with full observability stacks, run FinOps reviews, apply security patches, and continuously improve reliability and efficiency.'],
    ],
    'featureTitle' => 'Cloud Services <span>Capabilities.</span>',
    'featureItems' => [
        ['icon' => 0, 'title' => 'Cloud Architecture & IaC',        'desc' => 'Well-Architected cloud environments provisioned entirely through Terraform and Pulumi — repeatable, auditable, and consistent across every environment.'],
        ['icon' => 1, 'title' => 'Containers & Kubernetes',          'desc' => 'Containerised application workloads orchestrated on EKS, GKE, or AKS — with Helm charts, auto-scaling, health checks, and GitOps deployment workflows.'],
        ['icon' => 2, 'title' => 'DevSecOps & CI/CD',                'desc' => 'Automated deployment pipelines with integrated SAST/DAST scanning, container image signing, and policy-as-code enforcement at every gate.'],
        ['icon' => 3, 'title' => 'FinOps & Cost Governance',         'desc' => 'Real-time cost visibility dashboards, tagging enforcement, rightsizing recommendations, and Savings Plan strategies that keep cloud spend predictable.'],
    ],
];
