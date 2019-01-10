<?php

require 'connection.php';

class admin_method extends connection {

    public $admin_id;
    public $admin_name;
    public $admin_username;
    public $admin_password;
    public $admin_status;

    public function selectAll() {
        //$admin = new admin_method();
        $sql = "SELECT * FROM admin";
        $stmt = $this->connect->query($sql);

        $data = $stmt->fetchAll();
        foreach ($data as $row) {
            echo 'Admin_id :' . $row['admin_id'] . '<br>';
            echo 'Admin_name :' . $row['admin_name'] . '<br>';
            echo 'Admin_username :' . $row['admin_username'] . '<br>';
            echo 'Admin_password :' . $row['admin_password'] . '<br>';
            echo 'Admin_status :' . $row['admin_status'] . '<br>';
        }
    }

    public function selectById($id) {
        $sql = "SELECT * FROM `admin` WHERE `admin_id` =?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $data = $stmt->execute();
        $data = $stmt->fetch();
        echo $data['admin_name']." ";
        echo $data['admin_username']." ";
        echo $data['admin_password']." ";
        echo $data['admin_status']." ";
        }
    

    public function insertAdmin($name, $username, $password, $status) {
        // $admin = new admin_method();
        $sql = "INSERT INTO `admin`(`admin_name`, `admin_username`, "
                . "`admin_password`, `admin_status`) VALUES "
                . "(:name,:username,:password,:status)";

        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function deleteAdmin($adminName) {
        //  $admin = new admin_method();
        $sql = "DELETE FROM `admin` WHERE `admin_name`= :adminName";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':adminName', $adminName, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function updateAdmin($admin_id, $admin_name, $admin_username, $admin_password, $admin_status) {
        $sql = "UPDATE `admin` SET `admin_name`=:admin_name,`admin_username`=:admin_username,"
                . "`admin_password`=:admin_password,`admin_status`= :admin_status WHERE `admin_id` = :admin_id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':admin_id', $admin_id, PDO::PARAM_INT);
        $stmt->bindParam(':admin_name', $admin_name, PDO::PARAM_STR);
        $stmt->bindParam(':admin_username', $admin_username, PDO::PARAM_STR);
        $stmt->bindParam(':admin_password', $admin_password, PDO::PARAM_STR);
        $stmt->bindParam(':admin_status', $admin_status, PDO::PARAM_INT);
        $stmt->execute();
    }

}

//$test = new admin_method();
//$test->selectAll();
////$test->insertAdmin("Salameh", "Salmeh Yasin", "1010",1);
////$test->insertAdmin("Khalid", "Khalid Ahmad", "10450",0);
//$test->deleteAdmin(3);

