<?php
	include "inc/head.inc.php";
?>


<div class="container">
<div class="row">
	<div class="col-sm-6"style="margin:auto;margin-top:2cm" >
    	<div class="card">
    	<div class="card-body"style="background-color:#2d716a">

			<!--HEADER-->
			
				<div class='container' style="margin-top:;color:white">
					<h1>Login</h1>
					<hr>
				</div>
			
			<!--MAIN-->
			<main class='container'>
				<form action='inc/login.php' method='POST'>
					<div class='form-group'>
						<label for='username'style="color:white">Username:</label>
						<input id='username' type='text' class='form-control' name='username'>
					</div>
					<div class='form-group'>
						<label for='password' style="color:white">Password:</label>
						<input id='password' type='password' class='form-control' name='password'>
						<p style="color:#E1F1E8">Forgot password?<a href="#" style="text-decoration: none;color:#8bdfd5"> Click Here</a></p>
					</div>
					
					<button type='submit' class='btn btn-primary'>Login</button>
				</form>
				<hr>
				<p style="color:white">Don&#8217;t have an account?
				<a href='signup.php' style="text-decoration: none;color:#8bdfd5" class=''>Sign Up Here</a></p>
			</main>
			<!--FOOTER-->
		</div>
		</div>
	</div>
</div>
</div>


<?php
	include "inc/foot.inc.php";
?>