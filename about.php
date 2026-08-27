<?php
$page_title = 'About';
$page_description = 'The story, mission, vision, values and partners behind Reliable Vending Solutions, and our commitment to STS-compliant prepaid utility services.';
require __DIR__ . '/includes/header.php';

$techPartners = [
    ['name' => 'Water Utilities Corporation', 'url' => 'https://www.wuc.bw/', 'logo' => '/assets/images/partner-wuc.png'],
    ['name' => 'Leeroy Systems', 'logo' => '/assets/images/partner-leeroysystems-default.png'],
    ['name' => 'Lesira', 'url' => 'https://lesira.co.za/', 'logo' => '/assets/images/partner-lesira.png'],
    ['name' => 'Honeywell', 'url' => 'https://www.honeywell.com/us/en', 'logo' => '/assets/images/partner-honeywell.png'],
    ['name' => 'SH Meters', 'url' => 'https://www.sh-meters.com/', 'logo' => '/assets/images/partner-sh-meters.webp'],
    ['name' => 'Conlog', 'url' => 'https://conlog.com/', 'logo' => '/assets/images/partner-conlog.svg'],
    ['name' => 'Liaison', 'logo' => '/assets/images/partner-laison.png'],
    ['name' => 'OLE Power', 'url' => 'https://olepower.co.za/'],
];
?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">About Us</span>
        <h1>Reliable, secure, and built for Botswana's utility future</h1>
        <p>Founded in <?= FOUNDING_YEAR ?>, Reliable Vending Solutions makes essential services more accessible, convenient and reliable for individuals and businesses.</p>
    </div>
</section>

<section class="section section-tight">
    <div class="container">
        <div class="card about-story-card about-mission-vision-card" data-reveal>
            <h2>Our story</h2>
            <p class="text-grey">Reliable Vending Solutions was established to make essential services more accessible, convenient, and reliable for individuals and businesses. The company recognized the growing need for efficient prepaid utility, payment, and vending solutions in an increasingly digital world.</p>
            <p class="text-grey">By combining technology with customer-focused service, we simplify everyday transactions and improve accessibility. Our commitment to innovation, reliability, and excellence has enabled us to build trusted relationships with customers and partners. Today, we continue to deliver solutions that empower communities and create lasting value.</p>
            <div class="mission-vision-block">
                <h3> Mission</h3>
                <p class="text-grey">To deliver reliable, convenient, and technology-driven vending and prepaid solutions that enhance customer experiences, create value for stakeholders, and contribute to the growth and development of the communities we serve.</p>
            </div>
            <div class="mission-vision-block">
                <h3> Vision</h3>
                <p class="text-grey">To become the leading provider of innovative vending, prepaid utility, and automated retail solutions in Africa, transforming the way people access essential products and services.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt section-tight">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">What drives us</span>
            <h2>Core values</h2>
        </div>
        <div class="value-list value-list-compact" data-reveal-stagger>
            <div class="value-row value-row-expand" tabindex="0" data-reveal>
                <span class="value-index">01</span>
                <div class="value-icon"><?= icon('heart') ?></div>
                <div class="value-text">
                    <h3>Reliable</h3>
                    <div class="value-desc">
                        <p>You can count on our platform, day and night — tokens generate and deliver without fail, so customers never lose power over a technical hiccup.</p>
                    </div>
                </div>
            </div>
            <div class="value-row value-row-expand" tabindex="0" data-reveal>
                <span class="value-index">02</span>
                <div class="value-icon"><?= icon('shield') ?></div>
                <div class="value-text">
                    <h3>Secure</h3>
                    <div class="value-desc">
                        <p>Every transaction runs through STS-compliant, encrypted processes — protecting customer data and utility revenue at every step.</p>
                    </div>
                </div>
            </div>
            <div class="value-row value-row-expand" tabindex="0" data-reveal>
                <span class="value-index">03</span>
                <div class="value-icon"><?= icon('brain') ?></div>
                <div class="value-text">
                    <h3>Smart</h3>
                    <div class="value-desc">
                        <p>Real-time dashboards and reporting turn raw transaction data into insight, so you always know exactly what's happening across operations.</p>
                    </div>
                </div>
            </div>
            <div class="value-row value-row-expand" tabindex="0" data-reveal>
                <span class="value-index">04</span>
                <div class="value-icon"><?= icon('trending-up') ?></div>
                <div class="value-text">
                    <h3>Scalable</h3>
                    <div class="value-desc">
                        <p>From a single vending agent to multi-site institutional deployments, our platform grows with you — no rebuilding required.</p>
                    </div>
                </div>
            </div>
            <div class="value-row value-row-expand" tabindex="0" data-reveal>
                <span class="value-index">05</span>
                <div class="value-icon"><?= icon('leaf') ?></div>
                <div class="value-text">
                    <h3>Sustainable</h3>
                    <div class="value-desc">
                        <p>We build for the long term, supporting the responsible, lasting growth of the utilities and communities we serve.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-tight">
    <div class="container">
        <div class="compliance-banner" data-reveal>
            <img class="compliance-banner-bg" src="/assets/images/hero-banner-2.png" alt="">
            <div class="compliance-banner-content">
                <span class="eyebrow">Compliance</span>
                <h2>Accreditations &amp; regulatory compliance</h2>
                <p>Through adherence to <a href="https://www.sts.org.za/" target="_blank" rel="noopener">STS-compliant</a> technologies and processes, Reliable Vending Solutions contributes to the integrity, security, and efficiency of prepaid utility services. This commitment reinforces our dedication to delivering trusted solutions, protecting customer interests, and supporting the sustainable growth of the prepaid utility industry.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt section-tight">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Why Choose Us</span>
            <h2>What sets us apart</h2>
        </div>
        <div class="value-list" data-reveal-stagger>
            <div class="value-row" data-reveal>
                <div class="value-icon"><?= icon('shield') ?></div>
                <div class="value-text">
                    <h3>Reliable and secure platform</h3>
                    <p>A vending platform built for uptime, security and trust.</p>
                </div>
            </div>
            <div class="value-row" data-reveal>
                <div class="value-icon"><?= icon('badge-check') ?></div>
                <div class="value-text">
                    <h3>STS-compliant token solutions</h3>
                    <p>Every token meets the Standard Transfer Specification.</p>
                </div>
            </div>
            <div class="value-row" data-reveal>
                <div class="value-icon"><?= icon('trending-up') ?></div>
                <div class="value-text">
                    <h3>Proven support for utility-scale operations</h3>
                    <p>Support built for the demands of utility-scale deployments.</p>
                </div>
            </div>
            <div class="value-row" data-reveal>
                <div class="value-icon"><?= icon('puzzle') ?></div>
                <div class="value-text">
                    <h3>Compatible with many meter types</h3>
                    <p>Freedom to choose your preferred prepaid meter suppliers.</p>
                </div>
            </div>
            <div class="value-row" data-reveal>
                <div class="value-icon"><?= icon('handshake') ?></div>
                <div class="value-text">
                    <h3>Trusted across the ecosystem</h3>
                    <p>From municipal utilities to meter manufacturers, organisations trust us to keep their prepaid operations running.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-tight">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow"></span>
            <h2>Technology and Affiliate Partners</h2>
        </div>
        <div class="partner-marquee" data-reveal>
            <div class="partner-marquee-track">
                <?php for ($rep = 0; $rep < 2; $rep++): ?>
                    <?php foreach ($techPartners as $partner): $tag = !empty($partner['url']) ? 'a' : 'div'; ?>
                    <<?= $tag ?> class="partner-tile"<?php if ($rep > 0): ?> aria-hidden="true" tabindex="-1"<?php endif; ?><?php if (!empty($partner['url'])): ?> href="<?= htmlspecialchars($partner['url']) ?>" target="_blank" rel="noopener"<?php endif; ?> title="<?= htmlspecialchars($partner['name']) ?> — Reliable Vending Solutions partner">
                        <?php if (!empty($partner['logo'])): ?>
                            <img src="<?= htmlspecialchars($partner['logo']) ?>" alt="<?= htmlspecialchars($partner['name']) ?> logo">
                        <?php else: ?>
                            <span class="partner-tile-icon"><?= icon('cpu') ?></span>
                            <span class="partner-tile-name"><?= htmlspecialchars($partner['name']) ?></span>
                        <?php endif; ?>
                    </<?= $tag ?>>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>
        <p class="text-grey partner-strip-note">From utility providers to hardware manufacturers trusted partners across the region.</p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
