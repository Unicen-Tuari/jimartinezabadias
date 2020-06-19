<?php

class AdminModel {

    private $db;
    
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=web1_restaurante;charset=utf8', DB_USER, DB_PASS);
    }

    function Dishes(){
        $sentence = $this->db->prepare(
            "select d.*,c.name category_name
            from dishes d
                natural join category c");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
?>