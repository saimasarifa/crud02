<?php

$name = $_FILES["myfile"]["name"];
$temp = $_FILES["myfile"]["tmp_name"];



move_uploaded_file($temp,"uploaded/".$name);

echo "file is in";


    ?>