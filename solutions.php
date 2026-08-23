<?php
$page_title = 'Solutions';
$page_description = 'Prepaid water, electricity, gas and time-based token vending from Reliable Vending Solutions — one STS-compliant platform for every utility.';
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
            <button type="button" class="card card-solution card-solution-media" data-reveal data-modal-target="modal-water">
                <img class="card-solution-bg" src="/assets/images/solution-water-meter-laison.jpg" alt="">
                <div class="card-solution-scrim"></div>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('droplet') ?></div>
                    <h3>Water</h3>
                </div>
                <div class="card-solution-reveal">
                    <div>
                        <p>Prepaid water tokens for households, estates and municipalities, dispensed instantly and securely.</p>
                        <span class="card-solution-cta">Explore more <?= icon('trending-up') ?></span>
                    </div>
                </div>
            </button>
            <button type="button" class="card card-solution card-solution-media" data-reveal data-modal-target="modal-electricity">
                <img class="card-solution-bg" src="/assets/images/solution-electricity-customer.jpg" alt="">
                <div class="card-solution-scrim"></div>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('bolt') ?></div>
                    <h3>Electricity</h3>
                </div>
                <div class="card-solution-reveal">
                    <div>
                        <p>STS-compliant electricity tokens delivered in real time across every vending channel.</p>
                        <span class="card-solution-cta">Explore more <?= icon('trending-up') ?></span>
                    </div>
                </div>
            </button>
            <button type="button" class="card card-solution card-solution-media" data-reveal data-modal-target="modal-gas">
                <img class="card-solution-bg" src="/assets/images/solution-gas-meter-secure.jpg" alt="">
                <div class="card-solution-scrim"></div>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('flame') ?></div>
                    <h3>Gas</h3>
                </div>
                <div class="card-solution-reveal">
                    <div>
                        <p>Prepaid gas tokens for residential and commercial customers, vended the same reliable way.</p>
                        <span class="card-solution-cta">Explore more <?= icon('trending-up') ?></span>
                    </div>
                </div>
            </button>
            <button type="button" class="card card-solution card-solution-media" data-reveal data-modal-target="modal-time">
                <img class="card-solution-bg" src="/assets/images/solution-time-box-laundry.jpg" alt="">
                <div class="card-solution-scrim"></div>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('clock') ?></div>
                    <h3>Time</h3>
                </div>
                <div class="card-solution-reveal">
                    <div>
                        <p>Token-activated timers for shared equipment — pay only for the time you use.</p>
                        <span class="card-solution-cta">Explore more <?= icon('trending-up') ?></span>
                    </div>
                </div>
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
    <div class="solution-modal-panel solution-modal-panel-split" role="dialog" aria-modal="true" aria-labelledby="modal-water-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <div class="solution-modal-content">
            <span class="eyebrow">Water</span>
            <h2 id="modal-water-title">Prepaid water tokens, dispensed instantly and securely</h2>
            <p class="text-grey">Water tokens for households, estates and municipalities — generated and delivered the moment payment clears.</p>
            <ul class="solution-modal-features">
                <li><strong>STS Compliance</strong> — fully STS-compliant token generation and delivery, every time.</li>
                <li><strong>Meter Compatibility</strong> — freedom to choose your preferred hardware supplier, compatible with Lesira, SH Meters, Conlog, Honeywell and Liaison.</li>
                <li><strong>What's Included</strong> — no hassles around technology upgrades, TID rollover or licence costs.</li>
            </ul>
        </div>
        <div class="solution-modal-media-grid">
            <img src="/assets/images/solution-water-meter-laison.jpg" alt="Laison prepaid smart water meter (LoRa) with its wireless keypad token reader">
            <img src="/assets/images/solution-water-meter-lesira.jpg" alt="Lesira prepaid water meter keypad token reader (KP CIU)">
            <img src="/assets/images/solution-water-meter-shmeters.jpg" alt="SH Meters prepaid water meter and keypad token reader">
        </div>
    </div>
</div>

<div class="solution-modal" id="modal-electricity" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel solution-modal-panel-split" role="dialog" aria-modal="true" aria-labelledby="modal-electricity-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <div class="solution-modal-content">
            <span class="eyebrow">Electricity</span>
            <h2 id="modal-electricity-title">STS-compliant electricity tokens, delivered in real time</h2>
            <p class="text-grey">Electricity tokens delivered in real time across every vending channel, straight to the meter.</p>
            <ul class="solution-modal-features">
                <li><strong>Payment Methods</strong> — Orange Money, MyZaka, BancABC, Standard Bank, Stanbic, cash via agents.</li>
                <li><strong>Vending Channels</strong> — online portal, mobile app, agent network or USSD.</li>
                <li><strong>Token Delivery</strong> — SMS, printed receipt or in-app notification.</li>
                <li><strong>What's Included</strong> — ability to integrate with your payment and distribution networks.</li>
            </ul>
        </div>
        <div class="solution-modal-media-grid">
            <img class="solution-media-photo" src="/assets/images/solution-electricity-customer.jpg" alt="Customer entering a prepaid electricity token into a wall-mounted meter">
            <img src="/assets/images/solution-electricity-meter-hexing.jpg" alt="Hexing HXE115-KP prepaid electricity meter with keypad token entry">
            <img src="/assets/images/solution-electricity-meter-conlog.jpg" alt="Conlog BEC62 prepaid electricity meter and UIU keypad token reader">
        </div>
    </div>
</div>

<div class="solution-modal" id="modal-gas" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel solution-modal-panel-split" role="dialog" aria-modal="true" aria-labelledby="modal-gas-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <div class="solution-modal-content">
            <span class="eyebrow">Gas</span>
            <h2 id="modal-gas-title">Prepaid gas tokens, vended the same reliable way</h2>
            <p class="text-grey">Gas tokens for residential and commercial customers — vended through the same reliable platform as every other utility.</p>
            <ul class="solution-modal-features">
                <li><strong>Meter and Account Management</strong> — complete meter lifecycle inventory, configuration and status monitoring.</li>
                <li><strong>Tariff Management</strong> — flexible tariff structures, pricing plans and automatic updates.</li>
                <li><strong>Customer Management</strong> — customer lifecycle management, arrears control and credit management.</li>
                <li><strong>What's Included</strong> — meter-independent design, so you can choose your preferred meter suppliers without changing vending systems.</li>
            </ul>
        </div>
        <div class="solution-modal-media-grid">
            <img src="/assets/images/solution-gas-meter-secure.jpg" alt="Secure Liberty EG4v11 prepaid gas meter with keypad token entry">
            <img src="/assets/images/solution-gas-meter-dcesn.jpg" alt="DCESN prepaid gas meter with keypad token entry">
            <img src="/assets/images/solution-gas-meter-3.jpg" alt="Prepaid gas meter with keypad token entry and integrated shut-off valve">
        </div>
    </div>
</div>

<div class="solution-modal" id="modal-time" aria-hidden="true">
    <div class="solution-modal-backdrop" data-modal-close></div>
    <div class="solution-modal-panel solution-modal-panel-split" role="dialog" aria-modal="true" aria-labelledby="modal-time-title">
        <button type="button" class="solution-modal-close" data-modal-close aria-label="Close">&times;</button>
        <div class="solution-modal-content">
            <span class="eyebrow">Time</span>
            <h2 id="modal-time-title">Token-activated timers for shared equipment</h2>
            <p class="text-grey">A token closes the circuit, the countdown starts, and the equipment shuts off automatically when time runs out — no supervision, no cash handling.</p>
            <ul class="solution-modal-features">
                <li><strong>Zero Supervision</strong> — facilities operate 24/7 without needing on-site cash handling or staff monitoring.</li>
                <li><strong>Hardware Protection</strong> — prevents equipment burnout by physically limiting continuous machine runtime.</li>
                <li><strong>Resource Conservation</strong> — drastically cuts utility waste by ending infinite water, power, or electricity consumption.</li>
                <li><strong>Vandalism Deterrence</strong> — non-monetary tokens keep the physical machines safe from cash-seeking thieves.</li>
            </ul>
        </div>
        <div class="solution-modal-media-grid">
            <img src="/assets/images/solution-time-box-laundry.jpg" alt="Token-activated timer control box wired to two coin-operated washing machines">
            <img src="/assets/images/solution-time-box-compact.jpg" alt="Compact lockable token timer box with digital countdown display">
            <img src="/assets/images/solution-time-box-open.jpg" alt="Token timer control box open, showing the internal relay and wiring">
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
