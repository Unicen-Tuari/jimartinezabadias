<?php

class CategoryModel {

    private $db;
    
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=web1_restaurante;charset=utf8', DB_USER, DB_PASS);
    }

    function Categories(){
        $sentence = $this->db->prepare(
            "select c.* from category c");
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

    function updateCategory($id_category, $category_name, $description){
        $sentence = $this->db->prepare(
            "update category
            set name = ?, description = ?
            where id_category = ?");
        $sentence->execute([$category_name, $description, $id_category]);
    }

    function deleteCategory($id_category){
        $sentence = $this->db->prepare(
            "delete from category where id_category = ?");
        $sentence->execute([$id_category]);
    }

}
?>