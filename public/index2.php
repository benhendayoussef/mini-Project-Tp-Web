<?php
require_once __DIR__ . '/../app/controllers/ItemController.php';

$controller = new ItemController();

if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $controller->delete();
} else {
    $controller->add();
}
?>
