<?php
include './includes/student_method.php';
if (isset($_POST['fetchAll'])) {
    $studenClass = new student_method();
    $studenClass->fetchAll();
}
if (isset($_POST['add'])) {
    $studenClass = new student_method();
    $studenClass->std_name = $_POST['name'];
    $studenClass->std_mobile = $_POST['mobile'];
    $studenClass->std_email = $_POST['email'];
    $studenClass->std_address = $_POST['address'];
    $studenClass->std_age = $_POST['age'];
    $studenClass->std_gender = $_POST['gender'];
    $studenClass->std_dob = $_POST['dob'];
    $studenClass->std_ref_mobile = $_POST['ref'];
    $studenClass->std_notes = $_POST['notes'];
    if ($_FILES['photo']['error'] == 0 && $_FILES['idcopy']['error'] == 0) {
        // Student Images
        $image_name = $_FILES['photo']['name'];
        $image_tmp = $_FILES['photo']['tmp_name'];
        $path_photo = "./images/students_photo/";
        move_uploaded_file($image_tmp, $path_photo . $image_name);

        // Student ID Copy
        $imageId_name = $_FILES['idcopy']['name'];
        $imageId_tmp = $_FILES['idcopy']['tmp_name'];
        $path_id_copy = "./images/students_id_copy/";
        move_uploaded_file($imageId_tmp, $path_id_copy . $imageId_name);
        // Send The Name To Student Attribute 
        $studenClass->std_photo = $_FILES['photo']['name'];
        $studenClass->std_id_copy = $_FILES['idcopy']['name'];
    }
    $studenClass->insertStudent();
    header("location:student.php");
    exit();
}
if (isset($_POST['deleteStudent'])) {
    
}
if (isset($_POST['fetchById'])) {
    $studenClass = new student_method();
    $studenClass->std_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $studenClass->fetchById($studenClass->std_id);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="text" name="id" placeholder="id test for delete">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="mobile" placeholder="mobile">
            <input type="text" name="email" placeholder="emial">
            <input type="file" name="photo" pattern="photo">
            <input type="file" name="idcopy" pattern="id photo">
            <input type="text" name="address" placeholder="address">
            <input type="text" name="age" placeholder="age">
            <input type="text" name="gender" placeholder="geneder">
            <input type="date" name="dob" placeholder="dob">
            <input type="text" name="ref" placeholder="ref">
            <input type="text" name="notes" placeholder="not">
            <button type="submit" name="add">Add</button>
            <button type="submit" name="fetchAll">FetchAll</button>
            <button type="submit" name="deleteStudent">Delete</button>
            <button type="submit" name="fetchById">fetchById</button>
        </form>
    </body>
</html>
