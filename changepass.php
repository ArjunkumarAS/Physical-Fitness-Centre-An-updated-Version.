<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$newpassword=base64_encode($_POST["newpassword"]);
$keyword=$_POST["keyword"];
$email=$_POST["email"];

$s="select * from usertable where email='$email' && keyword='$keyword' ";

$result=mysqli_query($con,$s) or die("failed to query database");

$num=mysqli_num_rows($result);

if($num > 0)
{
  while($row = $result->fetch_assoc())
 {
  $_SESSION['username']=$row["username"];
  $_SESSION['keyword']=$row["keyword"];
 }
  //header('location:process.php');
  $sql = "UPDATE usertable SET password='$newpassword' where email='$email' && keyword='$keyword' ";
//status preview..
if ($con->query($sql) === TRUE) {
    header('location:signin_frontend.php?pos_ack=Hi!! '. $_SESSION['username'] . '. your password is successfully changed.'); 
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
  $mail->addAddress($email ,$_POST["username"] );
     
  $mail->isHTML(true);                                  
  $mail->Subject = 'Password Changed';
  $mail->Body    = 'Welcome '. $_POST["username"] .' , your alteration  is done successfully in <b>Fortune Physical Fitness Centre.</b> <br/><br/>
                    Registered MailId - '.$email.'<br/><br/>Current Password is - '.$_POST["newpassword"] .'<br/><br/>Have a Nice Day !!';

  $mail->send();                
} 
else {
    header('location:signin_frontend.php?divert=Hi!! '. $_SESSION['username'] . '. your password is failed to change.');  
}

}    
 else
 {
  
   header('location:signin_frontend.php?re_error=Sorry the password is failed to change.Check the Keyword and email entered.');
 }

?>