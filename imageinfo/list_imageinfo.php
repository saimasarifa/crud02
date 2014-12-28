<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from image;";

$result = mysqli_query($link, $query);


?>
<h1> employment  information  list</h1>

<ul>

    <li><a href="create_ictskillinfo.html">Create New </a> </li>
</ul>

<table border="1" width="100%">
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
            <td><?php echo $row['image']?></td>

            <td>
                <a href="delete_imageinfo.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>


        </tr>

    <?php
    }
    ?>

</table>



