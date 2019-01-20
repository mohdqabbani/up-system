<?php

function __autoload($className) {
    require_once './includes/' . "$className.php";
}

if (isset($_POST['add'])) {
    $regClass = new registration_method();
    $regClass->reg_id = $_POST['reg_id'];
    $regClass->std_id = $_POST['std_id'];
    $regClass->admin_id = $_POST['admin_id'];
    $regClass->course_name = $_POST['course_name'];
    $regClass->course_hours = $_POST['course_hours'];
    $regClass->course_time = $_POST['course_time'];
    $regClass->course_days = $_POST['course_days'];
    $regClass->course_start_date = $_POST['course_start_date'];
    $regClass->course_end_date = $_POST['course_end_date'];
    $regClass->course_test_result = $_POST['course_test_result'];
    $regClass->course_fees = $_POST['course_fees'];
    $regClass->payment_method = $_POST['payment_method'];
    $regClass->discount_amount = $_POST['discount_amount'];
    $regClass->discount_percetage = $_POST['discount_percetage'];
    $regClass->insertReg();
    header("Location: registration.php");
    exit();
}
if (isset($_POST['delete'])) {
    $regClass = new registration_method();
    $regClass->reg_id = $_POST['reg_id'];
    $regClass->deleteReg($regClass->reg_id);
    header("Location:registration.php");
    exit();
}
if (isset($_POST['update'])) {
    $regClass = new registration_method();
    $id = $_POST['reg_id'];  
    $regClass->std_id = $_POST['std_id'];
    $regClass->admin_id = $_POST['admin_id'];
    $regClass->course_name = $_POST['course_name'];
    $regClass->course_hours = $_POST['course_hours'];
    $regClass->course_time = $_POST['course_time'];
    $regClass->course_days = $_POST['course_days'];
    $regClass->course_start_date = $_POST['course_start_date'];
    $regClass->course_end_date = $_POST['course_end_date'];
    $regClass->course_test_result = $_POST['course_test_result'];
    $regClass->course_fees = $_POST['course_fees'];
    $regClass->payment_method = $_POST['payment_method'];
    $regClass->discount_amount = $_POST['discount_amount'];
    $regClass->discount_percetage = $_POST['discount_percetage'];
    $regClass->updateReg($id);
    header("Location: registration.php");
    exit();
}
if (isset($_POST['fetch'])) {
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="reg_id" placeholder="Registration id">
            <input type="text" name="std_id" placeholder="student id">
            <?php
//            $adminClass = new admin_method();
//            $adminSet = $adminClass->fetchall();
//            echo "<select name='sel'>";
//            foreach ($adminSet as $value) {
//                echo "<option value='{$value['admin_id']}'>{$value['admin_name']}</option>";
//            }
//            echo "</select>";
//            
//            $courseClass = new course_method();
//            $courseSet   = $courseClass->fetchAll();
//            echo "<select name='course_name'>";
//            foreach ($courseSet as $value) {
//               echo "<option value='{$value['course_name']}'>{$value['course_name']}</option>";  
//            }
//            echo "</select>";
//            
//            echo "<select name='course_hours'>";
//            foreach ($courseSet as $value) {
//               echo "<option value='{$value['course_hours']}'>{$value['course_hours']}</option>";  
//            }
//            echo "</select>";
//            
//            echo "<select name='course_time'>";
//            foreach ($courseSet as $value) {
//               echo "<option value='{$value['course_time']}'>{$value['course_time']}</option>";  
//            }
//            echo "</select>";
//            
//            echo "<select name='course_days'>";
//            foreach ($courseSet as $value) {
//               echo "<option value='{$value['course_day']}'>{$value['course_day']}</option>";  
//            }
//            echo "</select>";
            ?>
            <input type="text" name="admin_id" placeholder="admin_id">

            <input type="text" name="course_name" placeholder="course_name">
            <input type="text" name="course_hours" placeholder="course_hours">
            <input type="time" name="course_time" placeholder="course_time">
            <input type="text" name="course_days" placeholder="course_days">
            <input type="date" name="course_start_date" placeholder="course_start_date">
            <input type="date" name="course_end_date" placeholder="course_end_date">
            <input type="text" name="course_test_result" placeholder="course_test_result">
            <input type="text" name="course_fees" placeholder="course_fees">
            <input type="text" name="payment_method" placeholder="payment_method">
            <input type="text" name="payment_type" placeholder="payment_type">
            <input type="text" name="discount_amount" placeholder="discount_amount">
            <input type="text" name="discount_percetage" placeholder="discount_percetage">
            <button type="submit" name="add">add</button>
            <button type="submit" name="delete">delete</button>
            <button type="submit" name="update">update</button>
            <button type="submit" name="fetch">fetch</button>

        </form>
    </body>
</html>
