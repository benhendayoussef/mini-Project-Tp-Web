<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : "Animal & Veterinary Project"; ?></title>
    <link rel="stylesheet" href="../../../public/Styles/Navbar.css">
    <link rel="icon" href="../../../public/Assets/pets_logo.png" type="image/png">
    <?php if (isset($additionalStyles)) : ?>
        <?php foreach ($additionalStyles as $style) : ?>
            <link rel="stylesheet" href="<?= $style; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
<header class="navbar">
    <div class="logo">
        <img id="site-logo" src="/mini-Project-Tp-Web/public/Assets/pets_logo.png" alt="Site Logo">
    </div>
    <div class="menu">
        <nav class="nav-links">
            <a href="/mini-Project-Tp-Web/public/index.php" class="nav-link home-link">Home</a>
            <a href="/mini-Project-Tp-Web/app/views/Pages/PetsInfo.php" class="nav-link veterinary-link">Info</a>
            <a href="/mini-Project-Tp-Web/app/views/Pages/Services.php" class="nav-link contact-link">Services</a>
            <a href="/mini-Project-Tp-Web/app/views/Pages/BookNow.php" class="nav-link animals-link">Book Now</a>
        </nav>
    </div>
    <div class="nav-buttons">
    <button class="btn sign-in" onclick="location.href='/mini-Project-Tp-Web/app/views/users/login.php'">Sign In</button>
    <a class="btn sign-up" onclick="location.href='/mini-Project-Tp-Web/app/views/users/add.php'" >Sign Up</a>
    </div>
</header>
<main>
    <?php if (isset($content)) : ?>
        <?= $content; ?>
    <?php endif; ?>
</main>
<script src="../../../public/Code/Navbar.js"></script>
<?php if (isset($additionalScripts)) : ?>
    <?php foreach ($additionalScripts as $script) : ?>
        <script src="<?= $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>
