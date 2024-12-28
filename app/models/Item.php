<?php 

class Item{

    private $id;
    private $name;
    private $price;

  
    public function validate($name,$price) {
        if (empty($name) || empty($price)) {
            throw new Exception("Name and price cannot be empty.");
        }
    }
    public function create($name,$price){
        $this->validate($name,$price);
        $db = Database::connect();
        $stmt=$db->prepare("INSERT INTO items (name, price) VALUES (:name, :price)");
        $stmt->execute(['name'=>$name, 'price'=>$price]);

        return $db->lastInsertId();
    }

    public function deleteItem($id){
        if($id==null || $id==0){
            throw new Exception("Invalid ID");
        }
        $db = Database::connect();
        $stmt=$db->prepare("DELETE FROM items WHERE id=:id");
        $stmt->execute(['id'=>$id]);
    }
    public function getItem($id){
        if($id==null || $id==0){
            throw new Exception("Invalid ID");
        }
        $db = Database::connect();
        $stmt=$db->prepare("SELECT * FROM items WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        $item = $stmt->fetch();
        return $item;
    }
    function addItemToModalAndCookies($itemId, $itemQuantity) {
        $panier = isset($_COOKIE['panier']) ? json_decode($_COOKIE['panier'], true) : [];
        $itemName=$this->getItem($itemId)['name'];
        $itemExists = false;
        foreach ($panier as &$item) {
            if ($item['name'] === $itemName) {
                $item['quantity'] += $itemQuantity;
                $itemExists = true;
                break;
            }
        }
    
        if (!$itemExists) {
            $panier[] = ['name' => $itemName, 'quantity' => $itemQuantity];
        }
        setcookie('panier', json_encode($panier), time() + (7 * 24 * 60 * 60), "/");
    }


    public function getAllItems(){
     
        $db = Database::connect();
        $stmt=$db->prepare("SELECT * FROM items");
        $stmt->execute([]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}


?>