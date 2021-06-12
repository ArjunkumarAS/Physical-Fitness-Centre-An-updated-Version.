<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
     
   


    <title>1 Month Plan</title>
    <style>
         a{
               float:right;
			   text-decoration: none;
			   font-weight:bold;
			   color:#63738a;
			   padding: 5px 5px 5px 5px;
			   background-color:white;
               }
           body{
             background-color:#63738a;
           }
    </style>
    
</head>
<body >
    <a href="process.php">BACK</a>
    <center><h1>Here is your 1 Month Plan , <?php echo $_SESSION['username'];?></h1><br>
    <div class="col-md-3" id="myitems">
                            <div class="card mb-15 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal names">1 Month Plan</h4>
                                </div>
                                 <div class="card-body" id="card-body">
                                    <h1 class="card-title pricing-card-title">Week 1</h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                    <li><strong>Motto</strong> :Happy Exercise</li>
                                        
                                    </ul>
                                      <button type="button" onclick="window.location.href='week1.html'" class="w-100 btn btn-lg btn-success">Go to Week 1 Exercises</button>
                            </div>
                         </div>
 </div><br>
 <div class="col-md-3" id="myitems">
                            <div class="card mb-15 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal names">1 Month Plan</h4>
                                </div>
                                 <div class="card-body" id="card-body">
                                    <h1 class="card-title pricing-card-title">Week 2</h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                    <li><strong>Motto</strong> :Happy Exercise</li>
                                        
                                    </ul>
                                      <button type="button" onclick="window.location.href='week2.html'"  class="w-100 btn btn-lg btn-success">Go to Week 2 Exercises</button>
                            </div>
                         </div>
 </div><br>
 <div class="col-md-3" id="myitems">
                            <div class="card mb-15 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal names">1 Month Plan</h4>
                                </div>
                                 <div class="card-body" id="card-body">
                                    <h1 class="card-title pricing-card-title">Week 3</h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                    <li><strong>Motto</strong> :Happy Exercise</li>
                                        
                                    </ul>
                                      <button type="button" onclick="window.location.href='week3.html'"  class="w-100 btn btn-lg btn-success">Go to Week 3 Exercises</button>
                            </div>
                         </div>
 </div><br>
 <div class="col-md-3" id="myitems">
                            <div class="card mb-15 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal names">1 Month Plan</h4>
                                </div>
                                 <div class="card-body" id="card-body">
                                    <h1 class="card-title pricing-card-title">Week 4</h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                    <li><strong>Motto</strong> :Happy Exercise</li>
                                        
                                    </ul>
                                      <button type="button" onclick="window.location.href='week4.html'"  class="w-100 btn btn-lg btn-success">Go to Week 4 Exercises</button>
                            </div>
                         </div>
 </div><br>
    
 </center>   
</body>
</html>