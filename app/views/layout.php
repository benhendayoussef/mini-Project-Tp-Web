<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : "Animal & Veterinary Project"; ?></title>
    <link rel="stylesheet" href="/mini-Project-Tp-Web/public/Styles/Navbar.css">
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
            <a href="/mini-Project-Tp-Web/app/views/Items/add.php" class="nav-link contact-link">Services</a>
            <a href="/mini-Project-Tp-Web/app/views/Pages/BookNow.php" class="nav-link animals-link">Book Now</a>
        </nav>
    </div>
    <div class="nav-buttons">
        <div class="panier-container">
            <button class="panier-button" onclick="toggleDropdown()">🛒 Panier</button>
            <ul class="dropdown-content" id="panierDropdown">
                <li class="text-center">Your panier is empty.</li>
            </ul>
        </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function getCookies() {
        const cookies = {};
        document.cookie.split(';').forEach(cookie => {
            const [key, value] = cookie.split('=');
            cookies[key.trim()] = decodeURIComponent(value);
        });
        return cookies;
    }

    function addToPanier(itemName, itemQuantity) {
        const cookies = getCookies();
        const panier = cookies.panier ? JSON.parse(cookies.panier) : [];

        let itemExists = false;
        panier.forEach(item => {
            if (item.name === itemName) {
                item.quantity += itemQuantity;  
                                itemExists = true;
            }
        });

        if (!itemExists) {
            panier.push({ name: itemName, quantity: itemQuantity });
        }

        document.cookie = `panier=${encodeURIComponent(JSON.stringify(panier))}; path=/; max-age=${7 * 24 * 60 * 60}`;

        populatePanier();
    }

    function populatePanier() {
        const cookies = getCookies();
        const panierDropdown = document.getElementById('panierDropdown');
        panierDropdown.innerHTML = ''; 

        if (cookies.panier) {
            const items = JSON.parse(cookies.panier);
            items.forEach(item => {
                const li = document.createElement('li');
                li.className = 'dropdown-item';
                li.textContent = `${item.name} - Quantity: ${item.quantity}`;
                panierDropdown.appendChild(li);
            });

            const clearButton = document.createElement('li');
            clearButton.className = 'dropdown-item text-center';
            clearButton.innerHTML = '<button class="btn btn-danger btn-sm" onclick="clearPanier()">Clear Panier</button>';
            panierDropdown.appendChild(clearButton);
        } else {
            const li = document.createElement('li');
            li.className = 'dropdown-item text-center';
            li.textContent = 'Your panier is empty.';
            panierDropdown.appendChild(li);
        }
    }

    function clearPanier() {
        document.cookie = 'panier=; path=/; max-age=0';

        populatePanier();
    }

    function toggleDropdown() {
        const panierDropdown = document.getElementById('panierDropdown');
        panierDropdown.style.display = panierDropdown.style.display === 'block' ? 'none' : 'block';
    }

    window.onload = populatePanier;
</script>

<?php if (isset($additionalScripts)) : ?>
    <?php foreach ($additionalScripts as $script) : ?>
        <script src="<?= $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>
