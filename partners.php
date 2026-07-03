<?php
$page_title = 'Partners';
$page_description = 'Utility, technology and hardware partners of Reliable Vending Solutions, and how to become a vending agent or reseller.';
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
        <span class="eyebrow">Partners</span>
        <h1>Working together across the utility ecosystem</h1>
        <p>From municipal utilities to meter hardware suppliers and vending agents, our partner network makes STS-compliant prepaid vending possible everywhere.</p>
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

<section class="section">
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
            <p><strong>Email:</strong> <a href="mailto:<?= htmlspecialchars(CONTACT_SALES_EMAIL) ?>"><?= htmlspecialchars(CONTACT_SALES_EMAIL) ?></a></p>
            <a class="btn btn-primary" href="/contact.php?type=agent">Partner With Us</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
