<?php

require 'connection.php';

class admin_method extends connection {

    public $admin_id;
    public $admin_name;
    public $admin_username;
    public $admin_password;
    public $admin_status;

    public function fetchall() {
        $sql = "SELECT * FROM `admin` ";
        $stmt = $this->connect->query($sql);
        foreach ($stmt as $value) {
            $adminSet[] = $value;
        }
        return $adminSet;
        
    }

    public function fetchById($id) {

        $sql = "SELECT * FROM `admin` WHERE `admin_id` = $id";
        $stmt = $this->connect->query($sql);
        $adminSet = $stmt->fetchAll();
    }

    public function insertAdmin() {

        $sql = "INSERT INTO `admin`(`admin_name`, `admin_username`, "
                . "`admin_password`, `admin_status`) VALUES "
                . "('$this->admin_name','$this->admin_username','$this->admin_password',$this->admin_status)";
        $stmt = $this->connect->query($sql);
    }

    public function deleteAdmin($id) {
        $id = $this->admin_id;
        $sql = "DELETE FROM `admin` WHERE `admin_id` = $id";
        $stmt = $this->connect->query($sql);
    }

    public function updateAdmin($id) {
        $id = $this->admin_id;
        $sql = "UPDATE `admin` SET `admin_name`='$this->admin_name',`admin_username`='$this->admin_username',"
                . "`admin_password`='$this->admin_password',`admin_status`=$this->admin_status WHERE `admin_id` = $id";
        $stmt = $this->connect->query($sql);
    }

}
