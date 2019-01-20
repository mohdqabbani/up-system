<?php
require_once 'connection.php';

class registration_method extends connection {

    public $reg_id;
    public $std_id;
    public $admin_id;
    public $course_name;
    public $course_hours;
    public $course_time;
    public $course_days;
    public $course_start_date;
    public $course_end_date;
    public $course_test_result;
    public $course_fees;
    public $payment_method;
    public $payment_type;
    public $discount_amount;
    public $discount_percetage;

    public function fetchAll() {

        $sql = "SELECT * FROM `registration`";
        $stmt = $this->connect->query($sql);
        foreach ($stmt as $value) {
            $registrationSet[] = $value;
        }
        return $registrationSet;
    }

    public function fetchById($id) {
        $sql = "SELECT * FROM `registration` WHERE reg_id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt;
    }

    public function insertReg() {
        try {
            $sql = "INSERT INTO `registration`(`std_id`, `admin_id`, `course_name`, `course_hours`, "
                    . "`course_time`, `course_days`, `course_start_date`, `course_end_date`, `course_test_result`, "
                    . "`course_fees`, `payment_method`, `payment_type`, `discount_amount`, `discount_percentage`) "
                    . "VALUES ('$this->std_id',$this->admin_id,'$this->course_name','$this->course_hours','$this->course_time',"
                    . "'$this->course_days','$this->course_start_date',"
                    . "'$this->course_end_date',$this->course_test_result,$this->course_fees,'$this->payment_method',"
                    . "'$this->payment_type',$this->discount_amount,'$this->discount_percetage')";
            $stmt = $this->connect->query($sql);
            echo 'Successfully Adding';
        } catch (Exception $ex) {
            echo 'Failed Adding ' . $ex->getMessage();
        }
    }

    public function deleteReg($id) {
        try {
            $sql = "DELETE FROM `registration` WHERE `reg_id` = $id";
            $stmt = $this->connect->query($sql);
            echo 'Successfully Deleting';
        } catch (Exception $ex) {
            echo 'Failed Deleting' . $ex->getMessage();
        }
    }

    public function updateReg($id) {
        try {
            $sql = "UPDATE `registration` SET `std_id`=$this->std_id,`admin_id`=$this->admin_id,"
                    . "`course_name`='$this->course_name',`course_hours`='$this->course_hours',`course_time`='$this->course_time',"
                    . "`course_days`='$this->course_days',`course_start_date`='$this->course_start_date',`course_end_date`='$this->course_end_date',"
                    . "`course_test_result`=$this->course_test_result,`course_fees`=$this->course_fees,`payment_method`='$this->payment_method',"
                    . "`payment_type`='$this->payment_type',`discount_amount`=$this->discount_amount,`discount_percentage`='$this->discount_percetage' WHERE `reg_id`= $id";
            $this->connect->query($sql);
            echo 'Successfully Updating';
        } catch (Exception $ex) {
            echo 'Failed Updating ' . $ex->getMessage();
        }
    }

}
