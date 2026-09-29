// Mobile Menu Toggle
const menuToggle = document.getElementById('menuToggle');
const navMenu = document.getElementById('navMenu');

function setMenuOpen(open) {
    navMenu.classList.toggle('active', open);
    menuToggle.setAttribute('aria-expanded', String(open));
    menuToggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
}

menuToggle.addEventListener('click', () => {
    setMenuOpen(!navMenu.classList.contains('active'));
});

// Close mobile menu when a link is clicked
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        setMenuOpen(false);
    });
});

// Close mobile menu when clicking outside
document.addEventListener('click', (event) => {
    if (!event.target.closest('.navbar')) {
        setMenuOpen(false);
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Contact Form Handler
// Sends through Formspree once the form has an action="https://formspree.io/f/..."
// attribute. Until then it opens the visitor's email app with the message filled in,
// so nobody is ever told a message was sent when it wasn't.
const CONTACT_EMAIL = '10takshprajapati01@gmail.com';
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    const formStatus = document.getElementById('formStatus');
    const submitButton = contactForm.querySelector('button[type="submit"]');

    const showStatus = (type, text) => {
        formStatus.className = type;
        formStatus.textContent = text;
    };

    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();

        // Validation
        if (!name || !email || !subject || !message) {
            showStatus('error', 'Please fill in all fields.');
            return;
        }

        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            showStatus('error', 'Please enter a valid email address.');
            return;
        }

        const endpoint = contactForm.getAttribute('action');

        // No Formspree endpoint yet: hand the message to the visitor's email app
        if (!endpoint) {
            const body = `${message}\n\nFrom: ${name} <${email}>`;
            window.location.href = `mailto:${CONTACT_EMAIL}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            showStatus('info', `Your email app should open with this message ready to send. If it doesn't, email me at ${CONTACT_EMAIL}.`);
            return;
        }

        submitButton.disabled = true;
        submitButton.textContent = 'Sending...';

        try {
            const response = await fetch(endpoint, {
                method: 'POST',
                body: new FormData(contactForm),
                headers: { Accept: 'application/json' }
            });
            if (!response.ok) {
                throw new Error(`Formspree responded with ${response.status}`);
            }
            showStatus('success', 'Thank you! Your message was sent. I\'ll get back to you soon.');
            contactForm.reset();
        } catch (error) {
            console.error(error);
            showStatus('error', `Sorry, your message couldn't be sent. Please email me directly at ${CONTACT_EMAIL}.`);
        } finally {
            submitButton.disabled = false;
            submitButton.textContent = 'Send Message';
        }
    });
}

// Scroll Animation for Portfolio Items
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe portfolio items
document.querySelectorAll('.portfolio-item').forEach(item => {
    item.style.opacity = '0';
    observer.observe(item);
});

// Observe skill cards
document.querySelectorAll('.skill-card').forEach(card => {
    card.style.opacity = '0';
    observer.observe(card);
});

// Active nav link based on scroll position
window.addEventListener('scroll', () => {
    updateActiveNavLink();
});

function updateActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const scrollPosition = window.scrollY + 100;

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;

        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => link.classList.remove('active'));

            const activeLink = document.querySelector(`.nav-link[href="#${section.id}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    });
}

// Add keyboard navigation
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        setMenuOpen(false);
    }
});

// Lazy load images (optional enhancement)
if ('IntersectionObserver' in window) {
    const lazyImages = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => imageObserver.observe(img));
}

// Add ripple effect to buttons
const buttons = document.querySelectorAll('.btn');
buttons.forEach(button => {
    button.addEventListener('click', function (e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const ripple = document.createElement('span');
        ripple.style.position = 'absolute';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.style.width = '0';
        ripple.style.height = '0';
        ripple.style.background = 'rgba(255, 255, 255, 0.5)';
        ripple.style.borderRadius = '50%';
        ripple.style.pointerEvents = 'none';

        this.style.position = 'relative';
        this.style.overflow = 'hidden';
        this.appendChild(ripple);

        const size = Math.max(rect.width, rect.height) * 2;
        ripple.style.animation = `ripple 0.6s ease-out`;
        ripple.style.width = size + 'px';
        ripple.style.height = size + 'px';
        ripple.style.marginLeft = -size / 2 + 'px';
        ripple.style.marginTop = -size / 2 + 'px';

        setTimeout(() => ripple.remove(), 600);
    });
});

// Ripple animation
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(1);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Console message
console.log('%cWelcome to My Portfolio!', 'color: #6366f1; font-size: 20px; font-weight: bold;');
console.log('%cFeel free to explore and get in touch!', 'color: #8b5cf6; font-size: 14px;');
