// Header scroll effect
const header = document.getElementById('site-header');
window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 40);
});

// Mobile hamburger menu
const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('main-nav');
if (hamburger && nav) {
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        nav.classList.toggle('open');
        document.body.style.overflow = nav.classList.contains('open') ? 'hidden' : '';
    });
    nav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('open');
            nav.classList.remove('open');
            document.body.style.overflow = '';
        });
    });
}

// Contact form
const form = document.getElementById('contact-form');
if (form) {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = form.querySelector('.form-submit');
        btn.disabled = true;
        btn.textContent = 'Sending...';
        setTimeout(() => {
            form.reset();
            btn.disabled = false;
            btn.textContent = 'Send Message';
            const msg = document.getElementById('success-msg');
            if (msg) { msg.style.display = 'block'; setTimeout(() => msg.style.display = 'none', 5000); }
        }, 1200);
    });
}

// Scroll reveal
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('.course-card, .testimonial-card, .mission-card, .team-card, .why-feature, .course-full-card').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(24px)';
    el.style.transition = 'opacity .5s ease, transform .5s ease';
    observer.observe(el);
});
