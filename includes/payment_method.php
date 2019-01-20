<?php
require_once 'connection.php';
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

        $sql = "SELECT * FROM `payment`";
        $stmt = $this->connect->query($sql);
        foreach ($paymentSet as $value) {
            $paymentSet[] = $value;
        }
        return $paymentSet;
    }

    public function fetchById($id) {

        $sql = "SELECT * FROM `payment` WHERE `payment_id`";
        $paymentSet = $this->connect->query($sql);
        return $paymentSet;
    }

    public function insertPayment() {
        try {
            $sql = "INSERT INTO `payment`( `reg_id`, `payment_date`, `payment_amount`, `admin_id`, `received_from`, "
                    . "`check_no`, `bank`) "
                    . "VALUES ($this->reg_id,'$this->payment_date',"
                    . "$this->payment_amount,$this->admin_id"
                    . "'$this->received_from',$this->check_no,'$this->bank')";
            $this->connect->exec($sql);
        } catch (Exception $ex) {
            echo 'Failed Adding ' . $ex->getMessage();
        }
    }

    public function deletePayment($id) {
        try {
            $sql = "DELETE FROM `payment` WHERE `payment_id` = $id";
            $this->connect->query($sql);
        } catch (Exception $ex) {
            echo 'Failed Delete ' . $ex->getMessage();
        }
    }

    public function updatePayment($id) {
        try {
            $sql = "UPDATE `payment` SET `reg_id`=$this->reg_id,`payment_date`='$this->payment_date',"
                    . "`payment_amount`=$this->payment_amount,`admin_id`=$this->admin_id,`received_from`='$this->received_from',"
                    . "`check_no`=$this->check_no,`bank`='$this->bank' WHERE `payment_id`=$id";
            $this->connect->query($sql);
            echo 'Successfully Updating ';
        } catch (Exception $ex) {
            echo 'Failed Updating ' . $ex->getMessage();
        }
    }

}
