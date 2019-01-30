<?php

require_once 'connection.php';

class privileges_method extends connection {

    public $priv_id;
    public $admin_id;
    public $pages;

    public function fetchAll() {

        $sql = "SELECT * FROM `privileges`";
        $stmt = $this->connect->query($sql);
        foreach ($stmt as $value) {
            $privSet[] = $value;
        }
        return $privSet;
    }

    public function fetchById($id) {

        $sql = "SELECT * FROM `privileges` WHERE `priv_id` = $id";
        $stmt = $this->connect->query($sql);
        return $stmt;
    }

    public function insertPriv() {
        try {
            $sql = "INSERT INTO `privileges`(`admin_id`, `pages`) VALUES ([$this->admin_id,$this->pages)";
            $this->connect->query($sql);
           return true ;
        } catch (Exception $ex) {
            echo 'Failed Adding ' . $ex->getMessage();
        }
    }

    public function deletePriv($id) {
        try {
            $sql = "DELETE FROM `privileges` WHERE `priv_id` = $id";
            $this->connect->exec($sql);
           return true ;
        } catch (Exception $ex) {
            echo 'Failed Deleting' . $ex->getMessage();
        }
    }

    public function updatePriv($id) {
        try {
            $sql = "UPDATE `privileges` SET `admin_id`=$this->admin_id,`pages`=$this->pages"
                    . " WHERE `priv_id` = $id";
            $thi->connect->exec($sql);
            return true ;
        } catch (Exception $ex) {
            echo 'Failed Updating ' . $ex->getMessage();
        }
    }

}
