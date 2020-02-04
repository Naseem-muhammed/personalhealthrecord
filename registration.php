<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>PHR</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
 

<body>
<form method="post">
	<div class="container">
		<div class="top">
		
		
			<label>name</label>
			
			<input type="text" id="name" name="name" required>
			<br/>
			<label>Address</label>
			
			<input type="text" id="address" name="address" required>
			<br/>
            <label>age</label>
			
			<input type="text" id="age" name="age" required>
			
            <label>DOB</label>
			
			<input type="text" id="dob" name="dob" required>
			<br/>
            <label>Phone</label>
			
			<input type="text" id="Phone" name="Phone" required>
			<br/>
            <label>user name</label>
			
			<input type="text" id="uname" name="uname" required>
			<br/>
            <label>Password</label>
			
			<input type="Password" id="Password" name="Password" required>
			<br/>
			<button type="submit" name="ok">Sign In</button></a>

			
		</div>
	</div>
	</form>
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
							
                          
</body>

</html>
