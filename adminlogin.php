<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$email=$_POST["email"];
$password=$_POST["password"];
$s="select * from adminlogin where ad_email='$email' && ad_password='$password'";

$result=mysqli_query($con,$s) or die("failed to query database");

$num=mysqli_num_rows($result);
if($num > 0)
{
  while($row = $result->fetch_assoc())
 {
  $_SESSION['username']=$row["ad_name"];
  $_SESSION['email']=$row["ad_email"];
 
 }
  header('location:updation.php');
}    
 else
 {
  
   header('location:admin.php');
 }

?>