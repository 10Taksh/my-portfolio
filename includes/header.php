<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($currentPage) ? ucfirst($currentPage) . ' | ' : ''; ?>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.php" class="logo">Portfolio</a>
                <button class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="index.php" class="nav-link <?php echo $currentPage === 'home' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="nav-link <?php echo $currentPage === 'about' ? 'active' : ''; ?>">About</a></li>
                    <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                    <li><a href="contact.php" class="nav-link <?php echo $currentPage === 'contact' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
