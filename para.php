<?php
$input=$_POST['staff'];
$conn=mysqli_connect('localhost','root','','hi');
    $query="insert into Paaramedical_staff (staff_name) values('{$input}')";
    mysqli_query($conn,$query);
    echo "Staff  added Successfully";
    mysqli_close($conn);


?>