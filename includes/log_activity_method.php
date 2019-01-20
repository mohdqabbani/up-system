<?php

require_once 'connection.php';

class log_activity_method extends connection {

    public $log_id;
    public $admin_id;
    public $date;
    public $time;

    public function fetchAll() {

        $sql = "SELECT * FROM `log_activity`";
        $stmt = $this->connect->query($sql);
        foreach ($stmt as $value) {
            $logSet[] = $value;
        }
        return $logSet;
    }

    public function fetchById($id) {

        $sql = "SELECT * FROM `log_activity` WHERE `log_id` = $id";
        $stmt = $this->connect->query($sql);
        foreach ($stmt as $value) {
            $logSet[] = $value;
        }
        return $logSet;
    }

    public function insertLog() {
        try {
            $sql = "INSERT INTO `log_activity`( `admin_id`, `date`, `time`) VALUES"
                    . " ($this->admin_id , '$this->date' , $this->time)";
            $this->connect->query($sql);
            echo 'Successfully Adding';
        } catch (Exception $ex) {
            echo 'Failed Adding';
        }
    }

    public function deleteLog($id) {
        $logClass = new log_activity_method();
        $sql = "DELETE FROM `log_activity` WHERE `log_id` = $id";
        $logClass->connect->query($sql);
    }

    public function updateLog($id) {
        try {
            $sql = "UPDATE `log_activity` SET "
                    . "`admin_id`=$this->admin_id,`date`='$this->date',`time`='$this->time' WHERE `log_id` = $id";
            $this->connect->query($sql);
            echo 'Successfully Updating ';
        } catch (Exception $ex) {
            echo 'Failed Updating ';
        }
    }

}
