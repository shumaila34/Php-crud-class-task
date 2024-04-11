<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update your Data</h1>

    <?php
    
    $id=$_GET['id'];
    $conn=mysqli_connect('localhost','root','','hi');
    $query="SELECT * FROM Patients_details WHERE pnt_id='{$id}'";
    $data=mysqli_query($conn,$query);
    
    if(($data)){
        while($rows=mysqli_fetch_assoc($data)){?>
 <form action="edited.php" method="post">
        <input type="hidden" name="id" value="<?php echo $rows['pnt_id']?>">
        <input type="text" name="name" value="<?php echo $rows['pnt_name']?>">
        <input type="email" name="email" value="<?php echo $rows['email']?>">
        <input type="text" name="depart" value="<?php echo $rows['pnt_depart']?>">
        <input type="submit" >     

        </form>

          <?php  
        }
        ?>
       

<?php
    }

    
    ?>
</body>
</html> 