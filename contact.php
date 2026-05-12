<?php
$currentPage = 'contact';
include 'includes/header.php';
?>

<section class="contact-hero">
    <div class="container">
        <h1>Get In Touch</h1>
        <p>Have a question or want to work together? I'd love to hear from you.</p>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h2>Contact Information</h2>
                <div class="info-item">
                    <h4>Email</h4>
                    <p><a href="mailto:your.email@example.com">your.email@example.com</a></p>
                </div>
                <div class="info-item">
                    <h4>Phone</h4>
                    <p><a href="tel:+1234567890">+1 (234) 567-890</a></p>
                </div>
                <div class="info-item">
                    <h4>Location</h4>
                    <p>City, Country</p>
                </div>
                <div class="social-links">
                    <a href="#" class="social-icon" title="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="social-icon" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="social-icon" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <form id="contactForm" class="contact-form" method="POST" action="contact_handler.php">
                <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" required>
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Message</button>
                <div id="formStatus"></div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
