<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "DELETE FROM `students`.`traininginfo` WHERE `traininginfo`.`id` = $id";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_traininginfo.php');
?>
