<?php
$page_title = 'Programs';
require_once 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container page-hero-content">
        <div class="breadcrumb">
            <a href="<?= BASE ?>/">Home</a>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
            Programs
        </div>
        <h1>Flight Training Programs</h1>
        <p>Comprehensive aviation courses designed to take you from the ground up — at your pace, on your schedule.</p>
    </div>
</section>

<!-- PROGRAMS -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom:0;">
            <span class="section-tag">All Programs</span>
            <h2 class="section-title">Find Your Path to the Cockpit</h2>
            <p class="section-desc">Every program is FAA Part 141 approved, fully structured, and backed by our 98% checkride pass rate guarantee.</p>
        </div>

        <div class="courses-page-grid">

            <!-- PPL -->
            <div class="course-full-card">
                <div class="course-full-header">
                    <div class="course-level-badge">Beginner</div>
                    <h3>Private Pilot License (PPL)</h3>
                    <p>The essential first certificate for any aspiring aviator. Learn to safely operate aircraft under visual flight rules.</p>
                </div>
                <div class="course-full-body">
                    <div class="course-meta">
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            6–8 Months
                        </div>
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            40+ Flight Hours
                        </div>
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                            From $8,500
                        </div>
                    </div>
                    <h4>What You'll Learn</h4>
                    <div class="course-modules">
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Aerodynamics & flight principles</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> VFR navigation and sectional charts</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Radio communications & ATC procedures</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Emergency procedures & decision-making</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Solo cross-country flights</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FAA written exam & checkride preparation</div>
                    </div>
                    <div class="course-full-footer">
                        <div>
                            <div class="price-label">Starting from</div>
                            <div class="price-value">$8,500</div>
                        </div>
                        <a href="<?= BASE ?>/contact" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- IR -->
            <div class="course-full-card">
                <div class="course-full-header" style="background:linear-gradient(135deg,#0f2447,#1d4ed8);">
                    <div class="course-level-badge">Intermediate</div>
                    <h3>Instrument Rating (IR)</h3>
                    <p>Fly in clouds, low visibility, and IFR conditions. A crucial rating for any serious pilot expanding their capabilities.</p>
                </div>
                <div class="course-full-body">
                    <div class="course-meta">
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            3–5 Months
                        </div>
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            50+ Instrument Hours
                        </div>
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                            From $6,800
                        </div>
                    </div>
                    <h4>What You'll Learn</h4>
                    <div class="course-modules">
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IFR regulations and procedures</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Instrument approaches (ILS, VOR, RNAV)</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Advanced avionics & glass cockpit</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Weather interpretation & TFRs</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Holding patterns & enroute navigation</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Simulator-based training sessions</div>
                    </div>
                    <div class="course-full-footer">
                        <div>
                            <div class="price-label">Starting from</div>
                            <div class="price-value">$6,800</div>
                        </div>
                        <a href="<?= BASE ?>/contact" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- CPL -->
            <div class="course-full-card">
                <div class="course-full-header" style="background:linear-gradient(135deg,#0a1628,#1e3a6e);">
                    <div class="course-level-badge">Advanced</div>
                    <h3>Commercial Pilot License (CPL)</h3>
                    <p>Get paid to fly. The commercial certificate opens the door to a professional aviation career.</p>
                </div>
                <div class="course-full-body">
                    <div class="course-meta">
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            12–18 Months
                        </div>
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            250+ Total Hours
                        </div>
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                            From $24,900
                        </div>
                    </div>
                    <h4>What You'll Learn</h4>
                    <div class="course-modules">
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Advanced commercial maneuvers</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Multi-engine operations (MEI add-on)</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> High-performance endorsements</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Crew resource management (CRM)</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Airline interview preparation</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Career placement assistance</div>
                    </div>
                    <div class="course-full-footer">
                        <div>
                            <div class="price-label">Starting from</div>
                            <div class="price-value">$24,900</div>
                        </div>
                        <a href="<?= BASE ?>/contact" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- CFI -->
            <div class="course-full-card">
                <div class="course-full-header" style="background:linear-gradient(135deg,#1e3a6e,#2563eb);">
                    <div class="course-level-badge">Professional</div>
                    <h3>Certified Flight Instructor (CFI)</h3>
                    <p>Share your passion and build flight hours by teaching the next generation of Eagle Elite pilots.</p>
                </div>
                <div class="course-full-body">
                    <div class="course-meta">
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            2–4 Months
                        </div>
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            Requires CPL
                        </div>
                        <div class="course-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                            From $4,500
                        </div>
                    </div>
                    <h4>What You'll Learn</h4>
                    <div class="course-modules">
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fundamentals of instruction (FOI)</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Lesson planning & lesson delivery</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Stall/spin awareness & aerobatics</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Stage checks & student evaluation</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FAA practical test standards</div>
                        <div class="course-module"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Instructor job placement at Eagle Elite</div>
                    </div>
                    <div class="course-full-footer">
                        <div>
                            <div class="price-label">Starting from</div>
                            <div class="price-value">$4,500</div>
                        </div>
                        <a href="<?= BASE ?>/contact" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <span class="section-tag" style="background:rgba(255,255,255,.1);color:var(--blue-200);">Not Sure Where to Start?</span>
        <h2 class="section-title">Let Us Help You Choose the Right Program</h2>
        <p class="section-desc">Our admissions advisors will help match you with the perfect program based on your goals, schedule, and budget.</p>
        <div class="cta-actions">
            <a href="<?= BASE ?>/contact" class="btn btn-primary btn-lg">Talk to an Advisor</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
