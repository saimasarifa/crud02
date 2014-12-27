<?php


if (isset($_POST["upload"])){
$target_dir = "/home/lict/Downloads";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["sp.jpg"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));


    ?>