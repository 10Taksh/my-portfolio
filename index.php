<?php
$currentPage = 'home';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Hi, I'm Your Name</h1>
            <p class="hero-subtitle">Full Stack Developer | Creative Problem Solver</p>
            <a href="#portfolio" class="btn btn-primary">View My Work</a>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <h2>Featured Projects</h2>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <div class="portfolio-image">
                    <img src="https://via.placeholder.com/300x200?text=Project+1" alt="Project 1">
                </div>
                <div class="portfolio-content">
                    <h3>Project One</h3>
                    <p>A web application built with PHP and MySQL for managing user data efficiently.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">JavaScript</span>
                    </div>
                    <a href="#" class="link">View Project →</a>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <img src="https://via.placeholder.com/300x200?text=Project+2" alt="Project 2">
                </div>
                <div class="portfolio-content">
                    <h3>Project Two</h3>
                    <p>An e-commerce platform with payment integration and inventory management system.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">API</span>
                        <span class="tag">Bootstrap</span>
                    </div>
                    <a href="#" class="link">View Project →</a>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <img src="https://via.placeholder.com/300x200?text=Project+3" alt="Project 3">
                </div>
                <div class="portfolio-content">
                    <h3>Project Three</h3>
                    <p>A content management system with user authentication and role-based access control.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">CMS</span>
                        <span class="tag">Security</span>
                    </div>
                    <a href="#" class="link">View Project →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills">
    <div class="container">
        <h2>Skills & Technologies</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <h4>Backend</h4>
                <ul>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>REST APIs</li>
                    <li>Node.js</li>
                </ul>
            </div>
            <div class="skill-card">
                <h4>Frontend</h4>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JavaScript</li>
                    <li>Bootstrap</li>
                </ul>
            </div>
            <div class="skill-card">
                <h4>Tools</h4>
                <ul>
                    <li>Git</li>
                    <li>Docker</li>
                    <li>VS Code</li>
                    <li>Postman</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <h2>Let's Work Together</h2>
        <p>I'm always interested in hearing about new projects and opportunities.</p>
        <a href="contact.php" class="btn btn-primary">Get In Touch</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
