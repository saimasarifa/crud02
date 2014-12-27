<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "DELETE FROM `students`.`reference` WHERE `reference`.`id` = $id";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_referenceinfo.php');
?>
