<?php
require_once __DIR__ . '/../../controllers/ItemController.php';

$controller = new ItemController();
$items = $controller->getItems(); 
?>

<?php if (!empty($items)): ?>
    <h2 style="text-align: center; margin-top: 20px;">Saved Items</h2>
    <table style="width: 80%; margin: 20px auto; border-collapse: collapse; font-family: Arial, sans-serif;">
        <thead>
            <tr style="background-color: #f2f2f2; border-bottom: 2px solid #ccc;">
                <th style="padding: 10px; text-align: left; color:black;">Name</th>
                <th style="padding: 10px; text-align: left; color:black;">Price</th>
                <th style="padding: 10px; text-align: left; color:black;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;"><?php echo htmlspecialchars($item['name']); ?></td>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;"><?php echo htmlspecialchars($item['price']); ?></td>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;">
                        <form action="/mini-Project-Tp-Web/app/controllers/ItemController.php?action=delete" method="POST" style="display: inline;">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <button type="submit" style="padding: 5px 10px; background-color: #ff4d4d; color: white; border: none; border-radius: 4px; cursor: pointer;">Delete</button>
                        </form>
                        <form id="addToPanierForm" style="display: inline;">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>" id="item_id">
                            <input type="hidden" name="name" value="<?php echo $item['name']; ?>" id="item_name">
                            <input type="hidden" name="quantity" value="1" id="item_quantity">
                            <button type="button" onclick="addToPanier('<?php echo $item['name']; ?>',1)" style="padding: 5px 10px; background-color: #4dff4d; color: white; border: none; border-radius: 4px; cursor: pointer;">
                                Ajouter au panier
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p style="text-align: center; margin-top: 20px;">No items found.</p>
<?php endif; ?>

<script>
    function addToPanier(itemName, itemQuantity) {
    const panierCookie = document.cookie
        .split('; ')
        .find(row => row.startsWith('panier='));
    let panier = panierCookie ? JSON.parse(decodeURIComponent(panierCookie.split('=')[1])) : [];

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

    // Update the cookies
    document.cookie = `panier=${encodeURIComponent(JSON.stringify(panier))}; path=/; max-age=${7 * 24 * 60 * 60}`;

    updatePanierDropdown();
}

function updatePanierDropdown() {
    const panierCookie = document.cookie
        .split('; ')
        .find(row => row.startsWith('panier='));
    let panier = panierCookie ? JSON.parse(decodeURIComponent(panierCookie.split('=')[1])) : [];

    const dropdown = document.getElementById('panierDropdown');
    dropdown.innerHTML = ''; 

    if (panier.length > 0) {
        panier.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = `${item.name} - Quantity: ${item.quantity}`;
            dropdown.appendChild(listItem);
        });
    } else {
        const emptyMessage = document.createElement('li');
        emptyMessage.textContent = 'Your panier is empty.';
        dropdown.appendChild(emptyMessage);
    }
}
</script>
