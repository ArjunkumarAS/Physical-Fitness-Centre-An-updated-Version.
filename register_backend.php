<?php
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


session_start();
//$mail = PHPMailer();





    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST["username"];
$email = $_POST["email"];
$age=$_POST["age"];
$weight=$_POST["weight"];
$height = $_POST["height"];
$mobile_no=$_POST["mb_no"];
$password=base64_encode($_POST["password"]);
$gender=$_POST["gender"];
$keyword=$_POST["keyword"];
$address=$_POST["address"];
$membership=$_POST["membership"];

$s = "select * from usertable where email = '$email'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num > 0)
{
    //echo '<script>alert("This emailId has already been registered.");</script>';
    header('location:signin_frontend.php?re_error=This EmailId has already been registered.');
    
    
}
else
{
    
    $reg="insert into usertable(username,email,age,weight,height,mobile_no,gender, password,keyword,address,membership) values ('$name','$email','$age','$weight','$height','$mobile_no','$gender','$password','$keyword','$address','$membership')";
    mysqli_query($con,$reg);
   // echo '<script>alert("Registration successfull");</script>';
   //Mail generation.....
   require 'vendor/autoload.php';
   $mail = new PHPMailer(true);

   try {
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
    $mail->addAddress($email , $name);
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Registration Confirmation';
    $mail->Body    = 'Welcome '. $name.' , your registration is done successfully in <b>Fortune Physical Fitness Centre.</b> <br/><br/>
                      Registered MailId - '.$email.'<br/><br/>Password is - '.$_POST["password"].'<br/><br/>Have a Nice Day !!';
    //$mail->AltBody = 'Body in plain text for non-HTML mail clients';
    if($mail->send()){
       header('location:signin_frontend.php?pos_ack=Your registration is  Succeeded. The confirmation message was sent to the registered mail Id.');   
    
    }   //echo "Mail has been sent successfully!";
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('location:signin_frontend.php?divert=Your registration is  succeeded. But Confirmation message was not sent to the registered mailId due to connection error .');   
}

}




?>