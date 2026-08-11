<?php
$page_title = 'Home';
$page_description = 'Reliable Vending Solutions delivers secure, STS-compliant prepaid token vending across web, mobile, USSD and agent channels for utilities, institutions and businesses across Botswana.';
require __DIR__ . '/includes/header.php';
?>

<!--
    Hero carousel: real <img> elements, not CSS backgrounds. The wrapper's
    aspect-ratio is locked to the primary banner's actual pixel dimensions
    (1717x654) so the box is the same shape at every screen size, and each
    image uses object-fit:contain so it's always shown whole, never cropped.
    Text is baked directly into the banner images — swap the src/alt below
    when new banners are ready (update the aspect-ratio too if a new primary
    banner's own pixel dimensions differ from 1717x654).
-->
<section class="hero-carousel" data-carousel aria-roledescription="carousel" aria-label="Highlights">
    <div class="hero-slide is-active" data-slide>
        <img src="/assets/images/hero-1.png" alt="Reliable Vending Solutions — reliable solutions, every time, everywhere. End-to-end vending solutions that power everyday convenience.">
    </div>
    <div class="hero-slide" data-slide>
        <img src="/assets/images/sts-compliance.png" alt="Reliable Vending Solutions is S.T.S Compliant — we carry the STS standard, future-proof, compliant and always up to date.">
    </div>
    <div class="hero-slide" data-slide>
        <img src="/assets/images/partners-handshake.png" alt="Together, we vend smarter — reliable partnerships, reliable vending.">
    </div>

    <div class="hero-carousel-footer">
        <div class="container">
            <div class="hero-actions">
                <a class="btn btn-primary" href="/solutions.php">Explore Solutions</a>
            </div>
            <div class="hero-dots" role="tablist" aria-label="Choose slide">
                <button type="button" class="hero-dot is-active" data-slide-index="0" aria-label="Show slide 1" aria-current="true"></button>
                <button type="button" class="hero-dot" data-slide-index="1" aria-label="Show slide 2"></button>
                <button type="button" class="hero-dot" data-slide-index="2" aria-label="Show slide 3"></button>
            </div>
        </div>
    </div>
</section>

<section class="stats-strip">
    <div class="container stats-grid" data-reveal-stagger>
        <div data-reveal>
            <div class="stat-label">Tokens issued</div>
            <div class="stat-value" data-count-to="500000" data-count-suffix="+">0</div>
        </div>
        <div data-reveal>
            <div class="stat-label">Platform uptime</div>
            <div class="stat-value">99.9%</div>
        </div>
        <div data-reveal>
            <div class="stat-label">Serving Botswana</div>
            <div class="stat-value">Since 2025</div>
        </div>
    </div>
</section>

<section class="section" id="services">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">What we do</span>
            <h2>One platform for every stage of prepaid vending</h2>
        </div>
        <div class="card-grid" data-reveal-stagger> 
            <div class="card card-flip" data-reveal tabindex="0">
                <div class="card-face">
                    <div class="icon-badge"><?= icon('shield') ?></div>
                    <h3>STS Token Supply</h3>
                </div>
                <div class="card-face card-face-back">
                    <p>Secure generation and distribution of compliant prepaid tokens across authorised vending channels.</p>
                </div>
            </div>
            <div class="card card-flip" data-reveal tabindex="0">
                <div class="card-face">
                    <div class="icon-badge"><?= icon('devices') ?></div>
                    <h3>Multi-Channel Vending</h3>
                </div>
                <div class="card-face card-face-back">
                    <p>Web, mobile application, USSD, agent network and integration channels.</p>
                </div>
            </div>
            <div class="card card-flip" data-reveal tabindex="0">
                <div class="card-face">
                    <div class="icon-badge"><?= icon('gauge') ?></div>
                    <h3>Meter and Account Management</h3>
                </div>
                <div class="card-face card-face-back">
                    <p>Lifecycle management, status monitoring, customer linking and account validation.</p>
                </div>
            </div>
            <div class="card card-flip" data-reveal tabindex="0">
                <div class="card-face">
                    <div class="icon-badge"><?= icon('tag') ?></div>
                    <h3>Tariff Management</h3>
                </div>
                <div class="card-face card-face-back">
                    <p>Flexible tariff structures, pricing plans and controlled tariff updates.</p>
                </div>
            </div>
            <div class="card card-flip" data-reveal tabindex="0">
                <div class="card-face">
                    <div class="icon-badge"><?= icon('users') ?></div>
                    <h3>Customer and Debt Management</h3>
                </div>
                <div class="card-face card-face-back">
                    <p>Customer lifecycle, arrears controls, debt payment processing and account maintenance.</p>
                </div>
            </div>
            <div class="card card-flip" data-reveal tabindex="0">
                <div class="card-face">
                    <div class="icon-badge"><?= icon('bar-chart') ?></div>
                    <h3>Analytics and Reporting</h3>
                </div>
                <div class="card-face card-face-back">
                    <p>Real-time dashboards, transaction reports, audit records and management insights.</p>
                </div>
            </div>
            <div class="card card-flip" data-reveal tabindex="0">
                <div class="card-face">
                    <div class="icon-badge"><?= icon('building') ?></div>
                    <h3>Bulk and Corporate Vending</h3>
                </div>
                <div class="card-face card-face-back">
                    <p>Multi-site purchasing, controlled distribution, reporting and dedicated support.</p>
                </div>
            </div>
            <div class="card card-flip" data-reveal tabindex="0">
                <div class="card-face">
                    <div class="icon-badge"><?= icon('link') ?></div>
                    <h3>API and Partner Integration</h3>
                </div>
                <div class="card-face card-face-back">
                    <p>Secure integration with payment, banking, mobile-money and distribution networks.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
