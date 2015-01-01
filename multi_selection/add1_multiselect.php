<?php

echo '<pre>';
print_r($_POST);
echo '<pre>';

$hobby = '';

if (array_key_exists('hobby_reading',$_POST) &&  !empty ($_POST['hobby_reading'])){
    $hobby .=$_POST['hobby_reading'];
    $hobby .=',';
}


if (array_key_exists('hobby_traveling',$_POST) && ! empty ($_POST['hobby_traveling'])){
    $hobby .=$_POST['hobby_traveling'];
    $hobby .=',';
}


if (array_key_exists('hobby_gardening',$_POST) && ! empty ($_POST['hobby_gardening'])){
    $hobby .=$_POST['hobby_gardening'];
    $hobby .=',';
}


if (array_key_exists('hobby_other', $_POST) && ! empty ($_POST['hobby_other'])){
    $hobby .=$_POST['hobby_other'];
    $hobby .=',';
}
$hobby = rtrim($hobby,',');
//$hobby = ".$hobby.','.$hobby.','.$hobby.";
echo($hobby);
echo "<br>";


//$food = '';
$food =implode(",",$_POST['food']);
echo $food;
echo "<br>";

//$preferred_job_location ='';
$preferred_job_location=implode(",",$_POST['preferred_job_location']);
echo $preferred_job_location;


$full_name = $_POST['full_name'];
$created =  $_POST['created'];
$modified = $_POST['modified'];



$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`multiselection`(
`full_name`,
`hobby`,
`preferred_job_location`,
`favourite_food`,
`created`,
`modified`


)
VALUES ('$full_name', '$hobby', '$preferred_job_location', '$food',
 '$created','$modified');";



mysqli_query($link, $query);
//var_dump($query);
header('location:list_multiselect.php');