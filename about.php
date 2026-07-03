<?php
$page_title = 'About';
$page_description = 'The story, mission, vision and values behind Reliable Vending Solutions, and our commitment to STS-compliant prepaid utility services.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">About Us</span>
        <h1>Reliable, secure, and built for Botswana's utility future</h1>
        <p>Founded in <?= FOUNDING_YEAR ?>, Reliable Vending Solutions makes essential services more accessible, convenient and reliable for individuals and businesses.</p>
    </div>
</section>

<section class="section">
    <div class="container two-col" data-reveal-stagger>
        <div data-reveal>
            <h2>Our story</h2>
            <p class="text-grey">Reliable Vending Solutions was established to make essential services more accessible, convenient, and reliable for individuals and businesses. The company recognized the growing need for efficient prepaid utility, payment, and vending solutions in an increasingly digital world.</p>
            <p class="text-grey">By combining technology with customer-focused service, we simplify everyday transactions and improve accessibility. Our commitment to innovation, reliability, and excellence has enabled us to build trusted relationships with customers and partners. Today, we continue to deliver solutions that empower communities and create lasting value.</p>
        </div>
        <div data-reveal>
            <div class="card" style="margin-bottom:20px;">
                <h3>Our Mission</h3>
                <p class="text-grey">To deliver reliable, convenient, and technology-driven vending and prepaid solutions that enhance customer experiences, create value for stakeholders, and contribute to the growth and development of the communities we serve.</p>
            </div>
            <div class="card">
                <h3>Our Vision</h3>
                <p class="text-grey">To become the leading provider of innovative vending, prepaid utility, and automated retail solutions in Africa, transforming the way people access essential products and services.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">What drives us</span>
            <h2>Core values</h2>
        </div>
        <div class="value-list" data-reveal-stagger>
            <div class="value-row" data-reveal>
                <span class="value-index">01</span>
                <div class="value-icon"><?= icon('heart') ?></div>
                <div class="value-text">
                    <h3>Reliable</h3>
                    <p>You can count on our platform, day and night — tokens generate and deliver without fail, so customers never lose power over a technical hiccup.</p>
                </div>
            </div>
            <div class="value-row" data-reveal>
                <span class="value-index">02</span>
                <div class="value-icon"><?= icon('shield') ?></div>
                <div class="value-text">
                    <h3>Secure</h3>
                    <p>Every transaction runs through STS-compliant, encrypted processes — protecting customer data and utility revenue at every step.</p>
                </div>
            </div>
            <div class="value-row" data-reveal>
                <span class="value-index">03</span>
                <div class="value-icon"><?= icon('brain') ?></div>
                <div class="value-text">
                    <h3>Smart</h3>
                    <p>Real-time dashboards and reporting turn raw transaction data into insight, so you always know exactly what's happening across operations.</p>
                </div>
            </div>
            <div class="value-row" data-reveal>
                <span class="value-index">04</span>
                <div class="value-icon"><?= icon('trending-up') ?></div>
                <div class="value-text">
                    <h3>Scalable</h3>
                    <p>From a single vending agent to multi-site institutional deployments, our platform grows with you — no rebuilding required.</p>
                </div>
            </div>
            <div class="value-row" data-reveal>
                <span class="value-index">05</span>
                <div class="value-icon"><?= icon('leaf') ?></div>
                <div class="value-text">
                    <h3>Sustainable</h3>
                    <p>We build for the long term, supporting the responsible, lasting growth of the utilities and communities we serve.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container two-col" data-reveal-stagger>
        <div data-reveal>
            <span class="eyebrow">Compliance</span>
            <h2>Accreditations &amp; regulatory compliance</h2>
            <p class="text-grey">Through adherence to <a href="https://www.sts.org.za/" target="_blank" rel="noopener">STS-compliant</a> technologies and processes, Reliable Vending Solutions contributes to the integrity, security, and efficiency of prepaid utility services. This commitment reinforces our dedication to delivering trusted solutions, protecting customer interests, and supporting the sustainable growth of the prepaid utility industry.</p>
            <a href="https://www.sts.org.za/" target="_blank" rel="noopener">
                <img class="partner-logo" src="/assets/images/sts-association-logo.png" alt="STS Association member" style="max-height:64px;">
            </a>
        </div>
        <div class="feature-media" data-reveal>
            <img src="/assets/images/sts-compliance.png" alt="Reliable Vending Solutions is S.T.S Compliant">
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Why Choose Us</span>
            <h2>What sets us apart</h2>
        </div>
        <div class="card-diamond" data-reveal-stagger>
            <div class="card-diamond-row card-diamond-row-top">
                <div class="card" data-reveal>
                    <div class="icon-badge"><?= icon('shield') ?></div>
                    <h3>Reliable and secure platform</h3>
                    <p>A vending platform built for uptime, security and trust.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="icon-badge"><?= icon('badge-check') ?></div>
                    <h3>STS-compliant token solutions</h3>
                    <p>Every token meets the Standard Transfer Specification.</p>
                </div>
            </div>
            <div class="card-diamond-row card-diamond-row-center">
                <div class="card card-diamond-featured" data-reveal>
                    <div class="icon-badge"><?= icon('trending-up') ?></div>
                    <h3>Proven support for utility-scale operations</h3>
                    <p>Support built for the demands of utility-scale deployments.</p>
                </div>
            </div>
            <div class="card-diamond-row card-diamond-row-bottom">
                <div class="card" data-reveal>
                    <div class="icon-badge"><?= icon('puzzle') ?></div>
                    <h3>Compatible with many meter types</h3>
                    <p>Freedom to choose your preferred prepaid meter suppliers.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="icon-badge"><?= icon('handshake') ?></div>
                    <h3>Strong partnerships</h3>
                    <p>Deep partnerships across the utility ecosystem.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
