<?php
include './includes/course_method.php';
if (isset($_POST['Add'])) {
    $courseClass = new course_method();
    $courseClass->course_name = $_POST['name'];
    $courseClass->course_start_date = $_POST['startdate'];
    $courseClass->course_end_date = $_POST['enddtae'];
    $courseClass->course_time     = $_POST['time'];
    $courseClass->course_hours = $_POST['hours'];
    $courseClass->course_fees = $_POST['fees'];
    $days = implode(' ', $_POST['days']);
    
    $courseClass->course_day = $days;
    $courseClass->insertCourse();
    header("location: course.php");
    exit();
}
if(isset($_POST['Delete'])){
    $id  = $_POST['id'];
    $courseClass = new course_method();
    $courseClass->deleteCourse($courseClass->course_id = $id);
    header("Location: course.php");
    exit();
}
if(isset($_POST['Update'])){
    $courseClass  = new course_method();
    $id = $_POST['id'];
    $courseClass->course_id = $_POST['id'];
    $courseClass->course_name = $_POST['name'];
    $courseClass->course_start_date = $_POST['startdate'];
    $courseClass->course_end_date = $_POST['enddtae'];
    $courseClass->course_time     = $_POST['time'];
    $courseClass->course_hours = $_POST['hours'];
    $courseClass->course_fees = $_POST['fees'];
    $days = implode(' ', $_POST['days']);
    $courseClass->course_day = $days;
    $courseClass->updateCourse($courseClass->course_id);
        header("location: course.php");
    exit();
}
if(isset($_POST['Delete'])){
    $courseClass = new course_method();
    $courseClass->course_id = $_POST['id'];
    $courseClass->deleteCourse($courseClass->course_id);
    header("location: course.php");
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="id" placeholder="id">
            <input type="text" name="name" placeholder="course name">
            <input type="date" name="startdate">
            <input type="date" name="enddtae">
            <input type="text" name="time" placeholder="time">
            <input type="text" name="hours">
            <input type="checkbox" name="days[]"  value="Sunaday">Sunday
            <input type="checkbox" name="days[]"  value="Monday"> Monday
            <input type="checkbox" name="days[]"  value="Tusday">Tusday
            <input type="checkbox" name="days[]"  value="Wensday">Wensday
            <input type="checkbox" name="days[]"  value="Thuresday">Thuresday
            <input type="checkbox" name="days[]"  value="saturday">Saturday
            <input type="text" name="fees">
            <button type="submit" name="Add">Add</button>
            <button type="submit" name="Delete">delete</button>
            <button type="submit" name="Update">update</button>
            <button type="submit" name="Fetch">fetch</button>
        </form>
    </body>
</html>
