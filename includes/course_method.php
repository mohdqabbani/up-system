<?php

require 'connection.php';

class course_method extends connection {

    public $course_id;
    public $course_name;
    public $course_start_date;
    public $course_end_date;
    public $course_hours;
    public $course_day;
    public $course_fees;

    public function fetchAll() {
        
    }

    public function fetchById($id) {
        
    }

    public function insertCourse() {
        $courseClass = new course_method();
        $sql = "INSERT INTO `course`(`course_name`, `course_start_date`, `course_end_date`, "
                . "`course_hours`, `course_day`, `course_fees`) VALUES"
                . " ('$this->course_name','$this->course_start_date',"
                . "'$this->course_end_date',"
                . "$this->course_hours,'$this->course_day',$this->course_fees)";

        $courseClass->connect->query($sql);
    }

    public function deleteCourse($id) {
        
    }

    public function updateCourse($id) {
        
    }

}
