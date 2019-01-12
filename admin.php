<?php
require './includes/admin_method.php';
if (isset($_POST['add'])) {
    $adminClass = new admin_method();
    $adminClass->admin_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $adminClass->admin_username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $adminClass->admin_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $adminClass->admin_status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT);
    $adminClass->insertAdmin();
    header("Location:admin.php");
    exit();
}
if (isset($_POST['delete'])) {
    $adminClass = new admin_method();
    $adminClass->admin_id = filter_input(INPUT_POST,'idnumber',FILTER_SANITIZE_NUMBER_INT);
    $adminClass->deleteAdmin($adminClass->admin_id);
    header("Location:admin.php");
    exit();
}
if (isset($_POST['selectAll'])) {
    $adminClass = new admin_method();
    $adminClass->fetchall();
}
if (isset($_POST['updateAdmin'])) {
    $adminClass = new admin_method();
    $adminClass->admin_id = filter_input(INPUT_POST,'idnumber',FILTER_SANITIZE_NUMBER_INT);
    $adminClass->admin_name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $adminClass->admin_username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
    $adminClass->admin_password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
    $adminClass->admin_status = filter_input(INPUT_POST,'status',FILTER_SANITIZE_NUMBER_INT);
    $adminClass->updateAdmin($adminClass->admin_id);
//    $adminClass->admin_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
//    $adminClass->admin_id = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
//    $adminClass->admin_id = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
//    $adminClass->admin_id = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
//    $adminClass->admin_id = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT);
//    $adminClass->updateAdmin($adminClass->admin_id, $adminClass->admin_name, $adminClass->admin_username, $adminClass->admin_password, $adminClass->admin_status);
    header("Location:admin.php");
    exit();
}
if(isset($_POST['selectById'])){
    $adminClass = new admin_method();
    $adminClass->admin_id = filter_input(INPUT_POST,'idnumber',FILTER_SANITIZE_NUMBER_INT);
    $adminClass->fetchById($adminClass->admin_id);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="username" placeholder="UserName">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="status" placeholder="Status 0,1">
            <input type="text" name="adminName" placeholder="Please enter admin name ">
            <input type="test" name="idnumber" placeholder="ID">
            <button type="submit" name="add">Add</button>         
            <button type="submit" name="delete">Delete</button>
            <button type="submit" name="selectAll">Fetch</button>
            <button type="submit" name="updateAdmin">Update</button>
            <button type="submit" name="selectById">Select By ID</button>

        </form>
    </body>
</html>
