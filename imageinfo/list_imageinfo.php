<?php


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from image;";

$result = mysqli_query($link, $query);


?>

<table border="2" width="100%">
    <tr>
        <td>ID</td>
        <td>image</td>

        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['pic']?></td>

            <td>
                <a href="delete_ictskillinfo.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view_ictskillinfo.php?id=<?php echo $row['id']?>">view</a> |
                <a href="edit_ictskillinfo.php?id=<?php echo $row['id']?>">edit</a> |
            </td>


        </tr>

    <?php
    }
    ?>

</table>



