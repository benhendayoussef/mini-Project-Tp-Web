<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier Interface</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
        // Function to retrieve cookies as an object
        function getCookies() {
            const cookies = {};
            document.cookie.split(';').forEach(cookie => {
                const [key, value] = cookie.split('=');
                cookies[key.trim()] = decodeURIComponent(value);
            });
            return cookies;
        }

        // Function to populate the dropdown
        function populatePanier() {
            const cookies = getCookies();
            const panierDropdown = document.getElementById('panierDropdown');

            // Clear previous items
            panierDropdown.innerHTML = '';

            // Check if the "panier" cookie exists
            if (cookies.panier) {
                const items = JSON.parse(cookies.panier);

                items.forEach(item => {
                    const li = document.createElement('li');
                    li.className = 'dropdown-item';
                    li.textContent = `${item.name} - ${item.quantity}`;
                    panierDropdown.appendChild(li);
                });
            } else {
                const li = document.createElement('li');
                li.className = 'dropdown-item';
                li.textContent = 'Panier is empty.';
                panierDropdown.appendChild(li);
            }
        }

        // Populate the panier dropdown on page load
        window.onload = populatePanier;
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Shop</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPanier" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            🛒 Panier
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPanier" id="panierDropdown">
                            <!-- Items will be dynamically added here -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Shop</h1>
        <button class="btn btn-primary" onclick="addItemToPanier('Item 1', 1)">Add Item 1</button>
        <button class="btn btn-primary" onclick="addItemToPanier('Item 2', 2)">Add Item 2</button>
    </div>

    <script>
        // Function to add an item to the panier
        function addItemToPanier(name, quantity) {
            const cookies = getCookies();

            // Retrieve existing items or initialize a new array
            const items = cookies.panier ? JSON.parse(cookies.panier) : [];

            // Check if the item already exists
            const existingItem = items.find(item => item.name === name);
            if (existingItem) {
                existingItem.quantity += quantity;
            } else {
                items.push({ name, quantity });
            }

            // Update the cookie
            document.cookie = `panier=${encodeURIComponent(JSON.stringify(items))}; path=/; max-age=${60 * 60 * 24 * 7}`;

            // Refresh the dropdown
            populatePanier();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
