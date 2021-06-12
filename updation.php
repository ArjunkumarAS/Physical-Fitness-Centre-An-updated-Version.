<?php

session_start();
if (!isset($_SESSION["username"])) {
  header("Location:homepage.html");
}

?>
<html>
    <head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <title>Updation Page</title>
        <style>
          a{
               float:right;
			   text-decoration: none;
			   font-weight:bold;
			   color: #63738a;
			   padding: 5px 5px 5px 5px;
			   background-color:white;
               }
               
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
/* #forgetpass{
 display:none;
} */

#confdel,#confalt{
	display:none;
}
#recordtable{
	display: none;
	
	padding:40px;
	
	
}

      
</style>
<script>
	$(document).ready(function(){
	$("#delrec").click(function(){
    $("#confdel").show();
  });

  $("#altrec").click(function(){
    $("#confalt").show();
  });
  $("#viewrec").click(function(){
    $("#recordtable").show();
  });

});

</script>

</head>
    <body bgcolor="#63738a">
    <a href="logout.php">LOGOUT</a>
    <center><h1>WELCOME &nbsp; BACK &nbsp; TO &nbsp; ADMIN &nbsp; PAGE &nbsp;!</h1><br><br></center>
   <div class="signup-form">
	   <form>

	   <div><?php if (isset($_GET["error"])) {
    echo '<div class="alert alert-danger"><h4>' . $_GET["error"] . '</h4></div><a href="updation.php">OK</a>';
}
else if(isset($_GET["success"])){
	echo '<div class="alert alert-success"><h4>' . $_GET["success"] . '</h4></div><a href="updation.php">OK</a>';
}

?>
</div>
        <div class="form-group">
            <button type="button" id="altrec" class="btn btn-success btn-lg btn-block">Alter Records
        </div>
        <div class="form-group">
            <button type="button" id="delrec" class="btn btn-success btn-lg btn-block">Delete Records
        </div>
		<div class="form-group">
            <button type="button" id="viewrec" class="btn btn-success btn-lg btn-block">View Records
        </div>

      </form>
	  <form  action="delete.php" method="POST" id="confdel">
		  <a href="updation.php">Cancel</a><br><br>
	  <div class="form-group">
	      <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <button type="submit"  class="btn btn-success btn-lg btn-block">Delete</>
        </div>
      </form>

	  <form  action="alter.php" method="POST" id="confalt">
		  <a href="updation.php">Cancel</a><br><br>
	  <div class="form-group">
	      <input type="email" class="form-control" name="confemail" placeholder="Confirm the existing email for altering" required="required">
        </div>
		<p class="hint-text">Alter the required fields and kindly enter the existing data if no need to be altered.</p>
		<div class="form-group">
        	<input type="text" class="form-control" name="chusername" placeholder="Username" required="required">
        </div>
		
     <div class="form-group">
            <input type="number" class="form-control" name="chage" placeholder="Age" required="required">
        </div> 
    
  <input  type="radio" name="chgender" id="male" value="Male" >
  <label  for="male">
    Male
  </label>
      
     
     <input  type="radio" name="chgender" id="female" value="Female" >
     <label  for="female">
       Female
      </label>
 
    <div class="form-group">
			<div class="row">
				<div class="col"><input type="number" class="form-control" name="chweight" placeholder="weight_in_kg" required="required"></div>
				<div class="col"><input type="number" class="form-control" name="chheight" placeholder="Height_in_cm" required="required"></div>
			</div>        	
        </div>
     <div class="form-group">
            <input type="text" class="form-control" name="chmb_no" placeholder="Mobile No" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="chaddress" placeholder="Full Address" required="required">
        </div>
		<div class="form-group">
            <button type="submit"  class="btn btn-success btn-lg btn-block">Alter</>
        </div>
      </form>
	  </div>	  
	 <div id="recordtable">
		 <a href="updation.php">BACK</a>
		 
	<table class="table table-striped table-dark">
  <thead style="text-align:center;">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Weight</th>
	  <th scope="col">Height</th>
	  <th scope="col">Mobile Number</th>
	  <th scope="col">Gender</th>
	  <th scope="col">Address</th>
	  
    </tr>
  </thead>
  <tbody style="text-align:center;">
	 <?php 
	   $con=mysqli_connect('localhost','root','');

	   mysqli_select_db($con,'userregistration');
	   $s = "select * from usertable";

      $result=mysqli_query($con,$s);
	   foreach ($result as $r) {
		echo "<tr>";
	    echo "<td>".$r['username']."</td>
      <td>".$r['email']."</td>
      <td>".$r['age']."</td>
      <td>".$r['weight']."</td>
	  <td>".$r['height']."</td>
      <td>".$r['mobile_no']."</td>
      <td>".$r['gender']."</td>
      <td>".$r['address']."</td>
    </tr>";
	   }
    ?> 
  </tbody>
</table>
	</div>



	

		
    </body>
    </html>