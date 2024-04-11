<?php
     $id=$_POST['iddelete'];
     $conn=mysqli_connect('localhost','root','','hi');
     $query="delete from Patients_details where pnt_id='{$id}'";
     mysqli_query($conn,$query);
    
     ?>
     <?php
      header("Location:http://localhost/hospital%20system/read.php");
    echo "Your data has been deleted"
     ?>