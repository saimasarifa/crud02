<?php


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from multiselection;";

$result = mysqli_query($link, $query);


?>
<h1> multiselect   list</h1>

<ul>

    <li><a href="create_multiselect.html">Create New </a> </li>
</ul>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Full_name</td>
        <td>hobby</td>
        <td>preferred Job Location</td>

        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['full_name']?></td>
            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['preferred_job_location']?></td>


        </tr>

    <?php
    }
    ?>

</table>



