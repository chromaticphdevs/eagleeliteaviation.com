<?php
$page_title = 'About Us';
require_once 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container page-hero-content">
        <div class="breadcrumb">
            <a href="<?= BASE ?>/">Home</a>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
            About Us
        </div>
        <h1>About Eagle Elite Aviation</h1>
        <p>A young school built on passion — shaping the next generation of Filipino aviators one flight at a time.</p>
    </div>
</section>

<!-- MISSION / VISION / VALUES -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <span class="section-tag">Our Foundation</span>
            <h2 class="section-title">Guided by Purpose, Driven by Passion</h2>
            <p class="section-desc">Every decision we make is rooted in our commitment to safety, excellence, and your success as an aviator.</p>
        </div>
        <div class="mission-grid">
            <div class="mission-card">
                <div class="mission-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                </div>
                <h3>Our Mission</h3>
                <p>To provide world-class aviation education that empowers aspiring pilots to achieve their dreams safely, confidently, and professionally — from first flight to final destination.</p>
            </div>
            <div class="mission-card">
                <div class="mission-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <h3>Our Vision</h3>
                <p>To be the leading aviation training institution in North America, recognized for producing the safest, most skilled, and career-ready pilots in the industry.</p>
            </div>
            <div class="mission-card">
                <div class="mission-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>Our Values</h3>
                <p>Safety first. Integrity always. Innovation constantly. We hold ourselves to the highest standards so you can confidently hold the controls of any aircraft.</p>
            </div>
        </div>
    </div>
</section>

<!-- STORY -->
<section class="section" style="background:var(--gray-50);">
    <div class="container">
        <div class="why-grid">
            <div>
                <span class="section-tag">Our Story</span>
                <h2 class="section-title">Born from a Dream,<br>Built for Filipinos</h2>
                <p class="section-desc" style="margin-bottom:24px;">Eagle Elite Aviation was founded in 2020 by Capt. Miguel Ramos — a Filipino commercial pilot who trained abroad and came back with one mission: make aviation accessible to every aspiring Filipino.</p>
                <p style="color:var(--gray-600);font-size:.95rem;margin-bottom:24px;line-height:1.8;">We started with two instructors and one aircraft. Today we're a growing family of passionate aviators, ground staff, and smiling cabin crew alumni who all believe the skies belong to Filipinos too. Every student here is treated like family — hindi basta numero lang.</p>
                <p style="color:var(--gray-600);font-size:.95rem;line-height:1.8;">Over 500 students have already taken that first brave step with us. We may be young, but our results speak for themselves — a 96% first-time checkride pass rate and graduates now flying with major airlines across Asia and the Middle East.</p>
                <div style="margin-top:36px;">
                    <a href="<?= BASE ?>/contact" class="btn btn-primary">Start Your Journey</a>
                </div>
            </div>
            <div class="why-image-wrap">
                <div class="why-image-box" style="background:none;">
                    <img src="<?= BASE ?>/assets/images/about.jpg" alt="Pilot and student by aircraft" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="why-badge-float">
                    <div class="why-badge-num">2020</div>
                    <div class="why-badge-text">Year<br>Founded</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="features-strip">
    <div class="container">
        <div class="features-strip-grid">
            <div class="strip-item">
                <div class="strip-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                </div>
                <div>
                    <div class="strip-value">500+ Students</div>
                    <div class="strip-label">And Growing Fast</div>
                </div>
            </div>
            <div class="strip-item">
                <div class="strip-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <div>
                    <div class="strip-value">8 Aircraft Fleet</div>
                    <div class="strip-label">Modern & Maintained</div>
                </div>
            </div>
            <div class="strip-item">
                <div class="strip-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/></svg>
                </div>
                <div>
                    <div class="strip-value">1 Full Simulator</div>
                    <div class="strip-label">IFR-Ready Training</div>
                </div>
            </div>
            <div class="strip-item">
                <div class="strip-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <div>
                    <div class="strip-value">96% Pass Rate</div>
                    <div class="strip-label">First-Time Checkride</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <span class="section-tag">Meet the Team</span>
            <h2 class="section-title">Your Instructors & Guides</h2>
            <p class="section-desc">A small, dedicated team of Filipino aviators and cabin crew professionals — each one personally committed to your success.</p>
        </div>
        <div class="team-grid">
            <div class="team-card">
                <div class="team-avatar" style="padding:0;overflow:hidden;">
                    <img src="<?= BASE ?>/assets/images/pilot-portrait.jpg" alt="Capt. Miguel Ramos" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="team-info">
                    <div class="team-name">Capt. Miguel Ramos</div>
                    <div class="team-role">Founder & Chief Instructor</div>
                    <div class="team-cert">ATP • CFII • MEI • 6,400+ hrs</div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="padding:0;overflow:hidden;">
                    <img src="<?= BASE ?>/assets/images/cockpit.jpg" alt="Capt. Andrei Cruz" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="team-info">
                    <div class="team-name">Capt. Andrei Cruz</div>
                    <div class="team-role">Commercial & IFR Instructor</div>
                    <div class="team-cert">CPL • CFII • 4,100+ hrs</div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="padding:0;overflow:hidden;">
                    <img src="<?= BASE ?>/assets/images/simulator.jpg" alt="FO Lara Villanueva" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="team-info">
                    <div class="team-name">FO Lara Villanueva</div>
                    <div class="team-role">PPL & Ground School Lead</div>
                    <div class="team-cert">CPL • CFI • 2,800+ hrs</div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="padding:0;overflow:hidden;">
                    <img src="<?= BASE ?>/assets/images/attendant.jpg" alt="Jana Bautista" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="team-info">
                    <div class="team-name">Jana Bautista</div>
                    <div class="team-role">Student Adviser & FA Alumni</div>
                    <div class="team-cert">PPL Grad • Cabin Crew 5 yrs</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <span class="section-tag" style="background:rgba(255,255,255,.1);color:var(--blue-200);">Join Our Family</span>
        <h2 class="section-title">Become the Next Eagle Elite Pilot</h2>
        <p class="section-desc">Our admissions team is ready to help you find the right program and take that first step toward the cockpit.</p>
        <div class="cta-actions">
            <a href="<?= BASE ?>/contact" class="btn btn-primary btn-lg">Contact Admissions</a>
            <a href="<?= BASE ?>/courses" class="btn btn-outline btn-lg">View Programs</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
