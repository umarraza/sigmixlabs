<?php

return [
    'title'        => 'Data Analytics - Sigmix Labs',
    'breadcrumb'   => 'Data Analytics',
    'heading'      => 'Data <span>Analytics.</span>',
    'pageH1'       => 'Turn raw data into actionable intelligence — and actionable intelligence into measurable business growth.',
    'description'  => 'Data is only valuable when it drives decisions. Sigmix Labs helps organisations move beyond dashboards and reports to build real analytical capability — from data engineering pipelines and warehouse architecture to self-service BI platforms and predictive ML models. We work across the full data value chain: ingestion, transformation, modelling, visualisation, and automation. Whether you\'re starting from scratch or maturing an existing data function, we deliver the infrastructure and insight that make data a genuine competitive advantage.',
    'features' => [
        'Data Pipeline & ETL Engineering',
        'Data Warehouse & Lakehouse Design',
        'Business Intelligence & Dashboards',
        'Predictive Analytics & ML Models',
        'Real-Time Stream Processing',
        'Data Governance & Quality',
    ],
    'faq' => [
        [
            'q' => 'Where do you start if we have no data infrastructure?',
            'a' => 'We begin with a data audit — understanding your data sources, volumes, business questions, and maturity. From there we design a pragmatic roadmap: often starting with a centralised warehouse, core pipelines, and a single high-value dashboard before expanding.',
        ],
        [
            'q' => 'Which BI tools and data platforms do you work with?',
            'a' => 'We work across the major modern data stack components: dbt, Airflow, Snowflake, BigQuery, Redshift, Databricks, Power BI, Looker, Metabase, and Tableau — selecting the right combination for your scale, budget, and team\'s capabilities.',
        ],
        [
            'q' => 'Can you build custom machine learning models for our use case?',
            'a' => 'Yes. We build and deploy supervised and unsupervised ML models — churn prediction, demand forecasting, anomaly detection, recommendations — using Python (scikit-learn, XGBoost, PyTorch) and MLOps pipelines for monitoring and retraining.',
        ],
        [
            'q' => 'How do you ensure data quality and governance?',
            'a' => 'We implement data quality checks in the pipeline (dbt tests, Great Expectations), establish a data catalogue, define data ownership, and set up alerting for anomalies — giving your team confidence in every number.',
        ],
        [
            'q' => 'How long before we see value from a data analytics engagement?',
            'a' => 'Typically 2–4 weeks for first dashboards on clean data; 6–10 weeks for a full modern data stack deployment. Predictive models vary by data readiness, but we prioritise fast wins alongside longer-term capability building.',
        ],
    ],
    'process' => [
        ['step' => '01', 'title' => 'Data Discovery & Audit',    'desc' => 'We map your data sources, assess quality, understand business questions, and identify the highest-value analytical use cases to tackle first.'],
        ['step' => '02', 'title' => 'Architecture & Design',     'desc' => 'We design a scalable data architecture — warehouse schema, ingestion patterns, transformation layers, and access controls — tailored to your stack.'],
        ['step' => '03', 'title' => 'Pipeline & Model Build',    'desc' => 'Our engineers build reliable ELT pipelines, dbt data models, and where required, ML models — all with automated testing and monitoring.'],
        ['step' => '04', 'title' => 'Visualisation & Delivery',  'desc' => 'We create clear, self-service dashboards and reports that put the right metrics in front of the right stakeholders — no data team dependency.'],
        ['step' => '05', 'title' => 'Optimise & Scale',          'desc' => 'Post-launch we monitor pipeline health, query performance, and model drift — iterating to keep your data platform fast, accurate, and growing.'],
    ],
    'featureTitle' => 'Data Analytics <span>Capabilities.</span>',
    'featureItems' => [
        ['icon' => 0, 'title' => 'Data Engineering & Pipelines',    'desc' => 'Robust, monitored ELT/ETL pipelines that reliably move, transform, and land data from every source into a clean, queryable warehouse layer.'],
        ['icon' => 1, 'title' => 'BI Platforms & Dashboards',       'desc' => 'Self-service dashboards and automated reports in Power BI, Looker, or Metabase — giving every team direct access to the metrics they need.'],
        ['icon' => 2, 'title' => 'Predictive Analytics & ML',       'desc' => 'Production-grade machine learning models for forecasting, scoring, and classification — with MLOps monitoring to keep them accurate over time.'],
        ['icon' => 3, 'title' => 'Data Governance & Quality',       'desc' => 'Automated data quality checks, lineage tracking, cataloguing, and ownership frameworks so your organisation can trust every data point.'],
    ],
    'toolsTitle' => 'Our Data <span>Technology Stack.</span>',
    'tools' => [
        ['icon' => 'python-icon.svg',     'name' => 'Python'],
        ['icon' => 'mysql-icon.svg',      'name' => 'SQL / MySQL'],
        ['icon' => 'typescript-icon.svg', 'name' => 'TypeScript'],
        ['icon' => 'aws-icon.svg',        'name' => 'AWS'],
        ['icon' => 'docker-icon.svg',     'name' => 'Docker'],
        ['icon' => 'gitlab-icon.svg',     'name' => 'GitLab CI'],
    ],
];
