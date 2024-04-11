<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h2>Data Record</h2>
<?php

$conn=mysqli_connect('localhost','root','','hi');
$query="select  * From patients_details";
$data=mysqli_query($conn,$query);

if (mysqli_num_rows($data)>0) {
?>
    <table border="1">

        <tr>
            <th>Patient Id</th>
            <th>Patient Name</th>
            <th>Patient Email</th>
            <th>Patient Department</th>
            
            <th>Edit/Delete</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($data)) {
        ?>


            <tr>
                <td><?php echo $row['pnt_id'] ?></td>
                <td><?php echo $row['pnt_name'] ?></td>
                <td><?php echo $row['pnt_email'] ?></td>
                <td><?php echo $row['pnt_depart'] ?></td>
              
                <td>
                <a href="edit2.php?id=<?php echo $row['pnt_id']?>">Edit</a>
                <a href="delete.php ?id=<?php echo $row['pnt_id']?>">Delete</a>
            </td>
                    
            </tr>

        <?php } ?>


    </table>
<?php
} else {
    echo "<h2>There is no data in database";
}

mysqli_close($conn);
?>
</body>
</html>