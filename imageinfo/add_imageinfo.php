<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");


$target_dir = "/home/lict/";
$target_file = $target_dir . basename($_FILES["pic"]["sp.jpg"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,'/home/lict/Desktop');


 isset($_POST["submit"]);

header('location:list_imageinfo.php');?>