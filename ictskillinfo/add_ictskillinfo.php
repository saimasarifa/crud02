<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`ict_skills`(
`experience_category`,
`skill_description`,
`extracurricular_activities`

)
VALUES ('".$_POST['experience_category']."','".$_POST['skill_description']."',
'".$_POST['extracurricular_activities']."')";



mysqli_query($link, $query);

header('location:list_ictskillinfo.php');
