<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Pathology Lab</title>
	<!--Bootstrap CSS-->
	<!-- CSS only -->
	<!--
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--FontAwesome-->
	<script src="https://kit.fontawesome.com/ee88d64b0d.js" crossorigin="anonymous"></script>
	
	<!--CustomCSS-->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index1.php">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="newreg1.php">Register Now<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="finallogin.php">Admin <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="aboutUs.php">About Us <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<ul class="navbar-nav mt-2 mt-lg-0 navbar-right">
			<?php
						if(isset($_SESSION['id'])){
							echo "<li class='nav-item active'><a class='nav-link' href='signout.php'>Sign Out<span class='sr-only'>(current)</span></a></li>";
						}
						else{
							echo "<li class='nav-item active'><a class='nav-link' href='signin.php'><i class='fas fa-user-plus'></i><span class='sr-only'>(current)</span></a></li>";
						}
					?>
			 
			<li class="nav-item active">
				<a class="nav-link" href="#"><i class="fas fa-bell"></i><span class="sr-only">(current)</span></a>
			</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search for test">
			  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
	</nav>

