<?php
	include "inc/head.inc.php";
?>
<div class='container'>
<div class="row">
	<div class="col-sm-6"style="margin:auto;margin-top:2cm" >
    	<div class="card">
    	<div class="card-body"style="background-color:#2d716a">

			<!--HEADER-->
			<header>
				<div class='container' style="margin-top:;color:white">
					<h1>Create an Account</h1>
					<hr>
				</div>
			</header>
			<!--MAIN-->
			<main class='container'>
				<form action='inc/create_account.php' method='POST'>
					<div class='form-group'>
						<label for='username'style="color:white">Username:</label>
						<input id='username' type='text' class='form-control' name='username'>
					</div>
					<div class='form-group'>
						<label for='username'style="color:white">E-mail id:</label>
						<input id='username' type='text' class='form-control' name='email'>
					</div>
					<div class='form-group'>
						<label for='password' style="color:white">Password:</label>
						<input id='password' type='password' class='form-control' name='password'>
					</div>
					
					<button type='submit' class='btn btn-primary'>Create Account</button>
				</form>
				
				<hr>
				<p style="color:white">Already have an account?
				<a href='signin.php' style="text-decoration: none;color:#8bdfd5" class=''>Go to Login</a></p>

			</main>
		</div>
		</div>
	</div>
</div>	
</div>
	<!--FOOTER-->
<?php
	include "inc/foot.inc.php";
?>