<?php
$page_title = 'Home';
$page_description = 'Reliable Vending Solutions delivers secure, STS-compliant prepaid token vending across web, mobile, USSD and agent channels for utilities, institutions and businesses across Botswana.';
require __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div class="container hero-inner">
        <div>
            <span class="eyebrow">STS-Compliant Prepaid Token Vending</span>
            <h1>Simplifying Vending. Securing Every Transaction.</h1>
            <p class="lead"><?= htmlspecialchars(SITE_TAGLINE) ?></p>
            <p>We empower utility companies, service providers and vendors with the tools they need to manage prepaid operations efficiently and securely.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="/contact.php">Get Started</a>
                <a class="btn btn-outline-light" href="/solutions.php">Explore Solutions</a>
            </div>
        </div>
        <div class="hero-media" data-reveal>
            <img src="/assets/images/mobile-app.png" alt="Customer managing prepaid vending from a mobile phone">
        </div>
    </div>
</section>

<section class="stats-strip">
    <div class="container stats-grid" data-reveal-stagger>
        <div data-reveal>
            <div class="stat-value" data-count-to="6" data-count-suffix="+">0</div>
            <div class="stat-label">Meter types supported</div>
        </div>
        <div data-reveal>
            <div class="stat-value" data-count-to="500000" data-count-suffix="+">0</div>
            <div class="stat-label">Tokens issued</div>
        </div>
        <div data-reveal>
            <div class="stat-value">99.9%</div>
            <div class="stat-label">Platform uptime</div>
        </div>
        <div data-reveal>
            <div class="stat-value">Since 2025</div>
            <div class="stat-label">Serving Botswana</div>
        </div>
    </div>
</section>

<section class="section" id="services">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">What we do</span>
            <h2>One platform for every stage of prepaid vending</h2>
            <p class="text-grey">From token generation to customer and tariff management, Reliable Vending Solutions covers the full lifecycle of STS-compliant prepaid utility services.</p>
        </div>
        <div class="card-grid" data-reveal-stagger>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('shield') ?></div>
                <h3>STS Token Supply</h3>
                <p>Secure generation and distribution of compliant prepaid tokens across authorised vending channels.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('devices') ?></div>
                <h3>Multi-Channel Vending</h3>
                <p>Web, mobile application, USSD, agent network and integration channels.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('gauge') ?></div>
                <h3>Meter and Account Management</h3>
                <p>Lifecycle management, status monitoring, customer linking and account validation.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('tag') ?></div>
                <h3>Tariff Management</h3>
                <p>Flexible tariff structures, pricing plans and controlled tariff updates.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('users') ?></div>
                <h3>Customer and Debt Management</h3>
                <p>Customer lifecycle, arrears controls, debt payment processing and account maintenance.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('bar-chart') ?></div>
                <h3>Analytics and Reporting</h3>
                <p>Real-time dashboards, transaction reports, audit records and management insights.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('building') ?></div>
                <h3>Bulk and Corporate Vending</h3>
                <p>Multi-site purchasing, controlled distribution, reporting and dedicated support.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('link') ?></div>
                <h3>API and Partner Integration</h3>
                <p>Secure integration with payment, banking, mobile-money and distribution networks.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Why Reliable Vending</span>
            <h2>Built to be scalable, smart and secure</h2>
        </div>
        <div class="pillars" data-reveal-stagger>
            <div class="pillar" data-reveal>
                <div class="pillar-media">
                    <div class="pillar-media-img"><img src="/assets/images/pillar-secure.jpg" alt="Combination padlock representing secure, encrypted transactions"></div>
                    <div class="pillar-icon"><?= icon('shield') ?></div>
                </div>
                <h3>Secure</h3>
                <p class="text-grey">Every token is generated and delivered through STS-compliant, encrypted processes.</p>
            </div>
            <div class="pillar" data-reveal>
                <div class="pillar-media">
                    <div class="pillar-media-img"><img src="/assets/images/pillar-smart.jpg" alt="Real-time analytics dashboard representing smart reporting"></div>
                    <div class="pillar-icon"><?= icon('brain') ?></div>
                </div>
                <h3>Smart</h3>
                <p class="text-grey">Real-time dashboards and reporting give you visibility into every transaction.</p>
            </div>
            <div class="pillar" data-reveal>
                <div class="pillar-media">
                    <div class="pillar-media-img"><img src="/assets/images/pillar-scalable.jpg" alt="Network expanding outward representing scalable deployments"></div>
                    <div class="pillar-icon"><?= icon('trending-up') ?></div>
                </div>
                <h3>Scalable</h3>
                <p class="text-grey">From a single agent to multi-site institutional deployments, the platform grows with you.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container two-col" data-reveal-stagger>
        <div data-reveal>
            <span class="eyebrow">Get Last Tokens</span>
            <h2>Retrieve your last purchased tokens</h2>
            <p class="text-grey">Lost a token or need to confirm a purchase? Retrieve your last tokens directly from the vending portal.</p>
            <a class="btn btn-outline" href="<?= htmlspecialchars(PORTAL_TOKENS_URL) ?>" target="_blank" rel="noopener">Last Tokens</a>
        </div>
        <div data-reveal>
            <span class="eyebrow">Corporate &amp; Bulk Vending</span>
            <h2>Managing utilities across multiple sites?</h2>
            <p class="text-grey">Explore dedicated tools for property managers, institutions and businesses that need multi-site prepaid utility management.</p>
            <a class="btn btn-outline" href="/corporate-vending.php">Request Corporate Demo</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
