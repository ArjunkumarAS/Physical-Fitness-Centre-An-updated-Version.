<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$email=$_POST["email"];
$password=base64_encode($_POST["password"]);



$s="select * from usertable where email='$email' && password='$password'";

$result=mysqli_query($con,$s) or die("failed to query database");

$num=mysqli_num_rows($result);
 if($num > 0)
{
  while($row = $result->fetch_assoc())
 {
  $_SESSION['username']=$row["username"];
  $_SESSION['email']=$row["email"];
  $_SESSION['age']=$row["age"];
  $_SESSION['weight']=$row["weight"];
  $_SESSION['height']=$row["height"];
  $_SESSION['gender']=$row["gender"];
  $_SESSION['doj']=$row["DOJ"];
 }
  header('location:process.php');
}    
 else
 {
  
   header('location:signin_frontend.php');
 }

//  if(SELECT ($_SESSION['doj'])<=now()){
//    $updage=$_SESSION['age']+1;
   
//    mysqli_query($con,"Update usertable set age='$updage'");
//    $_SESSION['age']=$row["age"];
//  }

?>