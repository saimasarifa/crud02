<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "DELETE FROM `students`.`contact_information` WHERE `contact_information`.`id` = $id";

mysqli_query($link, $query);

header('location:list_contactinfo.php');
?>
