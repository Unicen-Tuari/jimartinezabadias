<?php

class AdminModel {

    private $db;
    
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=web1_restaurante;charset=utf8', DB_USER, DB_PASS);
    }

    function Dishes(){
        $sentence = $this->db->prepare(
            "select d.*,c.name category_name
            from dish d
                join category c on (d.cod_category = c.cod_category)");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_ASSOC);
    }

    function Dish($id_dish,$cod_category){
        $sentence = $this->db->prepare(
            "select d.*,c.name category_name
            from dish d
                join category c on (d.cod_category = c.cod_category)
            where (d.id_dish,d.cod_category) = (?,?)");
        $sentence->execute([$id_dish,$cod_category]);
        return $sentence->fetch(PDO::FETCH_ASSOC);
    }

    function insertDish($cod_category, $dish_name, $description, $price, $in_menu){
        $sentence = $this->db->prepare(
            "insert into dish(cod_category, dish_name, description, price, in_menu)
            values (?,?,?,?,?)");
        $sentence->execute([$cod_category, $dish_name, $description, $price, $in_menu]);
    }
    
    function updateDish($id_dish,$cod_category, $new_cod_category, $dish_name, $description, $price, $in_menu){
        $sentence = $this->db->prepare(
            "update dish
            set
                cod_category = ?,
                dish_name = ?,
                description = ?,
                price = ?,
                in_menu = ?
            where
                id_dish = ?
                and cod_category=?");
        $sentence->execute([
            $new_cod_category, 
            $dish_name, 
            $description, 
            $price, 
            $in_menu,
            $id_dish,
            $cod_category]);
    }

    function deleteDish($id_dish,$cod_category){
        $sentence = $this->db->prepare(
            "delete from dish where (id_dish,cod_category) = (?,?)");
        $sentence->execute([$id_dish,$cod_category]);
    }

    function Categories(){
        $sentence = $this->db->prepare(
            "select * from category c");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertCategory($cod_category, $category_name, $description){
        $sentence = $this->db->prepare(
            "insert into category(cod_category, name, description)
            values (?,?,?)");
        $sentence->execute([$cod_category, $category_name, $description]);
    }

    function Category($cod_category){
        $sentence = $this->db->prepare(
            "select c.*
            from category c
            where c.cod_category = ?");
        $sentence->execute([$cod_category]);
        return $sentence->fetch(PDO::FETCH_ASSOC);
    }

}
?>