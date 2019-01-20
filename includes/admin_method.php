<?php

require_once 'connection.php';

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
        $stmt->fetchAll();
    }

    public function insertAdmin() {
        try {
            $sql = "INSERT INTO `admin`(`admin_name`, `admin_username`, "
                    . "`admin_password`, `admin_status`) VALUES "
                    . "('$this->admin_name','$this->admin_username','$this->admin_password',$this->admin_status)";
            $this->connect->query($sql);
            echo 'Admin added Successfully ';
        } catch (Exception $e) {
            echo 'Admin Doesn`t added successfully ' . $e->getMessage();
        }
    }

    public function deleteAdmin($id) {
        try {
            $id = $this->admin_id;
            $sql = "DELETE FROM `admin` WHERE `admin_id` = $id";
            $this->connect->query($sql);
            echo 'Admin Was Deleted Successfully ';
        } catch (Exception $ex) {
            echo 'Admin Dosen`t Deleted Successfully' . $ex->getMessage();
        }
    }

    public function updateAdmin($id) {
        try {
            $id = $this->admin_id;
            $sql = "UPDATE `admin` SET `admin_name`='$this->admin_name',`admin_username`='$this->admin_username',"
                    . "`admin_password`='$this->admin_password',`admin_status`=$this->admin_status WHERE `admin_id` = $id";
            $this->connect->query($sql);
        } catch (Exception $ex) {
            echo 'Update Not Successed' . $ex->getMessage();
        }
    }

}
