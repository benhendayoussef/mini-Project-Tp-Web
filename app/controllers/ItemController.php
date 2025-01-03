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
                if($price<=0){
                    throw new Exception("Price must be greater than 0.");
                }
                $item =new Item();
                $item->create($name, $price);
                echo "Item added successfully.";
                header("Location: /mini-Project-Tp-Web/app/views/Items/add.php");
                exit();
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
                header("Location: /mini-Project-Tp-Web/app/views/Items/add.php");
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            $this->render('items/add', ['error' => 'Invalid request.']);
        }
    }

    public function getItems(){
        try{
        $items = new Item();
        $items = $items->getAllItems();
        return $items;
        }catch(Exception $e){
            echo "Error: " . $e->getMessage();
            return [];
        }

    }
    public function addItemPanier() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $id = $_POST['id'];
                $item =new Item();
                $item->addItemToModalAndCookies($id,1);
                echo "Item added successfully.";
                $this->render('items/add');
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
                $this->render('items/add', ['error' => $e->getMessage()]);
            }
        } else {
            $this->render('items/add', ['error' => 'Invalid request.']);
        }
    }

}

if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $controller = new ItemController();
    $action = $_GET['action'];
    if ($action === 'add') {
        $controller->add();
    } elseif ($action === 'delete') {
        $controller->delete();
    } elseif ($action === 'list') {
        $controller->getItems();
    } elseif ($action === 'addPanier') {
        $controller->addItemPanier();
    }

}


?>
