<!DOCTYPE html>
<?php

	require_once('conn.php');
	$msg="";

	if(isset($_POST['submit']))
		{
			$full_nm=trim($_POST['fname']);
			$unm=trim($_POST['uname']);
			$pass=trim($_POST['password']);
			$dbpass=password_hash($pass, PASSWORD_DEFAULT);
			$query="insert into admin(full_nm,username,password) value('$full_nm','$unm','$dbpass')";
			mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
			if($query-=1)
			{
				header('Location:index.php');
			}
		}
		
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Registration</title>
		<link href="../images/icon.png" rel="icon">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
	</head>

	<body>
	
		
		<nav class="navbar navbar-inverse top-menu">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">ART GALLERY</a>
			</div>
			<div>
			  <ul class="nav navbar-nav">
				<li><a href="#">About</a></li>
			  </ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#" style="color:#fff"><span class="glyphicon glyphicon-user"></span> Registration</a><li>
				<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="container">
			<div class="panel panel-primary admin-login">
				<div class="panel-heading">
					<h3>Registration</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="post">
					  <div class="bg-danger error_msg"><?php echo $msg; ?></div>
					  <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-user" style="top:0"></span><input type="text" name="fname" class="form-control"placeholder="Enter Full Name">
					  </div>
					  <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-envelope" style="top:0"></span><input type="email" name="uname" class="form-control"placeholder="Enter Email">
					  </div>
					  <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-lock" style="top:0"></span><input type="password" name="password" class="form-control" placeholder="Set password">
					  </div>
					  
					  <div class="form-group"> 
						  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
					  </div>
					</form>
				</div>
			</div>
		</div>
		<?php
			require_once('dbconclose.php');
		?>
		
	</body>
</html>