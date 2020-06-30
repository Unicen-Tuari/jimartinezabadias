<?php

class UserModel{

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=web1_restaurante;charset=utf8', DB_USER, DB_PASS);
    }

    function getUser($username){
        $sentence = $this->db->prepare("SELECT * from user where username=?");
        $sentence->execute([$username]);
        return $sentence->fetch(PDO::FETCH_ASSOC);
    }

    function addUser($username, $password){
        $sentence = $this->db->prepare( "INSERT INTO user (`username`, `password`) VALUES (?,?)");
        $sentence->execute([$username, password_hash($password, PASSWORD_DEFAULT)]);
      }

} 

?>