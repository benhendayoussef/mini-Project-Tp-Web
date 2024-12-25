<?php
require_once __DIR__ . '/../../controllers/ItemController.php';

// Initialize the controller and fetch items
$controller = new ItemController();
$items = $controller->getItems(); // Fetch items using the controller method
?>

<?php if (!empty($items)): ?>
    <h2 style="text-align: center; margin-top: 20px;">Saved Items</h2>
    <table style="width: 80%; margin: 20px auto; border-collapse: collapse; font-family: Arial, sans-serif;">
        <thead>
            <tr style="background-color: #f2f2f2; border-bottom: 2px solid #ccc;">
                <th style="padding: 10px; text-align: left;">Name</th>
                <th style="padding: 10px; text-align: left;">Price</th>
                <th style="padding: 10px; text-align: left;">Actions</th>
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
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p style="text-align: center; margin-top: 20px;">No items found.</p>
<?php endif; ?>
