</main>

<?php if (empty($hide_cta_band)): ?>
<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <h2>Ready to simplify your utility operations?</h2>
            <p>Talk to our team about tokens, corporate vending or becoming a partner.</p>
        </div>
        <div class="cta-band-actions">
            <a class="btn btn-primary" href="/contact.php">Get Started</a>
        </div>
    </div>
</section>
<?php endif; ?>

<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <div class="footer-logo">
                <img src="/assets/images/logo-icon-white.png" alt="" width="32" height="32" aria-hidden="true">
                <span class="logo-text">Reliable Vending Solutions</span>
            </div>
            <p class="footer-tagline"><?= htmlspecialchars(SITE_TAGLINE) ?></p>

            <div class="footer-social">
                <?php foreach (SOCIAL_LINKS as $key => $social): ?>
                <a class="footer-social-link footer-social-<?= htmlspecialchars($key) ?>" href="<?= htmlspecialchars($social['url']) ?>" target="_blank" rel="noopener" aria-label="<?= htmlspecialchars($social['label']) ?>">
                    <?= icon($social['icon']) ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <nav class="footer-nav" aria-label="Footer">
            <h3>Site</h3>
            <ul>
                <?php foreach (NAV_LINKS as $slug => $label): ?>
                <li><a href="<?= htmlspecialchars(nav_href($slug)) ?>"><?= htmlspecialchars($label) ?></a></li>
                <?php endforeach; ?>
                <li><a href="<?= htmlspecialchars(PORTAL_LOGIN_URL) ?>" target="_blank" rel="noopener">Vending Portal</a></li>
            </ul>
        </nav>

        <div class="footer-contact">
            <h3>Contact</h3>
            <ul>
                <li><a href="tel:<?= htmlspecialchars(preg_replace('/[^+\d]/', '', CONTACT_PHONE)) ?>"><?= htmlspecialchars(CONTACT_PHONE) ?></a></li>
                <li><a href="mailto:<?= htmlspecialchars(CONTACT_EMAIL) ?>"><?= htmlspecialchars(CONTACT_EMAIL) ?></a></li>
            </ul>
        </div>

        <div class="footer-hours">
            <div class="footer-hours-icon"><?= icon('clock') ?></div>
            <h3>Office Hours</h3>
            <div class="footer-hours-row">
                <span>Mon – Fri</span>
                <span>08:00 – 17:00</span>
            </div>
            <p class="footer-hours-note"><?= htmlspecialchars(CONTACT_AFTERHOURS) ?></p>
        </div>
    </div>

    <div class="container footer-bottom">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars(COMPANY_LEGAL_NAME) ?>. All rights reserved.</p>
        <p class="footer-credit"><a href="https://ajmoe.github.io/Nexora-Synth/" target="_blank" rel="noopener">Website By Nexora Synth</a></p>
    </div>
</footer>

<script src="/assets/js/animations.js"></script>
<script src="/assets/js/hero-carousel.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
