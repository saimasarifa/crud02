<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from ict_skills WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['distric']);


?>

<form action="update_ictskillinfo.php" method="post">

    <h1> employment info edit form</h1>

    <label>ID:</label>
    <input type="text" name="id" value="<?php echo $row['id'];?>" /><p>


        <label>Experience Category :</label>

        <select name="experience_category">
            <option <?php if($row['experience_category']=='eng') echo 'selected';?>value="eng">eng</option>
            <option <?php if($row['experience_category']=='bank') echo 'selected';?>value="bank">bank</option>
            <option <?php if($row['experience_category']=='data_entry') echo 'selected';?>value="data_entry">Data entry</option>
</select>
        <p>
        <label>Skill Description</label>
        <input type="text" name="skill_description" value="<?php echo $row["skill_description"];?>" /><p>
        <label>Extracurricular Activities:</label>
        <input type="text" name="extracurricular_activities" value="<?php echo $row["extracurricular_activities"];?>" /><p>

        <button type="submit">update</button>

</form>

<a href="list_ictskillinfo.php">Back to Home</a>


