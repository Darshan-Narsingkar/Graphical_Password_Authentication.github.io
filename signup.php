<?php
$name=$_POST['name'];
$email=$_POST['gmail'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost", "root", "", "GPA-signup") or die("unsucessful");
$sql= "INSERT INTO user_info(name,gmail,password) VALUES('{$name}','{$email}','{$password}')";
$result=mysqli_query($conn,$sql) or die("unsucessfull");

   header("Location: http://localhost/GPA-signup/index1.html");
  
mysqli_close($conn);
?>
