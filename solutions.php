<?php
$page_title = 'Solutions';
$page_description = 'Prepaid water, electricity, gas and airtime vending from Reliable Vending Solutions — one STS-compliant platform for every utility.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Solutions</span>
        <h1>Everything you need to run prepaid vending, in one platform</h1>
        <p>Secure real-time token generation, vending and distribution of STS-compliant prepaid tokens across every channel your customers use.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Main Solutions</span>
            <h2>What we vend</h2>
        </div>
        <p class="text-grey solutions-intro">Open a solution to explore its own features and platform capabilities.</p>
        <div class="card-grid card-grid-simple" data-reveal-stagger>
            <button type="button" class="card card-solution" data-reveal data-modal-target="modal-water">
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('droplet') ?></div>
                    <h3>Water</h3>
                </div>
                <p>Prepaid water tokens for households, estates and municipalities, dispensed instantly and securely.</p>
                <span class="card-solution-cta">Explore features &amp; capabilities <?= icon('trending-up') ?></span>
            </button>
            <button type="button" class="card card-solution" data-reveal data-modal-target="modal-electricity">
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('bolt') ?></div>
                    <h3>Electricity</h3>
                </div>
                <p>STS-compliant electricity tokens delivered in real time across every vending channel.</p>
                <span class="card-solution-cta">Explore features &amp; capabilities <?= icon('trending-up') ?></span>
            </button>
            <button type="button" class="card card-solution" data-reveal data-modal-target="modal-gas">
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('flame') ?></div>
                    <h3>Gas</h3>
                </div>
                <p>Prepaid gas tokens for residential and commercial customers, vended the same reliable way.</p>
                <span class="card-solution-cta">Explore features &amp; capabilities <?= icon('trending-up') ?></span>
            </button>
            <button type="button" class="card card-solution" data-reveal data-modal-target="modal-airtime">
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('signal') ?></div>
                    <h3>Airtime</h3>
                </div>
                <p>Mobile airtime top-ups alongside your utility tokens, all through one platform.</p>
                <span class="card-solution-cta">Explore features &amp; capabilities <?= icon('trending-up') ?></span>
            </button>
        </div>
    </div>
</section>

<!--
    Four separate modals, one per solution, each showing a distinct,
    non-overlapping set of features/capabilities — nothing repeats across
    solutions, so opening a second or third solution still tells you
    something new rather than re-reading the same list.
-->
<div class="solution-modal" id="modal-water" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel" role="dialog" aria-modal="true" aria-labelledby="modal-water-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <div class="solution-modal-header">
            <span class="eyebrow">Water</span>
            <h2 id="modal-water-title">Features &amp; platform capabilities</h2>
            <p class="text-grey">Everything included when you vend prepaid water tokens.</p>
        </div>

        <div class="card-grid card-grid-simple" data-reveal-stagger>
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('badge-check') ?></div>
                    <h3>STS Compliance</h3>
                </div>
                <p>Fully STS (Standard Transfer Specification) compliant token generation and delivery.</p>
            </div>
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('gauge') ?></div>
                    <h3>Meter Compatibility</h3>
                </div>
                <p>Freedom to choose your preferred hardware supplier — no lock-in, ever.</p>
                <div class="brand-strip">
                    <img src="/assets/images/partner-lesira.png" alt="Lesira">
                    <img src="/assets/images/partner-sh-meters.webp" alt="SH Meters">
                    <img src="/assets/images/partner-conlog.svg" alt="Conlog">
                    <img src="/assets/images/partner-honeywell.png" alt="Honeywell">
                    <img src="/assets/images/partner-laison.png" alt="Liaison">
                </div>
            </div>
        </div>

        <div class="highlight-panel" data-reveal>
            <div class="highlight-panel-header">
                <h3>What's Included</h3>
            </div>
            <div class="highlight-grid highlight-grid-single">
                <div class="highlight-item">
                    <div class="highlight-item-icon"><?= icon('check') ?></div>
                    <p>No hassles around technology upgrades, TID rollover or licence costs — these are taken care of for you.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="solution-modal" id="modal-electricity" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel" role="dialog" aria-modal="true" aria-labelledby="modal-electricity-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <div class="solution-modal-header">
            <span class="eyebrow">Electricity</span>
            <h2 id="modal-electricity-title">Features &amp; platform capabilities</h2>
            <p class="text-grey">Everything included when you vend prepaid electricity tokens.</p>
        </div>

        <div class="card-grid card-grid-simple" data-reveal-stagger>
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('tag') ?></div>
                    <h3>Payment Methods</h3>
                </div>
                <div class="pill-row">
                    <span class="pill">Orange Money</span>
                    <span class="pill">MyZaka</span>
                    <span class="pill">BancABC</span>
                    <span class="pill">Standard Bank</span>
                    <span class="pill">Stanbic</span>
                    <span class="pill">Cash via agents</span>
                </div>
            </div>
            <div class="card-stack">
                <div class="card" data-reveal>
                    <div class="card-header-row">
                        <div class="icon-badge"><?= icon('devices') ?></div>
                        <h3>Vending Channels</h3>
                    </div>
                    <p>Online portal, mobile app, agent network and USSD.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="card-header-row">
                        <div class="icon-badge"><?= icon('mail') ?></div>
                        <h3>Token Delivery</h3>
                    </div>
                    <p>SMS, printed receipt or in-app notification.</p>
                </div>
            </div>
        </div>

        <div class="highlight-panel" data-reveal>
            <div class="highlight-panel-header">
                <h3>What's Included</h3>
            </div>
            <div class="highlight-grid highlight-grid-single">
                <div class="highlight-item">
                    <div class="highlight-item-icon"><?= icon('check') ?></div>
                    <p>Ability to integrate with payment and distribution networks.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="solution-modal" id="modal-gas" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel" role="dialog" aria-modal="true" aria-labelledby="modal-gas-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <div class="solution-modal-header">
            <span class="eyebrow">Gas</span>
            <h2 id="modal-gas-title">Features &amp; platform capabilities</h2>
            <p class="text-grey">Everything included when you vend prepaid gas tokens.</p>
        </div>

        <div class="card-grid card-grid-simple" data-reveal-stagger>
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('gauge') ?></div>
                    <h3>Meter and Account Management</h3>
                </div>
                <p>Complete meter lifecycle inventory, configuration and status monitoring.</p>
            </div>
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('tag') ?></div>
                    <h3>Tariff Management</h3>
                </div>
                <p>Flexible tariff structures, pricing plans and automatic updates.</p>
            </div>
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('users') ?></div>
                    <h3>Customer Management</h3>
                </div>
                <p>Customer lifecycle management, arrears control and credit management.</p>
            </div>
        </div>

        <div class="highlight-panel" data-reveal>
            <div class="highlight-panel-header">
                <h3>What's Included</h3>
            </div>
            <div class="highlight-grid highlight-grid-single">
                <div class="highlight-item">
                    <div class="highlight-item-icon"><?= icon('check') ?></div>
                    <p>Meter-independent design, so you can choose your preferred meter suppliers without changing vending systems.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="solution-modal" id="modal-airtime" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel" role="dialog" aria-modal="true" aria-labelledby="modal-airtime-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <div class="solution-modal-header">
            <span class="eyebrow">Airtime</span>
            <h2 id="modal-airtime-title">Features &amp; platform capabilities</h2>
            <p class="text-grey">Everything included when you vend prepaid airtime — no physical meter required.</p>
        </div>

        <div class="card-grid card-grid-simple" data-reveal-stagger>
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('bar-chart') ?></div>
                    <h3>Analytics &amp; Reporting</h3>
                </div>
                <p>Real-time dashboards, reports and insights for operational excellence.</p>
            </div>
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('link') ?></div>
                    <h3>API &amp; Partner Integration</h3>
                </div>
                <p>Secure integration with payment, banking, mobile-money and distribution networks.</p>
            </div>
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('building') ?></div>
                    <h3>Bulk &amp; Corporate Vending</h3>
                </div>
                <p>Multi-site purchasing, controlled distribution and dedicated support.</p>
            </div>
        </div>

        <div class="highlight-panel" data-reveal>
            <div class="highlight-panel-header">
                <h3>What's Included</h3>
            </div>
            <div class="highlight-grid highlight-grid-single">
                <div class="highlight-item">
                    <div class="highlight-item-icon"><?= icon('check') ?></div>
                    <p>Configurable to support many independent utilities, each with its own access and management interface.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section section-alt">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Corporate &amp; Bulk Vending</span>
            <h2>Built for organisations managing utilities at scale</h2>
            <p class="text-grey">Our corporate solutions enable businesses and institutions to purchase, distribute and manage prepaid electricity tokens with ease, while maintaining full compliance with industry standards.</p>
        </div>
        <div class="card-grid" data-reveal-stagger>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('building') ?></div>
                <h3>Property Management Companies</h3>
                <p>Managing prepaid electricity services for residential estates, apartment complexes and rental properties.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('landmark') ?></div>
                <h3>Government Institutions</h3>
                <p>Supporting utility management requirements for government offices, staff housing and public facilities.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('graduation-cap') ?></div>
                <h3>Educational Institutions</h3>
                <p>Providing prepaid utility solutions for student residences, hostels and campus facilities.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('bed') ?></div>
                <h3>Hospitality Industry</h3>
                <p>Serving hotels, lodges, guesthouses and accommodation facilities with convenient prepaid utility services.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('briefcase') ?></div>
                <h3>Corporate Businesses</h3>
                <p>Enabling businesses to manage employee housing, branch operations and utility consumption across multiple locations.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('home-modern') ?></div>
                <h3>Residential Developments</h3>
                <p>Supporting developers and body corporates with prepaid utility solutions for gated communities and housing projects.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('hard-hat') ?></div>
                <h3>Mining and Industrial Operations</h3>
                <p>Facilitating utility management for workforce accommodation, camps and operational facilities.</p>
            </div>
        </div>

        <ul class="check-list check-list-2col check-list-spaced" data-reveal>
            <li>Secure, STS-compliant services</li>
            <li>Fast and reliable token delivery</li>
            <li>Corporate and bulk purchase capability</li>
            <li>Dedicated customer support</li>
            <li>Multi-site utility management</li>
            <li>Transparent reporting and records</li>
            <li>Scalable solutions for growing organisations</li>
            <li>Professional, reliable service delivery</li>
        </ul>

        <div class="highlight-cta" data-reveal>
            <a class="btn btn-primary" href="/contact.php">Request Corporate Demo</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-form-card contact-form-card-wide highlight-cta-card" data-reveal>
            <span class="eyebrow">Get Last Tokens</span>
            <h2>Already a customer?</h2>
            <p class="text-grey">Retrieve your last purchased tokens directly from the vending portal at any time.</p>
            <a class="btn btn-primary" href="https://wuc.wi360.net/login.php?go=logout" target="_blank" rel="noopener">Last Tokens</a>
        </div>
    </div>
</section>

<script src="/assets/js/solution-modal.js"></script>

<?php require __DIR__ . '/includes/footer.php'; ?>
