<?php
session_start();

 include('header.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
	 <meta charset="utf-8">
	 <title>PHR</title>
 
	 <!-- Google Fonts -->
	 <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
 
	 <link rel="stylesheet" href="css/animate2.css">
	 <!-- Custom Stylesheet -->
	 <link rel="stylesheet" href="css/style2.css">
 
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 </head>
  
 
 <body>
 <form method="post">
	 <div class="container">
	
		 <div class="login-box animated fadeInUp">
			 <div class="box-header">
				 <h2>Registration</h2>
			 </div>
		 
			 <label for="name">Name</label>
			 <br/>
			 <input type="text" id="name" name="name" required>
			 <br/>
			 <label for="address">Address</label>
			 <br/>
			 <textarea id="address"></textarea>
			 <br/>
       <label for="Name">Date Of Birth</label>
			 <br/>
			 <input type="date" id="dob"required>
			 <br/>
       <label for="Name">Phone</label>
			 <br/>
			 <input type="number" id="phone"required>
			 <br/>
       <label for="Name">Username</label>
			 <br/>
			 <input type="text" id="username"required>
			 <br/>
       <label for="Name">Password</label>
			 <br/>
			 <input type="Password" id="password"required>
			 <br/>
       <label for="Name">Confirm Password</label>
			 <br/>
			 <input type="password" id="cmpassword"required>
			 <br/>
			 <button type="submit" name="ok">Submit</button></a>
			 
		 </div>
	 </div>
	 </form>
	 </body>
 
 </html>
	  <?php
							 if(isset($_POST['ok']))
							 {
							 $username=$_POST['username'];
							 $password=$_POST['password'];
							 
							 $i=0;
							 $con=mysqli_connect("localhost","root","","ente");
							 $qry="select * from login where uname='$username' and password='$password'";
							 $done=mysqli_query($con,$qry);
							 while($row=mysqli_fetch_array($done))
							 {
						 
								 $uid=$row['int'];
								 $uname=$row['uname'];
								 $pass=$row['password'];
								 
								 
								 if(($username==$uname)&&($password==$pass))
								 {
									 $_SESSION['uid']=$uid;
									 $i=1;
									 ?>
									 <script>
									 window.location.assign("ente/index.html");
									 </script>
									 <?php
								 }
							 
							 }
							 if($i==0)
							 {
								 ?>
								 <script>
								 alert("Invalid Credentials...!!!!");
								 window.location.assign("index.php");
								 </script>
								 <?php
							 }
							 }
							 
							 
						   
 
 

?>
					
 
	
