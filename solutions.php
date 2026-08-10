<?php
$page_title = 'Solutions';
$page_description = 'Prepaid water, electricity, gas and airtime vending from Reliable Vending Solutions — one STS-compliant platform for every utility.';
$hide_cta_band = true; // page already ends with its own "Get Last Tokens" CTA
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
    <div class="solution-modal-panel solution-modal-panel-image" role="dialog" aria-modal="true" aria-labelledby="modal-water-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <h2 id="modal-water-title" class="sr-only">Water — features &amp; platform capabilities</h2>
        <img src="/assets/images/solution-water.png" alt="Water: prepaid water tokens for households, estates and municipalities, dispensed instantly and securely. STS Compliance: fully STS compliant token generation and delivery. Meter Compatibility: freedom to choose your preferred hardware supplier, compatible with Lesira, SH Meters, Conlog, Honeywell and Liaison. What's Included: no hassles around technology upgrades, TID rollover or licence costs.">
    </div>
</div>

<div class="solution-modal" id="modal-electricity" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel solution-modal-panel-image" role="dialog" aria-modal="true" aria-labelledby="modal-electricity-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <h2 id="modal-electricity-title" class="sr-only">Electricity — features &amp; platform capabilities</h2>
        <img src="/assets/images/solution-electricity.png" alt="Electricity: STS-compliant electricity tokens delivered in real time across every vending channel. Payment Methods: Orange Money, MyZaka, BancABC, Standard Bank, Stanbic, cash via agents. Vending Channels: online portal, mobile app, agent network or USSD. Token Delivery: SMS, printed receipt or in-app notification. What's Included: ability to integrate with your payment and distribution networks.">
    </div>
</div>

<div class="solution-modal" id="modal-gas" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel solution-modal-panel-image" role="dialog" aria-modal="true" aria-labelledby="modal-gas-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <h2 id="modal-gas-title" class="sr-only">Gas — features &amp; platform capabilities</h2>
        <img src="/assets/images/solution-gas.png" alt="Gas: prepaid gas tokens for residential and commercial customers, vended the same reliable way. Meter and Account Management: complete meter lifecycle inventory, configuration and status monitoring. Tariff Management: flexible tariff structures, pricing plans and automatic updates. Customer Management: customer lifecycle management, arrears control and credit management. What's Included: meter-independent design, so you can choose your preferred meter suppliers without changing vending systems.">
    </div>
</div>

<div class="solution-modal" id="modal-airtime" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel solution-modal-panel-image" role="dialog" aria-modal="true" aria-labelledby="modal-airtime-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <h2 id="modal-airtime-title" class="sr-only">Airtime — features &amp; platform capabilities</h2>
        <img src="/assets/images/solution-airtime.png" alt="Airtime: mobile airtime top-ups alongside your utility tokens, all through one platform. Analytics & Reporting: real-time dashboards, reports and insights for operational excellence. API & Partner Integration: secure integration with payment, banking, mobile-money and distribution networks. Bulk & Corporate Vending: multi-site purchasing, controlled distribution and dedicated support. What's Included: configurable to support many independent utilities, each with its own access and management interface.">
    </div>
</div>

<section class="section section-alt">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Corporate &amp; Bulk Vending</span>
            <h2>Built for organisations managing utilities at scale</h2>
            <p class="text-grey">Our corporate solutions enable businesses and institutions to purchase, distribute and manage prepaid electricity tokens with ease, while maintaining full compliance with industry standards.</p>
        </div>
        <div class="card-scroll-wrap">
            <button type="button" class="card-scroll-nav card-scroll-prev" data-scroll-prev aria-label="Scroll left">
                <?= icon('chevron-left') ?>
            </button>
            <div class="card-scroll" data-card-scroll data-reveal-stagger>
                <div class="card" data-reveal>
                    <div class="card-header-row">
                        <div class="icon-badge"><?= icon('building') ?></div>
                        <h3>Property Management Companies</h3>
                    </div>
                    <p>Managing prepaid electricity services for residential estates, apartment complexes and rental properties.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="card-header-row">
                        <div class="icon-badge"><?= icon('landmark') ?></div>
                        <h3>Government Institutions</h3>
                    </div>
                    <p>Supporting utility management requirements for government offices, staff housing and public facilities.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="card-header-row">
                        <div class="icon-badge"><?= icon('graduation-cap') ?></div>
                        <h3>Educational Institutions</h3>
                    </div>
                    <p>Providing prepaid utility solutions for student residences, hostels and campus facilities.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="card-header-row">
                        <div class="icon-badge"><?= icon('bed') ?></div>
                        <h3>Hospitality Industry</h3>
                    </div>
                    <p>Serving hotels, lodges, guesthouses and accommodation facilities with convenient prepaid utility services.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="card-header-row">
                        <div class="icon-badge"><?= icon('briefcase') ?></div>
                        <h3>Corporate Businesses</h3>
                    </div>
                    <p>Enabling businesses to manage employee housing, branch operations and utility consumption across multiple locations.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="card-header-row">
                        <div class="icon-badge"><?= icon('home-modern') ?></div>
                        <h3>Residential Developments</h3>
                    </div>
                    <p>Supporting developers and body corporates with prepaid utility solutions for gated communities and housing projects.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="card-header-row">
                        <div class="icon-badge"><?= icon('hard-hat') ?></div>
                        <h3>Mining and Industrial Operations</h3>
                    </div>
                    <p>Facilitating utility management for workforce accommodation, camps and operational facilities.</p>
                </div>
            </div>
            <button type="button" class="card-scroll-nav card-scroll-next" data-scroll-next aria-label="Scroll right">
                <?= icon('chevron-right') ?>
            </button>
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

<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <span class="eyebrow">Get Last Tokens</span>
            <h2>Already a customer?</h2>
            <p>Retrieve your last purchased tokens directly from the vending portal at any time.</p>
        </div>
        <div class="cta-band-actions">
            <a class="btn btn-primary" href="https://wuc.wi360.net/login.php?go=logout" target="_blank" rel="noopener">Last Tokens</a>
        </div>
    </div>
</section>

<script src="/assets/js/card-scroll.js"></script>
<script src="/assets/js/solution-modal.js"></script>

<?php require __DIR__ . '/includes/footer.php'; ?>
