<?php 
require_once __DIR__ . '/../models/Database.php';  // Add this line to include the Database class

class User{

    private $id;
    private $name;
    private $username;
    private $password;


    public function addUser($name,$username,$password) {
        if (!$this->validate($name,$username,$password)) {
            throw new Exception("Name, username and password cannot be empty.");
        }
        $db = Database::connect();
        $stmt=$db->prepare("INSERT INTO users (name, username, password) VALUES (:name, :username, :password)");
        $stmt->execute(['name'=>$name, 'username'=>$username, 'password'=>$password]);
        return true;
    }

    public function deleteUser($id){
        if($id==null || $id==0){
            throw new Exception("Invalid ID");
        }
        $db = Database::connect();
        $stmt=$db->prepare("DELETE FROM users WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return true;
    }

    public function validate($name,$username,$password){
        if (empty($name) || empty($username) || empty($password)) {
            throw new Exception("Name, username and password cannot be empty.");
        }
        return true;
    }
    public function getUserByUsername($username){
        if($username==null || $username==''){
            throw new Exception("Invalid username");
        }
        $db = Database::connect();
        $stmt=$db->prepare("SELECT * FROM users WHERE username=:username");
        $stmt->execute(['username'=>$username]);
        $user = $stmt->fetch();
        return $user;
    }



}


?>