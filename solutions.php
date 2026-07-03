<?php
$page_title = 'Solutions';
$page_description = 'STS-compliant prepaid token supply, multi-channel vending, meter management, tariff management and reporting from Reliable Vending Solutions.';
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
            <span class="eyebrow">Prepaid Token Vending</span>
            <h2>STS-compliant token supply</h2>
            <p class="text-grey">Secure, real-time generation and distribution of STS tokens across all supported channels — built to be meter-independent and easy to scale.</p>
        </div>

        <div class="card-grid spec-card-grid card-grid-simple" data-reveal-stagger>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('badge-check') ?></div>
                <h3>STS Compliance</h3>
                <p>Fully STS (Standard Transfer Specification) compliant token generation and delivery.</p>
            </div>

            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('gauge') ?></div>
                <h3>Meter Compatibility</h3>
                <p>Freedom to choose your preferred hardware supplier — no lock-in, ever.</p>
                <div class="brand-strip">
                    <img src="/assets/images/partner-lesira.png" alt="Lesira">
                    <img src="/assets/images/partner-sh-meters.webp" alt="SH Meters">
                    <img src="/assets/images/partner-conlog.svg" alt="Conlog">
                    <img src="/assets/images/partner-honeywell.png" alt="Honeywell">
                    <img src="/assets/images/partner-laison.png" alt="Liaison">
                </div>
            </div>

            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('tag') ?></div>
                <h3>Payment Methods</h3>
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
                    <div class="icon-badge"><?= icon('devices') ?></div>
                    <h3>Vending Channels</h3>
                    <p>Online portal, mobile app, agent network and USSD.</p>
                </div>
                <div class="card" data-reveal>
                    <div class="icon-badge"><?= icon('mail') ?></div>
                    <h3>Token Delivery</h3>
                    <p>SMS, printed receipt or in-app notification.</p>
                </div>
            </div>
        </div>

        <div class="highlight-panel" data-reveal>
            <div class="highlight-panel-header">
                <h3>What's Included</h3>
                <p>Every STS token subscription comes fully equipped — no hidden extras.</p>
            </div>
            <div class="highlight-grid">
                <div class="highlight-item">
                    <div class="highlight-item-icon"><?= icon('check') ?></div>
                    <p>No hassles around technology upgrades, TID rollover or licence costs — these are taken care of for you.</p>
                </div>
                <div class="highlight-item">
                    <div class="highlight-item-icon"><?= icon('check') ?></div>
                    <p>Ability to integrate with payment and distribution networks.</p>
                </div>
                <div class="highlight-item">
                    <div class="highlight-item-icon"><?= icon('check') ?></div>
                    <p>Meter-independent design, so you can choose your preferred meter suppliers without changing vending systems.</p>
                </div>
                <div class="highlight-item">
                    <div class="highlight-item-icon"><?= icon('check') ?></div>
                    <p>Configurable to support many independent utilities, each with its own access and management interface.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Platform capabilities</span>
            <h2>Beyond token vending</h2>
        </div>
        <div class="card-grid card-grid-simple" data-reveal-stagger>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('gauge') ?></div>
                <h3>Meter and Account Management</h3>
                <p>Complete meter lifecycle inventory, configuration and status monitoring.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('tag') ?></div>
                <h3>Tariff Management</h3>
                <p>Flexible tariff structures, pricing plans and automatic updates.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('users') ?></div>
                <h3>Customer Management</h3>
                <p>Customer lifecycle management, arrears control and credit management.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('bar-chart') ?></div>
                <h3>Analytics &amp; Reporting</h3>
                <p>Real-time dashboards, reports and insights for operational excellence.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('link') ?></div>
                <h3>API &amp; Partner Integration</h3>
                <p>Secure integration with payment, banking, mobile-money and distribution networks.</p>
            </div>
            <div class="card" data-reveal>
                <div class="icon-badge"><?= icon('building') ?></div>
                <h3>Bulk &amp; Corporate Vending</h3>
                <p>Multi-site purchasing, controlled distribution and dedicated support — see <a href="/corporate-vending.php">Corporate Vending</a>.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container two-col" data-reveal-stagger>
        <div data-reveal>
            <span class="eyebrow">Get Last Tokens</span>
            <h2>Already a customer?</h2>
            <p class="text-grey">Retrieve your last purchased tokens directly from the vending portal at any time.</p>
            <a class="btn btn-primary" href="<?= htmlspecialchars(PORTAL_TOKENS_URL) ?>" target="_blank" rel="noopener">Last Tokens</a>
        </div>
        <div data-reveal>
            <span class="eyebrow">Portal</span>
            <h2>Manage your account online</h2>
            <p class="text-grey">Log in to the vending portal to purchase tokens, view account history and manage your services.</p>
            <a class="btn btn-outline" href="<?= htmlspecialchars(PORTAL_LOGIN_URL) ?>" target="_blank" rel="noopener">Open Portal</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
