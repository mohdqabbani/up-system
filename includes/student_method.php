<?php

require 'connection.php';

class student_method extends connection {

    public $std_id;
    public $std_name;
    public $std_mobile;
    public $std_email;
    public $std_photo;
    public $std_id_copy;
    public $std_address;
    public $std_age;
    public $std_gender;
    public $std_dob;
    public $std_ref_mobile;
    public $std_notes;

    public function fetchAll() {
        $sql = "SELECT * FROM `student`";
        $stmt = $this->connect->query($sql);
        $studentSet = array();
        foreach ($stmt as $value) {
            $studentSet[] = $value;
        }
    }

    public function insertStudent() {
        $sql = "INSERT INTO `student`(`std_name`, `std_mobile`, `std_email`, `std_photo`, "
                . "`std_id_copy`, `std_address`, `std_age`, `std_gender`, `std_dob`, `std_ref_mobile`, "
                . "`notes`) VALUES ('$this->std_name',$this->std_mobile,'$this->std_email','$this->std_photo',"
                . "'$this->std_id_copy','$this->std_address',"
                . "$this->std_age,'$this->std_gender','$this->std_dob',$this->std_ref_mobile,'$this->std_notes')";
        
    }

}
