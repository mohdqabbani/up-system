<?php


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
        $regClass =  new registration_method();
        $sql      = "SELECT * FROM `registration`";
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
        $regClass = new registration_method();
        $sql = "INSERT INTO `registration`(`std_id`, `admin_id`, `course_name`, `course_hours`, "
                . "`course_time`, `course_days`, `course_start_date`, `course_end_date`, `course_test_result`, "
                . "`course_fees`, `payment_method`, `payment_type`, `discount_amount`, `discount_percentage`) "
                . "VALUES ('$this->std_id',$this->admin_id,'$this->course_name','$this->course_hours','$this->course_time',"
                . "'$this->course_days','$this->course_start_date',"
                . "'$this->course_end_date',$this->course_test_result,$this->course_fees,'$this->payment_method',"
                . "'$this->payment_type',$this->discount_amount,'$this->discount_percetage')";
        $stmt = $regClass->connect->query($sql);
    }

    public function deleteReg($id) {
        $regClass = new registration_method();
        $sql      = "DELETE FROM `registration` WHERE `reg_id` = $id";
        $stmt = $regClass->connect->query($sql);
    }

    public function updateReg($id) {
        $regClass         = new registration_method();
        
        $sql = "UPDATE `registration` SET `std_id`=$regClass->std_id,`admin_id`=$regClass->admin_id,"
                . "`course_name`='$regClass->course_name',`course_hours`='$regClass->course_hours',`course_time`='$regClass->course_time',"
                . "`course_days`='$regClass->course_days',`course_start_date`='$regClass->course_start_date',`course_end_date`='$regClass->course_end_date',"
                . "`course_test_result`=$regClass->course_test_result,`course_fees`=$regClass->course_fees,`payment_method`='$regClass->payment_method',"
                . "`payment_type`='$regClass->payment_type',`discount_amount`=$regClass->discount_amount,`discount_percentage`='$regClass->discount_percetage' WHERE `reg_id`= $id";
        $regClass->connect->query($sql);
    }

}
