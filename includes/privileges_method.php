<?php

//require 'connection.php';

class privileges_method extends connection {

    public $priv_id;
    public $admin_id;
    public $pages;

    public function fetchAll(){
        $privClass = new privileges_method();
        $sql  = "SELECT * FROM `privileges`";
        $stmt = $privClass->connect->query($sql);
        foreach ($stmt as $value) {
            $privSet[] = $value;
        }
        return $privSet;
    }
    public function fetchById($id){
        $privClass = new privileges_method();
        $sql = "SELECT * FROM `privileges` WHERE `priv_id` = $id";
        $stmt = $privClass->connect->query($sql);
        return $stmt;
    }
    public function insertPriv(){
        $privClass = new privileges_method();
        $sql  = "INSERT INTO `privileges`(`admin_id`, `pages`) VALUES ([$privClass->admin_id,$privClass->pages)";
        $privClass->connect->query($sql);
    }
    public function deletePriv($id){
        $privClass  = new privileges_method();
        $sql   = "DELETE FROM `privileges` WHERE `priv_id` = $id";
        $privClass->connect->exec($sql);
    }
    public function updatePriv($id){
        $privClass  = new privileges_method();
        $sql   = "UPDATE `privileges` SET `admin_id`=$privClass->admin_id,`pages`=$privClass->pages"
                . " WHERE `priv_id` = $id";
        $privClass->connect->exec($sql);
    }
}
