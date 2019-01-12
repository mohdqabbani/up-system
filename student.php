<?php
include './includes/student_method.php';
if(isset($_POST['fetchAll'])){
    $studenClass = new student_method();
    $studenClass->fetchAll();
}
if(isset($_POST['add'])){
    $studenClass = new student_method();
    $studenClass->std_name         = $_POST['name'];
    $studenClass->std_mobile       = $_POST['mobile'];
    $studenClass->std_email        = $_POST['email'];
    $studenClass->std_photo        = $_POST['photo'];
    $studenClass->std_id_copy      = $_POST['idcopy'];
    $studenClass->std_address      = $_POST['address'];
    $studenClass->std_age          = $_POST['age'];
    $studenClass->std_gender       = $_POST['gender'];
    $studenClass->std_dob          = $_POST['dob'];
    $studenClass->std_ref_mobile   = $_POST['red'];
    $studenClass->std_notes        = $_POST['notes'];
    $studenClass->insertStudent();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="name">
            <input type="text" name="mobile">
            <input type="text" name="email">
            <input type="file" name="photo">
            <input type="file" name="idcopy">
            <input type="text" name="address">
            <input type="text" name="age">
            <input type="text" name="gender">
            <input type="date" name="dob">
            <input type="text" name="ref">
            <input type="text" name="notes">
            <button type="submit" name="add">Add</button>
        <button type="submit" name="fetchAll">FetchAll</button>
        </form>
    </body>
</html>
