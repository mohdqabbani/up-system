<?php

//require 'connection.php';

class log_activity_method extends connection {

    public $log_id;
    public $admin_id;
    public $date;
    public $time;
    
    public function fetchAll(){
        $logClass =  new log_activity_method();
        $sql = "SELECT * FROM `log_activity`";
        $stmt = $logClass->connect->query($sql);
        foreach ($stmt as $value) {
            $logSet[] = $value;
        }
        return $logSet;
    }
    
    public function fetchById($id){
        $logClass =  new log_activity_method();
        $sql = "SELECT * FROM `log_activity` WHERE `log_id` = $id";
        $stmt = $logClass->connect->query($sql);
        foreach ($stmt as $value) {
            $logSet[] = $value;
        }
        return $logSet;
    }
    
    public function insertLog(){
        $logClass = new log_activity_method();
        $sql   = "INSERT INTO `log_activity`( `admin_id`, `date`, `time`) VALUES"
                . " ($logClass->admin_id , '$logClass->date' , $logClass->time)";
        $logClass->connect->query($sql);
    }
    
    public function deleteLog($id){
        $logClass = new log_activity_method();
        $sql  = "DELETE FROM `log_activity` WHERE `log_id` = $id";
        $logClass->connect->query($sql);
    }
    
    public function updateLog($id){
        $logClass = new log_activity_method();
        $sql  ="UPDATE `log_activity` SET "
                . "`admin_id`=$logClass->admin_id,`date`='$logClass->date',`time`='$logClass->time' WHERE `log_id` = $id";
    
        $logClass->connect->query($sql);
    }
    
}
