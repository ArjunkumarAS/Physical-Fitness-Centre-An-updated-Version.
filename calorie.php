<html>
<head>

<title>Maintenance Calories Calculation Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Fortunate's Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
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
</style>
<style>
#left {
float:left;
}
a{
               float:right;
			   text-decoration: none;
			   font-weight:bold;
			   color: #63738a;
			   padding: 5px 5px 5px 5px;
			   background-color:white;
               }
</style>
<script type="text/javascript">
function calculatecal(){

var weight = document.mcfm.weight.value;
var height = document.mcfm.height.value;
if(weight > 0 && height > 0){
var age = document.mcfm.age.value;
var gender = document.mcfm.gender.value;


if (gender=="male") {
		document.mcfm.mcal.value = (88.362+(13.397*weight)+(4.799*height)-(5.677*age))*1.5; 
	} 
if (gender=="female") {
		document.mcfm.mcal.value = (447.593+(9.247*weight)+(3.098*height)-(4.330*age))*1.5; 
	}

}
else{
alert("Please Fill in everything correctly");
}
}
</script>
</head>

<body bgcolor="#63738a">
	<a href="homepage.html">BACK</a>
<!--<img id="left" src="calorie.png" alt="HTML5 Icon" width="600" height="600">-->
<div class="signup-form">
<form name="mcfm" method=post>
 <h2>Maintenance Calories</h2>
<!-- <p><center><h4>This maintenance calorie calculator allows you to calculate how many calories your body needs to maintain your current weight.
  </h4></center></p> -->
  <p class="hint-text">Calculate your Maintenance Calories.</p>
<center>
<div class="form-group">
<input type="text"class="form-control" name="weight" placeholder="Enter your weight in Kg"/><br></div>
<div class="form-group">
<input type="text"class="form-control" name="height" placeholder="Enter your height in Cm"/><br></div>
<div class="form-group">
<input type="text" class="form-control"name="age" placeholder="Enter your age in years"/><br></div>
<div class="form-group">
 <label for="gender">Gender:</label>
<select class="form-control"  id="gender" name="gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
  
</select> <br>
</div>
<div class="form-group">
<input type="button" class="btn btn-success btn-lg btn-block" name="calculate maintenance cal" value="Calculate Calories" onClick="calculatecal()"><br>
</div>
<div class="form-group">
<b>Your Maintenance Calories:</b></br></br><input class="form-control" type="text" name="mcal" size="10"><br>
</div>
<div class="form-group">
<input class="btn btn-success btn-lg btn-block" type="reset" value="reset">
</diV>
</center> 

</form>

<div style="text-align: right;font-weight: bolder;">Copyright © 2020 Reserved by Fortune Physical Centre</div></div>
</body>
</html>
