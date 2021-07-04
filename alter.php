<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');
$confemail=$_POST["confemail"];
$name = $_POST["chusername"];
$age=$_POST["chage"];
$weight=$_POST["chweight"];
$height = $_POST["chheight"];
$mobile_no=$_POST["chmb_no"];
$gender=$_POST["chgender"];
$address=$_POST["chaddress"];
$s = "select * from usertable where email = '$confemail'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
if($num > 0)
{
    while($row = $result->fetch_assoc())
 {
  $_SESSION['oldusername']=$row["username"];
 }
 mysqli_query($con,"update usertable set username='$name',age='$age',weight='$weight',height='$height',mobile_no='$mobile_no',gender='$gender',address='$address' where email='$confemail'");
  header('location:updation.php?success='.$_SESSION['oldusername'].' \'s account altered successfully.');
//Mail generation.....
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;                                       
  $mail->isSMTP();                                            
  $mail->Host       = 'smtp.gmail.com;';                    
  $mail->SMTPAuth   = true;                             
  $mail->Username   = 'fortunephysicalcenter@gmail.com';                 
  $mail->Password   = 'hithereim';                        
  $mail->SMTPSecure = 'tls';                              
  $mail->Port       = 587;  

  $mail->setFrom('fortunephysicalcenter@gmail.com', 'Fortune Physical Fitness Center');           
  //$mail->addAddress('receiver1@gfg.com');
  $mail->addAddress($confemail ,$_SESSION['oldusername']);
     
  $mail->isHTML(true);                                  
  $mail->Subject = 'Account Altered.';
  $mail->Body    = 'Hi '. $_SESSION['oldusername'] .' , your account is altered by the admin from <b>Fortune Physical Fitness Centre.</b><br>Have a Nice Day !!';

  $mail->send(); 

}
else{
    header('location:updation.php?error='.$_SESSION['oldusername'].' \'s account cannot be altered.');

}
?>