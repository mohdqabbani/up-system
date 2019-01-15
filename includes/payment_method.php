<?php

require 'connection.php';

class payment_method extends connection{

    public $payment_id;
    public $reg_id;
    public $payment_date;
    public $payment_amount;
    public $admin_id;
    public $received_from;
    public $check_no;
    public $bank;
    
    public function fetchAll(){
        $paymentMethod  = new payment_method();
        $sql            = "SELECT * FROM `student`";
        $paymentSet     = array();
        $stmt = $paymentMethod->connect->query($sql);
        foreach ($paymentSet as $value) {
            $paymentSet = $value;
        }
        print_r($paymentSet);
    }
    
    public function fetchById($id){
        
    }
    
    public function insertPayment(){
        
    }
    
    public function deletePayment(){
        
    }
    
    public function updatePayment(){
        
    }
}
