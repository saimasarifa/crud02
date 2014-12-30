<?php

$id = $_POST['id'];
$fname = $_POST['first_name'];
$lname =$_POST['last_name'];
$email  =$_POST['email'];
$pass =$_POST['password'];
$bday =$_POST['birth_day'];
$gender = $_POST['gender'];
$comment =$_POST['comment'];
$created =$_POST['created'];
$modified =$_POST['modified'];

$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob = $year.'-'.$month.'-'.$day;

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`ftflbook` SET `first_name` = '".$fname."' ,`last_name` = '".$lname."',
`email` = '".$email."',`password` = '".$pass."',`birth_day` = '".$dob."',
`gender` = '".$gender."',`comment` = '".$comment."',`created` = '".$created."',
`modified` = '".$modified."'
 WHERE `ftflbook`.`id` = $id;";

mysqli_query($link, $query);
//var_dump($query);

header('location:list_ftflbookinfo.php');