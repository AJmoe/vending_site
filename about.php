<?php
$page_title = 'About';
$page_description = 'The story, mission, vision, values and partners behind Reliable Vending Solutions, and our commitment to STS-compliant prepaid utility services.';
require __DIR__ . '/includes/header.php';

$techPartners = [
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

<section class="section">
    <div class="container two-col" data-reveal-stagger>
        <div data-reveal>
            <h2>Our story</h2>
            <p class="text-grey">Reliable Vending Solutions was established to make essential services more accessible, convenient, and reliable for individuals and businesses. The company recognized the growing need for efficient prepaid utility, payment, and vending solutions in an increasingly digital world.</p>
            <p class="text-grey">By combining technology with customer-focused service, we simplify everyday transactions and improve accessibility. Our commitment to innovation, reliability, and excellence has enabled us to build trusted relationships with customers and partners. Today, we continue to deliver solutions that empower communities and create lasting value.</p>
        </div>
        <div class="card-stack-plain" data-reveal>
            <div class="card">
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

<section class="section">
    <div class="container two-col" data-reveal-stagger>
        <div data-reveal>
            <span class="eyebrow">Partnering with purpose</span>
            <h2>Together, we vend smarter</h2>
            <p class="text-grey">Reliable partnerships. Reliable vending. We build long-term relationships with utilities, technology suppliers and agents so that every prepaid transaction is secure and dependable.</p>
        </div>
        <div class="feature-media" data-reveal>
            <img src="/assets/images/partners-handshake.png" alt="Two Reliable Vending Solutions partners shaking hands">
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Utility &amp; Municipal Partners</span>
            <h2>Trusted by utility providers</h2>
        </div>
        <div class="card-grid partner-showcase" data-reveal-stagger>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('droplet') ?></div>
                <img class="partner-logo" src="/assets/images/partner-wuc.png" alt="Water Utilities Corporation logo">
                <h3>Water Utilities Corporation</h3>
                <p>Partnering to bring secure, STS-compliant prepaid water token vending to households and businesses. Together, we're making water access more convenient, transparent and reliable for every customer.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('gauge') ?></div>
                <img class="partner-logo" src="/assets/images/partner-leeroysystems.png" alt="Leeroy Systems logo">
                <h3>Leeroy Systems</h3>
                <p>Our smart prepaid water metering (SPWM) partner, supplying the metering technology that connects seamlessly with our vending platform — keeping every reading accurate and every token honoured.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Technology &amp; Hardware Partners</span>
            <h2>STS-compliant meter hardware suppliers</h2>
        </div>
        <div class="partner-strip" data-reveal-stagger>
            <?php foreach ($techPartners as $partner): $tag = !empty($partner['url']) ? 'a' : 'div'; ?>
            <<?= $tag ?> class="partner-tile" data-reveal<?php if (!empty($partner['url'])): ?> href="<?= htmlspecialchars($partner['url']) ?>" target="_blank" rel="noopener"<?php endif; ?> title="<?= htmlspecialchars($partner['name']) ?> — STS-compliant meter hardware supplier">
                <?php if (!empty($partner['logo'])): ?>
                    <img src="<?= htmlspecialchars($partner['logo']) ?>" alt="<?= htmlspecialchars($partner['name']) ?> logo">
                <?php else: ?>
                    <span class="partner-tile-icon"><?= icon('cpu') ?></span>
                    <span class="partner-tile-name"><?= htmlspecialchars($partner['name']) ?></span>
                <?php endif; ?>
            </<?= $tag ?>>
            <?php endforeach; ?>
        </div>
        <p class="text-grey partner-strip-note">Freedom to choose your preferred meter hardware supplier — no lock-in, ever.</p>
    </div>
</section>

<section class="section section-alt">
    <div class="container two-col" data-reveal-stagger>
        <div data-reveal>
            <span class="eyebrow">Become a Partner / Agent</span>
            <h2>Grow with Reliable Vending Solutions</h2>
            <p class="text-grey">We work with vending agents, resellers and municipality integration partners across Botswana.</p>
            <dl class="spec-list">
                <dt><?= icon('handshake') ?> Partnership types</dt>
                <dd>Vending agent, reseller, municipality integration partner.</dd>

                <dt><?= icon('badge-check') ?> Requirements</dt>
                <dd>A physical outlet, a smartphone, and completion of our training programme.</dd>

                <dt><?= icon('trending-up') ?> Benefits</dt>
                <dd>Commission per token sold, a free terminal, and full training provided.</dd>
            </dl>
        </div>
        <div class="card" data-reveal>
            <h3>Partner With Us</h3>
            <p class="text-grey">Ready to apply, or have questions about becoming an agent?</p>
            <p><strong>Phone:</strong> <a href="tel:<?= htmlspecialchars(preg_replace('/[^+\d]/', '', CONTACT_PHONE)) ?>"><?= htmlspecialchars(CONTACT_PHONE) ?></a></p>
            <p><strong>Email:</strong> <a href="mailto:<?= htmlspecialchars(CONTACT_EMAIL) ?>"><?= htmlspecialchars(CONTACT_EMAIL) ?></a></p>
            <a class="btn btn-primary" href="/contact.php">Partner With Us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
