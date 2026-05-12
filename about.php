<?php
$currentPage = 'about';
include 'includes/header.php';
?>

<section class="about-hero">
    <div class="container">
        <h1>About Me</h1>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Who I Am</h2>
                <p>I'm a passionate full-stack developer with over 5 years of experience in building web applications. I specialize in creating clean, efficient code and intuitive user interfaces.</p>
                <p>My journey in web development started with a curiosity about how websites work. Over the years, I've honed my skills in various technologies and frameworks, always focusing on delivering quality solutions that meet client needs.</p>
                
                <h3>My Approach</h3>
                <ul class="approach-list">
                    <li>Understanding client requirements deeply</li>
                    <li>Writing clean and maintainable code</li>
                    <li>Following best practices and design patterns</li>
                    <li>Continuous learning and improvement</li>
                </ul>
            </div>
            <div class="about-image">
                <img src="https://via.placeholder.com/400x500?text=Your+Photo" alt="Your Photo">
            </div>
        </div>
    </div>
</section>

<section class="timeline">
    <div class="container">
        <h2>Experience</h2>
        <div class="timeline-items">
            <div class="timeline-item">
                <div class="timeline-date">2023 - Present</div>
                <div class="timeline-content">
                    <h4>Senior Developer</h4>
                    <p>Led development of multiple full-stack applications, mentored junior developers, and implemented best practices.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2021 - 2023</div>
                <div class="timeline-content">
                    <h4>Full Stack Developer</h4>
                    <p>Developed and maintained web applications, improved performance, and collaborated with design teams.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2020 - 2021</div>
                <div class="timeline-content">
                    <h4>Junior Developer</h4>
                    <p>Started career building responsive websites, learning best practices, and contributing to team projects.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
