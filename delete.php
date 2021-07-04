<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');
$name = $_POST["username"];
$email = $_POST["email"];
// $s="DELETE from usertable WHERE email='$email'";
// ldsjsjds

$s = "select * from usertable where email = '$email'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num > 0)
{
    mysqli_query($con,"delete from usertable where email='$email'");
    header('location:updation.php?success='.$_POST["username"].'\'s account deleted successfully.');
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
  $mail->addAddress($email ,$name );
     
  $mail->isHTML(true);                                  
  $mail->Subject = 'Account Deleted';
  $mail->Body    = 'Hi '. $name .' , your account is removed from <b>Fortune Physical Fitness Centre.</b><br>Have a Nice Day !!';

  $mail->send();   
}


else{
    header('location:updation.php?error='.$_POST["username"].'\'s account cannot be deleted.Check whether it is exixted or not.');
}
?>
