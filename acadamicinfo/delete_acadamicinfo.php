<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "DELETE FROM `students`.`academic` WHERE `academic`.`id` = $id";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_acadamicinfo.php');
?>
