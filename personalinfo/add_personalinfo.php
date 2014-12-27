<?php
//$id = $_POST['ID'];
//$fullname = $_POST['full_name'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`personalinfo` (`ID`,
`full_name`,
`father's_name`,
`mother's_name`,
`religion`,
`gender`,`nationality`,`national_id`

)
VALUES ('".$_POST['ID']."','".$_POST['full_name']."','".$_POST["fathersname"]."','".$_POST['mothersname']."',
'".$_POST['religion']."','".$_POST['gender']."','".$_POST['nationality']."','".$_POST['nationalid']."'

)";

mysqli_query($link, $query);

header('location:list_personalinfo.php');