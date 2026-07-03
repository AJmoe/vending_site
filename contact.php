<?php
$page_title = 'Contact';
$page_description = 'Get in touch with Reliable Vending Solutions for technical support, agent applications and general enquiries.';

require __DIR__ . '/includes/config.php';

$enquiryTypes = ['General Enquiry', 'Technical Support', 'Become an Agent', 'Other'];
$defaultType = isset($_GET['type']) && $_GET['type'] === 'agent' ? 'Become an Agent' : 'General Enquiry';

$errors = [];
$success = false;
$name = '';
$email = '';
$phone = '';
$meterNumber = '';
$enquiryType = $defaultType;
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $meterNumber = trim($_POST['meter_number'] ?? '');
    $enquiryType = in_array($_POST['enquiry_type'] ?? '', $enquiryTypes, true) ? $_POST['enquiry_type'] : 'General Enquiry';
    $message = trim($_POST['message'] ?? '');

    if ($name === '') {
        $errors[] = 'Please enter your full name.';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if ($phone === '') {
        $errors[] = 'Please enter your phone number.';
    }
    if ($message === '') {
        $errors[] = 'Please enter a message.';
    }

    if (empty($errors)) {
        $subject = 'Website enquiry: ' . $enquiryType;
        $body = "Name: {$name}\n"
              . "Email: {$email}\n"
              . "Phone: {$phone}\n"
              . ($meterNumber !== '' ? "Meter number: {$meterNumber}\n" : '')
              . "Enquiry type: {$enquiryType}\n\n"
              . "Message:\n{$message}\n";
        $headers = 'From: ' . CONTACT_EMAIL . "\r\n" . 'Reply-To: ' . $email;

        // mail() requires a configured MTA on the server; sending failure
        // does not block confirming receipt to the visitor.
        @mail(CONTACT_EMAIL, $subject, $body, $headers);

        $success = true;
        $name = $email = $phone = $meterNumber = $message = '';
        $enquiryType = 'General Enquiry';
    }
}

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Contact</span>
        <h1>Get in touch with our team</h1>
        <p>Whether it's technical support, a corporate enquiry, or becoming an agent — we're here to help.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-form-card contact-form-card-wide" data-reveal>
            <h2>Send an Enquiry</h2>

            <?php if ($success): ?>
                <div class="form-success">Thank you — your message has been sent. Our team will get back to you shortly.</div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <div class="form-error">
                    <?php foreach ($errors as $error): ?>
                        <div><?= htmlspecialchars($error) ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form method="post" action="/contact.php" novalidate>
                <div class="form-row">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>" required>
                    </div>
                    <div class="form-field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($phone) ?>" required>
                    </div>
                    <div class="form-field">
                        <label for="enquiry_type">Enquiry Type</label>
                        <select id="enquiry_type" name="enquiry_type">
                            <?php foreach ($enquiryTypes as $type): ?>
                                <option value="<?= htmlspecialchars($type) ?>"<?= $enquiryType === $type ? ' selected' : '' ?>><?= htmlspecialchars($type) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-field">
                    <label for="meter_number">Meter Number (optional)</label>
                    <input type="text" id="meter_number" name="meter_number" value="<?= htmlspecialchars($meterNumber) ?>">
                </div>
                <div class="form-field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required><?= htmlspecialchars($message) ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Enquiry</button>
            </form>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="contact-info-grid" data-reveal-stagger>
            <div class="contact-details-card" data-reveal>
                <h2>Contact Details</h2>
                <div class="contact-detail-list">
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon"><?= icon('phone') ?></div>
                        <div class="contact-detail-text">
                            <div class="contact-detail-label">Phone</div>
                            <div class="contact-detail-value"><a href="tel:<?= htmlspecialchars(preg_replace('/[^+\d]/', '', CONTACT_PHONE)) ?>"><?= htmlspecialchars(CONTACT_PHONE) ?></a></div>
                        </div>
                    </div>
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon"><?= icon('message') ?></div>
                        <div class="contact-detail-text">
                            <div class="contact-detail-label">WhatsApp</div>
                            <div class="contact-detail-value"><a href="https://wa.me/<?= htmlspecialchars(preg_replace('/[^\d]/', '', CONTACT_WHATSAPP)) ?>" target="_blank" rel="noopener"><?= htmlspecialchars(CONTACT_WHATSAPP) ?></a></div>
                        </div>
                    </div>
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon"><?= icon('mail') ?></div>
                        <div class="contact-detail-text">
                            <div class="contact-detail-label">Support email</div>
                            <div class="contact-detail-value"><a href="mailto:<?= htmlspecialchars(CONTACT_EMAIL) ?>"><?= htmlspecialchars(CONTACT_EMAIL) ?></a></div>
                        </div>
                    </div>
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon"><?= icon('mail') ?></div>
                        <div class="contact-detail-text">
                            <div class="contact-detail-label">Sales &amp; enquiries</div>
                            <div class="contact-detail-value"><a href="mailto:<?= htmlspecialchars(CONTACT_SALES_EMAIL) ?>"><?= htmlspecialchars(CONTACT_SALES_EMAIL) ?></a></div>
                        </div>
                    </div>
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon"><?= icon('clock') ?></div>
                        <div class="contact-detail-text">
                            <div class="contact-detail-label">Office hours</div>
                            <div class="contact-detail-value"><?= htmlspecialchars(CONTACT_HOURS) ?></div>
                        </div>
                    </div>
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon"><?= icon('clock') ?></div>
                        <div class="contact-detail-text">
                            <div class="contact-detail-label">After-hours support</div>
                            <div class="contact-detail-value"><?= htmlspecialchars(CONTACT_AFTERHOURS) ?></div>
                        </div>
                    </div>
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon"><?= icon('map-pin') ?></div>
                        <div class="contact-detail-text">
                            <div class="contact-detail-label">Address</div>
                            <div class="contact-detail-value"><?= htmlspecialchars(CONTACT_ADDRESS) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-map-card" data-reveal>
                <h2>Find Us Here</h2>
                <div class="contact-map">
                    <iframe
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="<?= htmlspecialchars(MAP_EMBED_URL) ?>"
                        allowfullscreen
                        title="Reliable Vending Solutions location">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/assets/js/contact-form.js"></script>

<?php require __DIR__ . '/includes/footer.php'; ?>
