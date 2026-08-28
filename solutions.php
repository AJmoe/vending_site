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
            <h2>Solutions</h2>
        </div>
        <div class="card-grid card-grid-simple" data-reveal-stagger>
            <div class="card card-solution card-solution-media" data-reveal tabindex="0">
                <div class="card-solution-flip">
                    <div class="card-solution-face card-solution-face-front">
                        <img class="card-solution-bg" src="/assets/images/solution-card-water.jpg" alt="">
                        <div class="card-header-row">
                            <div class="icon-badge"><?= icon('droplet') ?></div>
                            <h3>Water</h3>
                        </div>
                        <div class="card-solution-reveal">
                            <div>
                                <p>An STS water token is a secure prepaid token carrying water credit to a compliant meter once accepted, the meter updates credit and supplies water until it's depleted.</p>
                                <button type="button" class="card-solution-cta" data-flip-trigger>Explore more <?= icon('trending-up') ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-solution-face card-solution-face-back">
                        <div class="card-solution-back-inner">
                            <button type="button" class="card-solution-back-btn" data-flip-trigger aria-label="Back to front">
                                <?= icon('chevron-left') ?>
                            </button>
                            <h4>How it works</h4>
                            <ol class="card-solution-steps">
                                <li>Purchase water credit</li>
                                <li>Secure STS token generated</li>
                                <li>Delivered through your channel</li>
                                <li>Entered at the meter — credit loads instantly</li>
                            </ol>
                            <h4>Core Features</h4>
                            <ul class="card-solution-features">
                                <li>Secure single-use tokens</li>
                                <li>Interoperable across compliant meters</li>
                                <li>Standards-based key management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-solution card-solution-media" data-reveal tabindex="0">
                <div class="card-solution-flip">
                    <div class="card-solution-face card-solution-face-front">
                        <img class="card-solution-bg" src="/assets/images/solution-card-electricity.jpg" alt="">
                        <div class="card-header-row">
                            <div class="icon-badge"><?= icon('bolt') ?></div>
                            <h3>Electricity</h3>
                        </div>
                        <div class="card-solution-reveal">
                            <div>
                                <p>An STS electricity token is a secure prepaid token carrying electricity credit to a compliant meter once accepted, the meter updates credit and supplies power until it's depleted.</p>
                                <button type="button" class="card-solution-cta" data-flip-trigger>Explore more <?= icon('trending-up') ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-solution-face card-solution-face-back">
                        <div class="card-solution-back-inner">
                            <button type="button" class="card-solution-back-btn" data-flip-trigger aria-label="Back to front">
                                <?= icon('chevron-left') ?>
                            </button>
                            <h4>How it works</h4>
                            <ol class="card-solution-steps">
                                <li>Purchase electricity credit</li>
                                <li>Secure STS token generated</li>
                                <li>Delivered through your channel</li>
                                <li>Entered at the meter — credit loads instantly</li>
                            </ol>
                            <h4>Core Features</h4>
                            <ul class="card-solution-features">
                                <li>Secure single-use tokens</li>
                                <li>Interoperable across compliant meters</li>
                                <li>Standards-based key management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-solution card-solution-media" data-reveal tabindex="0">
                <div class="card-solution-flip">
                    <div class="card-solution-face card-solution-face-front">
                        <img class="card-solution-bg" src="/assets/images/solution-card-gas.jpg" alt="">
                        <div class="card-header-row">
                            <div class="icon-badge"><?= icon('flame') ?></div>
                            <h3>Gas</h3>
                        </div>
                        <div class="card-solution-reveal">
                            <div>
                                <p>An STS gas token is a secure prepaid token carrying gas credit to a compliant meter once accepted, the meter updates credit and supplies gas until it's depleted.</p>
                                <button type="button" class="card-solution-cta" data-flip-trigger>Explore more <?= icon('trending-up') ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-solution-face card-solution-face-back">
                        <div class="card-solution-back-inner">
                            <button type="button" class="card-solution-back-btn" data-flip-trigger aria-label="Back to front">
                                <?= icon('chevron-left') ?>
                            </button>
                            <h4>How it works</h4>
                            <ol class="card-solution-steps">
                                <li>Purchase gas credit</li>
                                <li>Secure STS token generated</li>
                                <li>Delivered through your channel</li>
                                <li>Entered at the meter — credit loads instantly</li>
                            </ol>
                            <h4>Core Features</h4>
                            <ul class="card-solution-features">
                                <li>Secure single-use tokens</li>
                                <li>Interoperable across compliant meters</li>
                                <li>Standards-based key management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-solution card-solution-media" data-reveal tabindex="0">
                <div class="card-solution-flip">
                    <div class="card-solution-face card-solution-face-front">
                        <img class="card-solution-bg" src="/assets/images/solution-card-time.jpg" alt="">
                        <div class="card-header-row">
                            <div class="icon-badge"><?= icon('clock') ?></div>
                            <h3>Time</h3>
                        </div>
                        <div class="card-solution-reveal">
                            <div>
                                <p>An STS time token is a secure prepaid token carrying time credit to a compliant meter once accepted, the meter provides service for the purchased duration.</p>
                                <button type="button" class="card-solution-cta" data-flip-trigger>Explore more <?= icon('trending-up') ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-solution-face card-solution-face-back">
                        <div class="card-solution-back-inner">
                            <button type="button" class="card-solution-back-btn" data-flip-trigger aria-label="Back to front">
                                <?= icon('chevron-left') ?>
                            </button>
                            <h4>How it works</h4>
                            <ol class="card-solution-steps">
                                <li>Purchase time credit</li>
                                <li>Secure STS token generated</li>
                                <li>Delivered through your channel</li>
                                <li>Entered at the meter — service activates instantly</li>
                            </ol>
                            <h4>Core Features</h4>
                            <ul class="card-solution-features">
                                <li>Secure single-use tokens</li>
                                <li>Interoperable across compliant meters</li>
                                <li>Standards-based key management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Corporate &amp; Bulk Vending</span>
            <h2>Built for organisations managing utilities at scale</h2>
            <p class="text-grey">Our corporate solutions enable businesses and institutions to purchase, distribute and manage prepaid electricity tokens with ease, while maintaining full compliance with industry standards.</p>
        </div>
        <div class="card-grid card-grid-quarters" data-reveal-stagger>
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
            <div class="card" data-reveal>
                <div class="card-header-row">
                    <div class="icon-badge"><?= icon('clock') ?></div>
                    <h3>Shared &amp; Metered Facilities</h3>
                </div>
                <p>Token-activated timers for laundromats, showers, car washes and other shared equipment pay only for the time used.</p>
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

<script src="/assets/js/solution-card-flip.js"></script>

<?php require __DIR__ . '/includes/footer.php'; ?>
