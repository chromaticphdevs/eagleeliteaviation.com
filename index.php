<?php
$page_title = 'Home';
require_once 'includes/header.php';
?>

<!-- HERO -->
<section class="hero" style="background-image:url('<?= BASE ?>/assets/images/hero-bg.jpg');background-size:cover;background-position:center;">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                FAA Part 141 Certified Flight School
            </div>
            <h1 class="hero-title">
                Soar to New<br>
                <span class="highlight">Heights</span> with<br>
                Eagle Elite
            </h1>
            <p class="hero-desc">
                World-class aviation training for aspiring pilots. From private licenses to commercial certifications — your sky-high career starts here.
            </p>
            <div class="hero-actions">
                <a href="<?= BASE ?>/courses" class="btn btn-primary btn-lg">Explore Programs</a>
                <a href="<?= BASE ?>/about" class="btn btn-outline btn-lg">Learn More</a>
            </div>
            <div class="hero-stats">
                <div>
                    <div class="stat-num">500+</div>
                    <div class="stat-label">Pilots Trained</div>
                </div>
                <div>
                    <div class="stat-num">96%</div>
                    <div class="stat-label">Pass Rate</div>
                </div>
                <div>
                    <div class="stat-num">5+</div>
                    <div class="stat-label">Years Strong</div>
                </div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="plane-wrapper">
                <div class="plane-circle">
                    <svg class="plane-svg" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Airplane body -->
                        <ellipse cx="100" cy="100" rx="60" ry="16" fill="rgba(255,255,255,0.08)" transform="rotate(-30 100 100)"/>
                        <!-- Fuselage -->
                        <path d="M50 110 Q80 95 130 90 L155 88 Q162 88 162 94 Q162 100 155 102 L130 104 Q80 110 50 120 Z" fill="white" opacity="0.9"/>
                        <!-- Main wing -->
                        <path d="M95 96 L80 60 L90 60 L115 92 Z" fill="rgba(147,197,253,0.9)"/>
                        <path d="M95 96 L80 132 L90 133 L115 100 Z" fill="rgba(147,197,253,0.7)"/>
                        <!-- Tail fin -->
                        <path d="M55 112 L48 88 L58 90 L62 112 Z" fill="rgba(147,197,253,0.8)"/>
                        <path d="M55 116 L45 128 L55 126 L62 116 Z" fill="rgba(147,197,253,0.6)"/>
                        <!-- Window row -->
                        <circle cx="138" cy="96" r="4" fill="rgba(96,165,250,0.6)"/>
                        <circle cx="124" cy="97" r="4" fill="rgba(96,165,250,0.6)"/>
                        <circle cx="110" cy="99" r="4" fill="rgba(96,165,250,0.6)"/>
                        <!-- Clouds -->
                        <ellipse cx="40" cy="50" rx="18" ry="9" fill="rgba(255,255,255,0.06)"/>
                        <ellipse cx="165" cy="145" rx="22" ry="10" fill="rgba(255,255,255,0.05)"/>
                        <!-- Path trail -->
                        <path d="M30 160 Q70 140 110 120" stroke="rgba(96,165,250,0.2)" stroke-width="1.5" stroke-dasharray="4 6"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES STRIP -->
<section class="features-strip">
    <div class="container">
        <div class="features-strip-grid">
            <div class="strip-item">
                <div class="strip-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div>
                    <div class="strip-label">Certification</div>
                    <div class="strip-value">FAA Part 141</div>
                </div>
            </div>
            <div class="strip-item">
                <div class="strip-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div>
                    <div class="strip-label">Flight Hours</div>
                    <div class="strip-value">12,000+ Logged</div>
                </div>
            </div>
            <div class="strip-item">
                <div class="strip-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <div>
                    <div class="strip-label">Instructors</div>
                    <div class="strip-value">8 Certified CFIs</div>
                </div>
            </div>
            <div class="strip-item">
                <div class="strip-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <div>
                    <div class="strip-label">Simulators</div>
                    <div class="strip-value">IFR Simulator</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section">
    <div class="container">
        <div class="why-grid">
            <div class="why-image-wrap">
                <div class="why-image-box" style="background:none;">
                    <img src="<?= BASE ?>/assets/images/pilots.jpg" alt="Pilots in cockpit" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="why-badge-float">
                    <div class="why-badge-num">96%</div>
                    <div class="why-badge-text">First-time<br>Pass Rate</div>
                </div>
            </div>

            <div class="why-content">
                <span class="section-tag">Why Eagle Elite</span>
                <h2 class="section-title">Training Excellence<br>Above the Clouds</h2>
                <p class="section-desc">We combine cutting-edge simulators, experienced instructors, and a proven curriculum to prepare you for a successful aviation career.</p>
                <div class="why-features">
                    <div class="why-feature">
                        <div class="why-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </div>
                        <div>
                            <h4>FAA-Approved Curriculum</h4>
                            <p>Our Part 141 certification means rigorous standards and recognized credentials worldwide.</p>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        </div>
                        <div>
                            <h4>State-of-the-Art Facilities</h4>
                            <p>Train in modern aircraft and Level D full-motion simulators used by major airlines.</p>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        </div>
                        <div>
                            <h4>Career Placement Support</h4>
                            <p>Direct partnerships with regional and commercial airlines give you a clear path to the cockpit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COURSES PREVIEW -->
<section class="section courses-section">
    <div class="container">
        <div class="text-center">
            <span class="section-tag">Our Programs</span>
            <h2 class="section-title">Chart Your Flight Path</h2>
            <p class="section-desc">From your first flight to an airline career, we offer comprehensive programs for every stage of your aviation journey.</p>
        </div>
        <div class="courses-grid">
            <div class="course-card">
                <div class="course-card-header">
                    <div class="course-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
                    </div>
                    <h3>Private Pilot License</h3>
                    <div class="course-duration">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        6–8 Months
                    </div>
                </div>
                <div class="course-body">
                    <p>Your gateway to the skies. Learn to fly solo and with passengers under VFR conditions in this foundational program.</p>
                    <div class="course-highlights">
                        <div class="course-highlight">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            40+ flight hours
                        </div>
                        <div class="course-highlight">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Ground school included
                        </div>
                        <div class="course-highlight">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            FAA written & checkride prep
                        </div>
                    </div>
                    <div class="course-price">
                        <div>
                            <div class="price-label">Starting from</div>
                            <div class="price-value">$8,500</div>
                        </div>
                        <a href="<?= BASE ?>/courses" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="course-card">
                <div class="course-card-header">
                    <div class="course-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 6v16l7-4 8 4 7-4V2l-7 4-8-4-7 4z"/><path d="M8 2v16"/><path d="M16 6v16"/></svg>
                    </div>
                    <h3>Instrument Rating</h3>
                    <div class="course-duration">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        3–5 Months
                    </div>
                </div>
                <div class="course-body">
                    <p>Fly through clouds and low visibility. Master IFR flight and expand your capabilities as a pilot significantly.</p>
                    <div class="course-highlights">
                        <div class="course-highlight">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            50+ instrument hours
                        </div>
                        <div class="course-highlight">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Advanced avionics training
                        </div>
                        <div class="course-highlight">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Simulator sessions included
                        </div>
                    </div>
                    <div class="course-price">
                        <div>
                            <div class="price-label">Starting from</div>
                            <div class="price-value">$6,800</div>
                        </div>
                        <a href="<?= BASE ?>/courses" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="course-card">
                <div class="course-card-header">
                    <div class="course-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                    </div>
                    <h3>Commercial Pilot</h3>
                    <div class="course-duration">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        12–18 Months
                    </div>
                </div>
                <div class="course-body">
                    <p>Turn your passion into a profession. Our commercial program builds the hours and skills needed for a paid flying career.</p>
                    <div class="course-highlights">
                        <div class="course-highlight">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            250+ total flight hours
                        </div>
                        <div class="course-highlight">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Multi-engine training
                        </div>
                        <div class="course-highlight">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Airline partnership pathways
                        </div>
                    </div>
                    <div class="course-price">
                        <div>
                            <div class="price-label">Starting from</div>
                            <div class="price-value">$24,900</div>
                        </div>
                        <a href="<?= BASE ?>/courses" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin-top:40px;">
            <a href="<?= BASE ?>/courses" class="btn btn-primary btn-lg">View All Programs</a>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <span class="section-tag">Student Stories</span>
            <h2 class="section-title">Words from Our Pilots</h2>
            <p class="section-desc">Hear from graduates who turned their dream of flying into a rewarding career.</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="stars">
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <p class="testimonial-text">"Noon hindi ko inakala na magiging piloto ako. Yung mga instructors dito sobrang patient at maliwanag mag-explain. Ngayon, first officer na ako — grabe pa rin sa akin 'yan!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">MR</div>
                    <div>
                        <div class="author-name">Marco Reyes</div>
                        <div class="author-role">First Officer, Cebu Pacific</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="stars">
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <p class="testimonial-text">"As a Pinay, I was nervous about entering aviation. Eagle Elite made me feel so welcome from day one. The team believed in me even when I doubted myself. Now I'm living my dream at 28,000 feet!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar" style="background:linear-gradient(135deg,#be185d,#ec4899);">KS</div>
                    <div>
                        <div class="author-name">Kyla Santos</div>
                        <div class="author-role">Flight Attendant & PPL Graduate</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="stars">
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <p class="testimonial-text">"Sinabi ng lahat na mahirap ang commercial license. Sa Eagle Elite, step by step nila akong ginabayan. Nag-pass ako ng checkride sa unang try. Salamat sa buong team!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar" style="background:linear-gradient(135deg,#0369a1,#0ea5e9);">JC</div>
                    <div>
                        <div class="author-name">Jose Corpuz</div>
                        <div class="author-role">Commercial Pilot, Philippine Airlines</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <span class="section-tag" style="background:rgba(255,255,255,.1);color:var(--blue-200);">Ready to Fly?</span>
        <h2 class="section-title">Begin Your Aviation Journey Today</h2>
        <p class="section-desc">Spots are limited each intake. Reserve your place and take the first step toward your pilot certificate.</p>
        <div class="cta-actions">
            <a href="<?= BASE ?>/contact" class="btn btn-primary btn-lg">Apply Now</a>
            <a href="<?= BASE ?>/courses" class="btn btn-outline btn-lg">Browse Programs</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
