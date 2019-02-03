<?php

include_once '../includes/connection.php';
$con = new connection();

$output = '';

$query = "SELECT `std_name` FROM `student` WHERE `std_name` LIKE '%{$_GET['user_name']}%'";

$stmt = $con->connect->query($query);

$output = '<ul class="list-unstyled">';

foreach ($stmt as $value) {
    $output.='<li>' . $value['std_name'] . '</li>';
}
$output.='</ul>';
echo $output;
?>