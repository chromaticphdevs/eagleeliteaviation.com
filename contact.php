<?php
$page_title = 'Contact';
require_once 'includes/config.php';

$success = false;
$error   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim(htmlspecialchars($_POST['name']    ?? '', ENT_QUOTES));
    $email   = trim(htmlspecialchars($_POST['email']   ?? '', ENT_QUOTES));
    $program = trim(htmlspecialchars($_POST['program'] ?? '', ENT_QUOTES));
    $message = trim(htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES));

    if (!$name || !$email || !$message) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        $success = true;
    }
}

require_once 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container page-hero-content">
        <div class="breadcrumb">
            <a href="<?= BASE ?>/">Home</a>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
            Contact
        </div>
        <h1>Get in Touch</h1>
        <p>We're a small, passionate team — and we personally reply to every message. Don't hesitate to reach out!</p>
    </div>
</section>

<!-- CONTACT -->
<section class="section">
    <div class="container">
        <div class="contact-grid">
            <!-- Left: Info -->
            <div>
                <span class="section-tag">Reach Us</span>
                <h2 class="section-title" style="font-size:1.8rem;">We'd Love to<br>Hear from You</h2>
                <p class="section-desc">Whether you're ready to enroll or just curious about flying, drop us an email — we typically reply within the day.</p>

                <div class="contact-info-items">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <h4>General Inquiries</h4>
                            <p>info@eagleeliteaviation.com</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <h4>Admissions & Enrollment</h4>
                            <p>admissions@eagleeliteaviation.com</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <h4>Response Time</h4>
                            <p>We reply within 24 hours,<br>usually much sooner!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="contact-form-card">
                <h3>Send Us a Message</h3>

                <?php if ($success): ?>
                <div class="success-msg" style="display:block;">
                    Salamat, <?= htmlspecialchars(trim($_POST['name'] ?? 'there')) ?>! We received your message and will get back to you shortly. 🛫
                </div>
                <?php elseif ($error): ?>
                <div style="background:#fef2f2;border:1px solid #fca5a5;color:#991b1b;padding:14px 20px;border-radius:10px;font-size:.9rem;margin-bottom:20px;">
                    <?= $error ?>
                </div>
                <?php endif; ?>

                <?php if (!$success): ?>
                <form id="contact-form" method="POST" action="<?= BASE ?>/contact" novalidate>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name <span style="color:#ef4444">*</span></label>
                            <input type="text" id="name" name="name" placeholder="Juan dela Cruz" required
                                   value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address <span style="color:#ef4444">*</span></label>
                            <input type="email" id="email" name="email" placeholder="juan@example.com" required
                                   value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="program">Program of Interest</label>
                        <select id="program" name="program">
                            <option value="">Select a program...</option>
                            <option value="ppl" <?= (($_POST['program'] ?? '') === 'ppl') ? 'selected' : '' ?>>Private Pilot License</option>
                            <option value="ir"  <?= (($_POST['program'] ?? '') === 'ir')  ? 'selected' : '' ?>>Instrument Rating</option>
                            <option value="cpl" <?= (($_POST['program'] ?? '') === 'cpl') ? 'selected' : '' ?>>Commercial Pilot License</option>
                            <option value="cfi" <?= (($_POST['program'] ?? '') === 'cfi') ? 'selected' : '' ?>>Certified Flight Instructor</option>
                            <option value="other" <?= (($_POST['program'] ?? '') === 'other') ? 'selected' : '' ?>>Other / Not Sure Yet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message <span style="color:#ef4444">*</span></label>
                        <textarea id="message" name="message" placeholder="Tell us about your aviation goals, experience level, or any questions you have. We love hearing from aspiring pilots!"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg form-submit">Send Message</button>
                    <div id="success-msg" class="success-msg">Your message has been sent!</div>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section" style="background:var(--gray-50);padding:64px 0;">
    <div class="container">
        <div class="text-center">
            <span class="section-tag">FAQ</span>
            <h2 class="section-title" style="font-size:1.9rem;">Common Questions</h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px;margin-top:48px;">
            <?php
            $faqs = [
                ['Do I need any experience to start?', 'None at all! If you\'ve always dreamed of flying, that\'s enough. We welcome complete beginners and walk you through every step of the process.'],
                ['How long does it take to get a PPL?', 'Most of our students finish in 6–8 months going part-time. If you can commit full-time, some finish in as little as 3 months.'],
                ['What aircraft will I train on?', 'We have Cessna 172s for primary training and a Piper Arrow for advanced courses — all well-maintained with modern avionics.'],
                ['Do you offer payment plans?', 'Yes! We know training is an investment. We offer flexible payment options to make your dream more accessible. Email admissions to learn more.'],
            ];
            foreach ($faqs as [$q, $a]):
            ?>
            <div style="background:white;border-radius:var(--radius);padding:28px;border:1px solid var(--gray-100);">
                <h4 style="color:var(--blue-900);margin-bottom:10px;font-weight:700;"><?= $q ?></h4>
                <p style="font-size:.9rem;color:var(--gray-600);"><?= $a ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
