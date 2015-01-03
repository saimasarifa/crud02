<?php
include('connection.php');

$sql = "UPDATE dropmulti SET full_name='$_POST[full_name]',hobby='$hob',food='$a',cities='$cities',modified=NOW() WHERE id=$update_id";

mysqli_query($con,$sql);

$query="SELECT * FROM dropmulti";
$result=mysqli_query($con,$query);
header('location: multi_list.php');

?>