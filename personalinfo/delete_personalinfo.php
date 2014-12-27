<?php

$id = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "DELETE FROM `students`.`personalinfo` WHERE `personalinfo`.`ID` = $id";

mysqli_query($link, $query);

header('location:list_personalinfo.php');
?>