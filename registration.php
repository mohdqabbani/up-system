<?php
include './includes/registration_method.php';

if(isset($_POST['add'])){
    
}
if(isset($_POST['delete'])){
    
}
if(isset($_POST['update'])){
    
}
if(isset($_POST['fetch'])){
    
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
           <?php
           $student = new student_method();
           
           echo '<select>';
           echo '<option></option>';
           echo '</select>';
           ?>
            <input type="text" name="admin_id" placeholder="admin_id">
            <input type="text" name="course_name" placeholder="course_name">
            <input type="text" name="course_hours" placeholder="course_hours">
            <input type="text" name="course_time" placeholder="course_time">
            <input type="text" name="course_days" placeholder="course_days">
            <input type="text" name="course_start_date" placeholder="course_start_date">
            <input type="text" name="course_end_date" placeholder="course_end_date">
            <input type="course_test_result" name="course_test_result" placeholder="course_test_result">
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
