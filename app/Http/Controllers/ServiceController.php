<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

class ServiceController extends Controller
{
    private array $services = [
        [
            'title' => 'IT Infrastructure',
            'slug' => 'it-infrastructure',
            'bg' => '#E8F1FF',
            'img' => 'it.png',
            'description' => 'Robust, scalable, and secure IT infrastructure setup and support.',
            'details' => [
                'overview' => 'Our IT Infrastructure services ensure your business technology foundation is strong, reliable, and future-proof. We specialize in designing and implementing enterprise-grade networks and systems, tailored to support your unique organizational needs while maintaining high availability and security.',

                'features' => [
                    [
                        'title' => 'Advanced network architecture',
                        'description' => 'Tailored networking solutions with segmentation and security zones.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Virtualization & hardware',
                        'description' => 'Modern virtual environments powered by high-performance hardware.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Business continuity planning',
                        'description' => 'Redundancy, backups, and DR strategies to protect your operations.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Automated monitoring systems',
                        'description' => 'Real-time performance alerts and issue detection using AI-powered tools.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Hybrid & multi-cloud support',
                        'description' => 'Seamlessly operate across public, private, or hybrid cloud environments.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                ],

                'benefits' => 'Ensure smooth business operations with minimized downtime, optimal system performance, enhanced security posture, and reduced total cost of ownership through effective resource management. Benefit from scalable architecture, centralized management, and rapid disaster recovery implementations that safeguard business continuity.',

                'use_cases' => [
                    'Scaling IT infrastructure for growing enterprises',
                    'Migrating legacy systems to modern platforms',
                    'Implementing secure remote work environments',
                    'Setting up disaster recovery and backup systems',
                    'Integrating cloud-native DevOps pipelines',
                ],

                'faq' => [
                    [
                        'question' => 'Does your infrastructure support IPv6?',
                        'answer' => 'Yes, we support both IPv4 and IPv6 protocols to ensure compatibility across modern and legacy networks.',
                    ],
                    [
                        'question' => 'Can I migrate from on-premise to cloud with your help?',
                        'answer' => 'Absolutely. We provide end-to-end migration services with minimal downtime and complete data integrity.',
                    ],
                    [
                        'question' => 'Which cloud providers do you work with?',
                        'answer' => 'We support AWS, Azure, Google Cloud, and custom private cloud solutions.',
                    ],
                    [
                        'question' => 'Do you offer 24/7 infrastructure monitoring?',
                        'answer' => 'Yes, our advanced monitoring systems provide 24/7 alerts, uptime tracking, and proactive issue resolution.',
                    ],
                    [
                        'question' => 'How do you handle disaster recovery?',
                        'answer' => 'We implement multi-site backups, offsite storage, and failover systems to enable rapid disaster recovery and business continuity.',
                    ],
                    [
                        'question' => 'Can you support remote workforce infrastructure?',
                        'answer' => 'Yes, we offer secure VPN, remote desktop, and identity access management systems tailored for remote operations.',
                    ],
                ],
            ],
        ],
        [
            'title' => 'Blockchain Integration',
            'slug' => 'blockchain-integration',
            'bg' => '#E8F7FF',
            'img' => 'blockchain.png',
            'description' => 'Seamlessly integrate blockchain solutions into your business.',
            'details' => [
                'overview' => 'We help your business harness the power of blockchain technology to enhance transparency, reduce fraud, and create decentralized, tamper-proof transaction systems that improve trust and efficiency.',
                'features' => [
                    [
                        'title' => 'Development of public and private blockchains',
                        'description' => 'Build tailored blockchain solutions either public or permissioned for your needs.',
                        'icon' => 'icon1.svg',
                        'shape' => 'shape-geom1.svg',
                    ],
                    [
                        'title' => 'Custom smart contract creation and auditing',
                        'description' => 'Develop and audit contracts to guarantee security and correct functionality.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Integration with existing ERP and supply chain systems',
                        'description' => 'Seamlessly connect blockchain with your current business frameworks.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Tokenization and crypto asset management',
                        'description' => 'Issue tokens and manage crypto assets securely and transparently.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Consensus algorithm design (PoW, PoS, etc.)',
                        'description' => 'Design efficient consensus mechanisms tailored to your project’s needs.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                ],
                'benefits' => 'Enhance operational transparency, improve data integrity, automate complex contractual agreements, and lower transaction costs.',
                'use_cases' => [
                    'Supply chain provenance and verification',
                    'Decentralized finance (DeFi) applications',
                    'Intellectual property tracking and licensing',
                ],
                'technical_specs' => [
                    'Supports Ethereum, Hyperledger, and other platforms',
                    'Implements secure cryptographic protocols',
                    'Integrates with RESTful APIs and web services',
                ],
            ],
        ],
        [
            'title' => 'Crypto Consultation',
            'slug' => 'crypto-consultation',
            'bg' => '#D9F2FF',
            'img' => 'crypto.png',
            'description' => 'Expert advice on crypto adoption, investment, and security.',
            'details' => [
                'overview' => 'Navigate the complex world of cryptocurrencies with confidence and expert guidance, including investment advisory, regulatory compliance, and risk mitigation strategies.',
                'features' => [
                    [
                        'title' => 'Comprehensive market research and trend analysis',
                        'description' => 'In-depth analysis of market trends and opportunities.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Risk assessment and portfolio management advice',
                        'description' => 'Tailored advice to manage crypto portfolio risks effectively.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Education on legal and tax implications globally',
                        'description' => 'Stay compliant with up-to-date legal and regulatory info.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1-circle.svg',
                    ],
                    [
                        'title' => 'Security best practices for wallets and exchanges',
                        'description' => 'Protect your digital assets with our security guidelines.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'ICO/STO and token launch support',
                        'description' => 'Guidance on raising capital through tokens and ICOs.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                ],
                'benefits' => 'Maximize returns, avoid pitfalls, ensure compliance, and secure digital assets.',
                'use_cases' => [
                    'Launching a new crypto token or ICO',
                    'Investing safely in volatile markets',
                    'Ensuring compliance with international regulations',
                ],
                'technical_specs' => [
                    'Expertise in blockchain protocols and crypto wallets',
                    'Knowledge of global AML/KYC standards',
                    'Understanding of smart contract vulnerabilities',
                ],
            ],
        ],
        [
            'title' => 'Digital Transformation',
            'slug' => 'digital-transformation',
            'bg' => '#E2F3FB',
            'img' => 'digital.png',
            'description' => 'Redefine your operations with modern digital technologies.',
            'details' => [
                'overview' => 'Empower your business by embracing transformative digital technologies that enhance agility, customer experience, and operational efficiency.',
                'features' => [
                    [
                        'title' => 'Business process automation and workflow optimization',
                        'description' => 'Streamline workflows for higher efficiency.',
                        'icon' => 'icon1.svg',
                        'shape' => 'icon1.svg',
                    ],
                    [
                        'title' => 'Cloud migration and hybrid-cloud solutions',
                        'description' => 'Effectively migrate and integrate cloud infrastructures.',
                        'icon' => 'icon-digital2.svg',
                        'shape' => 'shape-dots.svg',
                    ],
                    [
                        'title' => 'Data analytics and insightful dashboarding',
                        'description' => 'Leverage analytics for smarter business decisions.',
                        'icon' => 'icon-digital3.svg',
                        'shape' => 'shape-quarter-circle.svg',
                    ],
                    [
                        'title' => 'AI and machine learning integration',
                        'description' => 'Implement AI to automate and innovate.',
                        'icon' => 'icon-digital4.svg',
                        'shape' => 'shape-triangle.svg',
                    ],
                    [
                        'title' => 'Employee upskilling and change management',
                        'description' => 'Ensure smooth digital transition with trained teams.',
                        'icon' => 'icon-digital5.svg',
                        'shape' => 'shape-zigzag.svg',
                    ],
                ],
                'benefits' => 'Boost productivity, accelerate innovation, and improve decision-making accuracy across all business functions.',
                'use_cases' => [
                    'Replacing legacy systems with modern apps',
                    'Integrating data-driven insights into operations',
                    'Adopting AI for customer service automation',
                ],
                'technical_specs' => [
                    'Supports SaaS, PaaS, and IaaS cloud models',
                    'API-first integration approach',
                    'Compliant with GDPR, HIPAA, and other regulations',
                ],
            ],
        ],
        [
            'title' => 'Cybersecurity Solutions',
            'slug' => 'cybersecurity-solutions',
            'bg' => '#EAF8FF',
            'img' => 'cyber.png',
            'description' => 'Protect your data and systems with cutting-edge security solutions.',
            'details' => [
                'overview' => 'Comprehensive cybersecurity services designed to secure your assets, detect threats early, and respond quickly minimizing damage.',
                'features' => [
                    [
                        'title' => 'Continuous network and application monitoring',
                        'description' => '24/7 monitoring to catch threats early.',
                        'icon' => 'icon-cyber1.svg',
                        'shape' => 'shape-geom1.svg',
                    ],
                    [
                        'title' => 'Advanced threat detection and incident response',
                        'description' => 'State-of-the-art detection with rapid action plans.',
                        'icon' => 'icon-cyber2.svg',
                        'shape' => 'shape-dots.svg',
                    ],
                    [
                        'title' => 'Endpoint protection and patch management',
                        'description' => 'Protect devices and keep software up-to-date.',
                        'icon' => 'icon-cyber3.svg',
                        'shape' => 'shape-quarter-circle.svg',
                    ],
                    [
                        'title' => 'Identity and access management (IAM)',
                        'description' => 'Control and authenticate user access securely.',
                        'icon' => 'icon-cyber4.svg',
                        'shape' => 'shape-triangle.svg',
                    ],
                    [
                        'title' => 'Security training and awareness programs',
                        'description' => 'Educate your workforce to reduce risks.',
                        'icon' => 'icon-cyber5.svg',
                        'shape' => 'shape-zigzag.svg',
                    ],
                ],
                'benefits' => 'Reduce vulnerability to attacks, protect sensitive data, ensure regulatory compliance, and maintain customer trust.',
                'use_cases' => [
                    'Securing e-commerce platforms',
                    'Protecting intellectual property',
                    'Mitigating ransomware threats',
                ],
                'technical_specs' => [
                    'Utilizes SIEM and SOAR technologies',
                    'Implements zero-trust security model',
                    'Supports multi-factor authentication (MFA)',
                ],
            ],
        ],
        [
            'title' => 'Cloud Services',
            'slug' => 'cloud-services',
            'bg' => '#E8F8FB',
            'img' => 'cloud.png',
            'description' => 'Scalable and secure cloud architecture tailored to your needs.',
            'details' => [
                'overview' => 'Deliver scalable, reliable, and secure cloud solutions customized to your organizational goals, leveraging leading cloud providers.',
                'features' => [
                    [
                        'title' => 'Cloud strategy and planning',
                        'description' => 'Develop guiding strategies for cloud adoption.',
                        'icon' => 'icon-cloud1.svg',
                        'shape' => 'shape-geom1.svg',
                    ],
                    [
                        'title' => 'Public, private, and hybrid cloud deployments',
                        'description' => 'Tailored deployment models for any business.',
                        'icon' => 'icon-cloud2.svg',
                        'shape' => 'shape-dots.svg',
                    ],
                    [
                        'title' => 'Automated scaling and load balancing',
                        'description' => 'Ensure performance with dynamic scaling.',
                        'icon' => 'icon-cloud3.svg',
                        'shape' => 'shape-quarter-circle.svg',
                    ],
                    [
                        'title' => '24/7 managed cloud support',
                        'description' => 'Round-the-clock support from cloud experts.',
                        'icon' => 'icon-cloud4.svg',
                        'shape' => 'shape-triangle.svg',
                    ],
                    [
                        'title' => 'Security and compliance audits',
                        'description' => 'Regular audits to meet regulatory standards.',
                        'icon' => 'icon-cloud5.svg',
                        'shape' => 'shape-zigzag.svg',
                    ],
                ],
                'benefits' => 'Reduce infrastructure costs, improve operational efficiency, and ensure business continuity with cloud agility.',
                'use_cases' => [
                    'Migrating workloads to cloud',
                    'Ensuring cloud security and compliance',
                    'Building disaster recovery environments',
                ],
                'technical_specs' => [
                    'Compatible with AWS, Azure, Google Cloud, and more',
                    'Compliance with ISO 27001, SOC 2, and PCI DSS',
                    'Automated backup and restore solutions',
                ],
            ],
        ],
    ];

    /**
     * Display a listing of services.
     */
    public function index()
    {
        return view('pages.services.index', ['services' => $this->services]);
    }

    /**
     * Display a specific service detail page by slug.
     */
    public function show($slug)
    {
        $service = collect($this->services)->firstWhere('slug', $slug);

        abort_if(!$service, 404);

        return view('pages.services.show', compact('service'));
    }
}
