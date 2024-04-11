<?php
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$depart=$_POST['depart'];
$conn=mysqli_connect('localhost','root','','hi');
$query="update Patients_details  set pnt_name='{$name}', pnt_email='{$email}',pnt_depart='{$depart}' where pnt_id='{$id}'";
   
    $data=mysqli_query($conn,$query);
    header("Location:http://localhost/hospital%20system/read.php");

?>