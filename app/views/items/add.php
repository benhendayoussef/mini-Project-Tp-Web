<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
</head>
<body>
    <h1>Add Item</h1>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Price:</label>
        <input type="number" name="price" step="0.01" required>
        <br>
        <button type="submit">Add Item</button>
    </form>
</body>
</html>
