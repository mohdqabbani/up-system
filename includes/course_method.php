<?php

require_once 'connection.php';
class course_method extends connection {

    public $course_id;
    public $course_name;
    public $course_start_date;
    public $course_end_date;
    public $course_time;
    public $course_hours;
    public $course_day;
    public $course_fees;

    public function fetchAll() {
        $sql = "SELECT * FROM `course`";
        $stms = $this->connect->query($sql);
        foreach ($stms as $value) {
            $courseSet[] = $value;
        }
        return $courseSet;
    }

    public function fetchById($id) {

        $sql = "SELECT * FROM `course` WHERE `course_id` = $id";
        $stmt = $this->connect->query($sql);
        $courseSet = $stmt->fetchAll();
    }

    public function insertCourse() {
        try {
            $sql = "INSERT INTO `course`(`course_name`, `course_start_date`, `course_end_date`, "
                    . "`course_time`,`course_hours`, `course_day`, `course_fees`) VALUES"
                    . " ('$this->course_name','$this->course_start_date',"
                    . "'$this->course_end_date',$this->course_time,"
                    . "'$this->course_hours','$this->course_day',$this->course_fees)";
            $this->connect->query($sql);
            echo 'Successfully adding ';
        } catch (Exception $ex) {
            echo 'Failed Adding' . $ex->getMessage();
        }
    }

    public function deleteCourse($id) {
        try {
            $id = $this->course_id;
            $sql = "DELETE FROM `course` WHERE `course_id` = $id";
            $this->connect->query($sql);
            echo 'Successfully adding';
        } catch (Exception $ex) {
            echo 'Failed Delete ' . $ex->getMessage();
        }
    }

    public function updateCourse($id) {
        try {
            $id = $this->course_id;
            $sql = "UPDATE `course` SET `course_name`='$this->course_name',`course_start_date`='$this->course_start_date',"
                    . "`course_time`='$this->course_time',`course_end_date`='$this->course_end_date',`course_hours`='$this->course_hours',`course_day`='$this->course_day',"
                    . "`course_fees`=$this->course_fees WHERE `course_id` = $id";
            $this->connect->query($sql);
            echo 'Successfully Updating ';
        } catch (Exception $ex) {
            echo 'Failed Updating ' . $ex->getMessage();
        }
    }

}
