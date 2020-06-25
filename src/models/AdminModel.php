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
                join category c on (d.id_category = c.id_category)");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_ASSOC);
    }

    function Dish($id_dish){
        $sentence = $this->db->prepare(
            "select d.*,c.name category_name
            from dish d
                join category c on (d.id_category = c.id_category)
            where d.id_dish = ?");
        $sentence->execute([$id_dish]);
        return $sentence->fetch(PDO::FETCH_ASSOC);
    }

    function insertDish($id_category,$dish_name, $description, $price, $in_menu){
        $sentence = $this->db->prepare(
            "insert into dish(id_category,dish_name, description, price, in_menu)
            values (?,?,?,?,?)");
        $sentence->execute([$id_category,$dish_name, $description, $price, $in_menu]);
    }
    
    function updateDish($id_dish,$id_category, $new_id_category, $dish_name, $description, $price, $in_menu){
        $sentence = $this->db->prepare(
            "update dish
            set
                id_category = ?,
                dish_name = ?,
                description = ?,
                price = ?,
                in_menu = ?
            where
                id_dish = ?
                and id_category=?");
        $sentence->execute([
            $new_id_category, 
            $dish_name, 
            $description, 
            $price, 
            $in_menu,
            $id_dish,
            $id_category]);
    }

    function deleteDish($id_dish){
        $sentence = $this->db->prepare(
            "delete from dish where id_dish = ?");
        $sentence->execute([$id_dish]);
    }

    function Categories(){
        $sentence = $this->db->prepare(
            "select * from category c");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertCategory($category_name, $description){
        $sentence = $this->db->prepare(
            "insert into category(name, description)
            values (?,?)");
        $sentence->execute([$category_name, $description]);
    }

    function Category($id_category){
        $sentence = $this->db->prepare(
            "select c.*
            from category c
            where c.id_category = ?");
        $sentence->execute([$id_category]);
        return $sentence->fetch(PDO::FETCH_ASSOC);
    }

}
?>