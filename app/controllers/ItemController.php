<?php
require_once __DIR__ . '/../models/Database.php';
require_once __DIR__ . '/../models/Item.php';
require_once 'BaseController.php';

class ItemController extends BaseController {
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $item =new Item();
                $item->create($name, $price);
                echo "Item added successfully.";
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            $this->render('items/add');
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $id = $_POST['id'];
                $item =new Item();
                $item->deleteItem($id);
                echo "Item deleted successfully.";
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            $this->render('items/delete');
        }
    }
}
?>
