<?php

require 'connection.php';

class payment_method extends connection {

    public $payment_id;
    public $reg_id;
    public $payment_date;
    public $payment_amount;
    public $admin_id;
    public $received_from;
    public $check_no;
    public $bank;

    public function fetchAll() {
        $paymentMethod = new payment_method();
        $sql = "SELECT * FROM `payment`";
        $stmt = $paymentMethod->connect->query($sql);
        foreach ($paymentSet as $value) {
            $paymentSet[] = $value;
        }
        return $paymentSet;
    }

    public function fetchById($id) {
        $paymentMethod = new payment_method();
        $sql = "SELECT * FROM `payment` WHERE `payment_id`";
        $paymentSet = $paymentMethod->connect->query($sql);
        return $paymentSet;
    }

    public function insertPayment() {
        $paymentMethod = new payment_method();
        $sql ="INSERT INTO `payment`( `reg_id`, `payment_date`, `payment_amount`, `admin_id`, `received_from`, "
                . "`check_no`, `bank`) "
                . "VALUES ($paymentMethod->reg_id,'$paymentMethod->payment_date',"
                . "$paymentMethod->payment_amount,$paymentMethod->admin_id"
                . "'$paymentMethod->received_from',$paymentMethod->check_no,'$paymentMethod->bank')";
        print_r($sql);die();
        $this->connect->exec($sql);
    }

    public function deletePayment($id) {
        $payment_Method = new payment_method();
        $sql = "DELETE FROM `payment` WHERE `payment_id` = $id";
        $payment_Method->connect->query($sql);
    }

    public function updatePayment($id) {
        $paymentMethod = new payment_method();
        $sql = "UPDATE `payment` SET `reg_id`=$paymentMethod->reg_id,`payment_date`='$paymentMethod->payment_date',"
                . "`payment_amount`=$paymentMethod->payment_amount,`admin_id`=$paymentMethod->admin_id,`received_from`='$paymentMethod->received_from',"
                . "`check_no`=$paymentMethod->check_no,`bank`='$paymentMethod->bank' WHERE `payment_id`=$id";
        $paymentMethod->connect->query($sql);
    }

}

