<?php
include './includes/course_method.php';
if (isset($_POST['Add'])) {
    $courseClass = new course_method();
    $courseClass->course_name = $_POST['name'];
    $courseClass->course_start_date = $_POST['startdate'];
    $courseClass->course_end_date = $_POST['enddtae'];
    $courseClass->course_hours = $_POST['hours'];
    $courseClass->course_fees = $_POST['fees'];
    $days = implode(' ', $_POST['days']);
    
    $courseClass->course_day = $days;
    $courseClass->insertCourse();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="name" placeholder="course name">
            <input type="date" name="startdate">
            <input type="date" name="enddtae">
            <input type="text" name="hours">
            <input type="checkbox" name="days"  value="Sunaday">Sunday
            <input type="checkbox" name="days"  value="Monday"> Monday
            <input type="checkbox" name="days"  value="Tusday">Tusday
            <input type="checkbox" name="days"  value="Wensday">Wensday
            <input type="checkbox" name="days"  value="Thuresday">Thuresday
            <input type="checkbox" name="days"  value="saturday">Saturday
            <input type="text" name="fees">
            <button type="submit" name="Add">Add</button>
        </form>
    </body>
</html>
