<?php

echo '<pre>';
print_r($_POST);
echo '<pre>';

/*
$hobby1 = $_POST['hobby_reading'];
$hobby2 = $_POST['hobby_traveling'];
$hobby3 = $_POST['hobby_gardening'];
$hobby4 = $_POST['hobby_other'];

$hobby = $hobby1.'-'.$hobby2.'-'.$hobby3.'-'.$hobby4;
//echo $hobby;
if( isset($hobby1) &&! empty ($hobby2)
    echo  "$hobby is in ";
}*/
$hobby = '';

if (isset($_POST['hobby_reading']) && ! empty ($_POST['hobby_reading'])){
    $hobby .=$_POST['hobby_reading'];
    $hobby .=',';
}


if (isset($_POST['hobby_traveling']) && ! empty ($_POST['hobby_traveling'])){
    $hobby .=$_POST['hobby_traveling'];
    $hobby .=',';
}


if (isset($_POST['hobby_gardening']) && ! empty ($_POST['hobby_gardening'])){
    $hobby .=$_POST['hobby_gardening'];
    $hobby .=',';
}


if (isset($_POST['hobby_other']) && ! empty ($_POST['hobby_other'])){
    $hobby .=$_POST['hobby_other'];
    $hobby .=',';
}
$hobby = rtrim($hobby,',');
//$hobby = ".$hobby.','.$hobby.','.$hobby.";
echo($hobby);

/*$link = mysqli_cechoonnect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`multiselection`(
`full_name`,
`hobby`,
`preferred_job_location`,
`created`,
`modified`

)
VALUES ('".$_POST['full_name']."','".$_POST['hobby']."',
'".$_POST['preferred_job_location']."','".$_POST['favourite_food']."')";

echo '<pre>';
print_r($_POST);
echo '<pre>';
//mysqli_query($link, $query);
//var_dump($_POST);
//header('location:list_multiselect.php');*/
