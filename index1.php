<?php
	
	include "inc/head.inc.php";
?>

	
	<!--HEADER-->
	<header>
	 <div class="container-fluid">
		<div class="jumbotron text-center">
			<h1>Welcome to Virtual Pathology Lab</h1>
			<?php
				if(isset($_SESSION['username'])){
					echo "<p>Welcome back, ".$_SESSION['username']."!</p>";
				}
				else{
					echo "<p>Offering a wide range of Medical Tests</p>";
				}
			?>
		</div>
	</div>
	</header>
	
	
	
	<!--MAIN-->   
	<main>
	<div class="container-fluid">
		<div class='row'>
		
							

				<div class="col-md-8 " style="margin-bottom:30px;margin-left:0.5cm">
					<div class="row carousel-holder">
						
								<!--Carousel Wrapper    -->
							<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
							  
								<!--Indicators-->
								  <ol class="carousel-indicators">
									<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-2" data-slide-to="1"></li>
									<li data-target="#carousel-example-2" data-slide-to="2"></li>
									
								  </ol>
							  
							  <!--Slides-->
							  
								<div class="carousel-inner" role="listbox">
									<div class="carousel-item active">
									  <div class="view">
									  <a href="#">
										<img class="d-block w-100" src="images/blood1.jpg" alt="First slide">
										<div class="mask rgba-black-light"></div>
									  </div>
									  <div class="carousel-caption">
										<h3 class="h3-responsive"><a href="#" class="btn btn-danger">Donate Blood</a></h3>
									  </a>	
										
									  </div>
									</div>
									<div class="carousel-item">
									  <!--Mask color-->
									  <div class="view">
										<img class="d-block w-100" src="images/covid-19.png" alt="Second slide">
										<div class="mask rgba-black-strong"></div>
									  </div>
									  <div class="carousel-caption">
										<h3 class="h3-responsive"></h3>
										<p></p>
									  </div>
									</div>
									<div class="carousel-item">
									  <!--Mask color-->
									  <div class="view">
										<img class="d-block w-100" src="images/health.jpg"alt="Third slide">
										<div class="mask rgba-black-slight">
										</div>
									  </div>
									  <div class="carousel-caption">
										<h3 class="h3-responsive"><a href="#" class="btn btn-success">Stay Fit, Stay Healthy</a></h3>
										
										
										
									  </div>
									</div>
								</div>
							  
							  <!--/.Slides-->
							  <!--Controls-->
							  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
							  <!--/.Controls-->
							  
							</div>
							<!--/.Carousel Wrapper-->
							
					</div>
				</div>
				
				<div class='col-md-3'>	
				<div class="card">
							<!--Navbar-->
							<nav class="navbar navbar-light light-blue lighten-4">

							  <!-- Navbar brand -->
							  <a class="navbar-brand" href="supportedLabTests.php" style="font-weight:bold">Lab Tests</a>

							  <!-- Collapse button -->
							  <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
								aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
									class="fas fa-bars fa-1x"></i></span></button>

							  <!-- Collapsible content -->
						<div class="navbar-collapse" id="navbarSupportedContent1">
								  
								  
								<!--Accordion wrapper-->
								<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

								  <!-- Accordion card -->
								  <div class="card" style="margin-top:10px">

									<!-- Card header -->
									<div class="card-header" role="tab" id="headingOne1" >
									  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
										aria-controls="collapseOne1" style="text-decoration:none">
										<h5 class="mb-0" >Organs <i class="fas fa-angle-down rotate-icon"></i></h5>
									  </a>
									</div>

									<!-- Card body style="background-color:#E1F1E8"-->
									<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
									  <div class="card-body"style="background-color:#E1F1E8">
										
										<a class="dropdown-item" href="#">Heart</a>
										<a class="dropdown-item" href="#">Liver</a>
										<a class="dropdown-item" href="#">Lungs</a>
										<a class="dropdown-item" href="#">Kidney</a>
										<a class="dropdown-item" href="#">Genitalia</a>
										
									  </div>
									</div>

								  </div>
								
								<!-- Links -->

							  </div>
							  
							  
							  <!--Accordion wrapper-->
								<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

								  <!-- Accordion card -->
								  <div class="card" style="margin-top:10px">

									<!-- Card header -->
									<div class="card-header" role="tab" id="headingTwo2">
									  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="true"
										aria-controls="collapseTwo2" style="text-decoration:none">
										<h5 class="mb-0">Tests <i class="fas fa-angle-down rotate-icon"></i></h5>
									  </a>
									</div>

									<!-- Card body style="background-color:#E1F1E8"-->
									<div id="collapseTwo2" class="collapse show" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
									  <div class="card-body"style="background-color:#E1F1E8">
										
									  	<a class="dropdown-item" href="blood.php">Blood</a>
										<a class="dropdown-item" href="disease.php">Disease</a>
										<a class="dropdown-item" href="#">Urine</a>
										<a class="dropdown-item" href="#">Sugar</a>
										

									  </div>
									</div>

								  </div>
								
								<!-- Links -->

							  </div>

							</nav>
							<!--/.Navbar-->
				
						</div>
					</div>
				</div>

				
					
				<div class="container-fluid">
					<div class="text-center" style="color:green; margin-bottom:1cm;">
						<h1>Popular Tests</h1>
					</div>
				</div>



				<div class="row">
					<div class="col-sm-3 mb-3 mb-md-0">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8" >
							<h5 class="card-title">Cholestrol Test</h5>
							<p class="card-text">A cholesterol test is a blood test that measures the amount of each type of cholesterol and certain fats in your blood.</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="cholestrol.php" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Cardiac Profile</h5>
							<p class="card-text">This test measures the levels of cardiac biomarkers in your blood. These markers include enzymes, hormones, and proteins.</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Dengue</h5>
							<p class="card-text">Dengue fever test is a blood test that checks for signs of a dengue fever infection.</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Stool Analysis</h5>
							<p class="card-text">A stool analysis is a series of tests done on a stool sample to help diagnose certain conditions affecting the digestive tract.</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					
				</div>

				<div class="row" style="margin-top:1cm">
					<div class="col-sm-3 mb-3 mb-md-0">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Joint Pain</h5>
							<p class="card-text">Joint pains are common and they can impact the daily routine. You may need a blood test for rheumatoid arthritis. </p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Sugar Level</h5>
							<p class="card-text">A blood sugar test is a procedure that measures the amount of sugar, or glucose, in your blood.</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Malaria</h5>
							<p class="card-text">Rapid diagnostic test. This test looks for proteins known as antigens, which are released by malaria parasites.</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Urine Test</h5>
							<p class="card-text">It is used to detect and manage a wide range of disorders, such as urinary tract infections, kidney disease and diabetes.</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					
				</div>

				<div class="row" style="margin-top:1cm">
					<div class="col-sm-3 mb-3 mb-md-0">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Pulmonary Function Test</h5>
							<p class="card-text">They are agroup of tests that measure how well your lungs work. PFTs are also known as spirometry or lung function tests.
							</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Cold and Flu</h5>
							<p class="card-text"> Is it a cold or the seasonal flu? Symptoms can overlap, so book a rapid flu test with your doctor.</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Tuberculosis</h5>
							<p class="card-text">The tests for TB include the skin test, the sputum test and the IGRAs. There are also molecular tests and the chest X-ray.
</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
						<div class="card-body"style="background-color:#E1F1E8">
							<h5 class="card-title">Appendicitis tests</h5>
							<p class="card-text">Appendicitis tests help diagnose appendicitis, an inflammation of the appendix.</p>
							<a href="#!" class="btn btn-primary">Book a Test</a>
							<a href="#" class="btn btn-success">More info</a>
						</div>
						</div>
					</div>

					
				</div>				

				
				
					
			</div>
			
		</div>
		
	</div>
	</main>
	<!--FOOTER-->
<?php
	include "inc/foot.inc.php";
?>