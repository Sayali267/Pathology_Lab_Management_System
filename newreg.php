<html>
    <head>
        <title>Pathology Lab  management system</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <link href="Bootstrap/animate.css" rel="stylesheet";>
        <link href="style1.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron">
            <h1 class="serif"><strong>  PATHOLOGY LAB MANAGEMENT SYSTEM</strong></h1>      
        </div>
        <nav class="navbar navbar-static-top" role="navigation" style="background-color: #808080;">
    
        <div class="container">
            <a href="home.php" class="navbar-brand text">Home</a>
    
            

        
        
        <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
                
                <li><a class="text" href="index1.php">Log Out</a></li>
            </ul>

        </div>

 </div>
          </nav>
      
   
       
    
         <div class="container">
  
      <h2 style="color: red"><center>Registration Form</center></h2>
             <div>
        <form class="Ragistration form" method="post" >
            
    <div class="form-group">
        <div class="col-md-7">
             <label class="control-label col-sm-2" for="Name">Name<font class="formclr" style="color: red;">*</font>:</label> 
            
      <div class="col-sm-10">
        <input type="name" class="form-control" id="patname" placeholder="Enter Full Name" name="name" required>
          <br>
      </div>
            </div>
            </div>
            <div class="form-group">
        <div class="col-md-7">
      <label class="control-label col-sm-2" for="Refered By">Refered By<font class="formclr" style="color: red;">*</font>:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Drname" placeholder="Enter Doctor Name" name="ref" required><br>
      </div>
            </div></div>
            

    <div class="form-group">
         <div class="col-xs-7">
      <label class="control-label col-sm-2" for="mobile No.">Mobile No<font class="formclr" style="color: red;">*</font>.:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="mobileNo." placeholder="Enter mobile No." name="mob" required><br>
      </div>
        
      
        </div>
    </div>
       
    <div class="form-group">
	
	<div class="form-group">
               <div class="col-md-7">
      <label class="control-label col-sm-2" for="city/district">City/District:</label>
      <div class="col-sm-10">          
        <input type="city/district" class="form-control" id="citydistrict" placeholder="Enter City/District" name="city" required><br>
      </div>
            </div>
            </div>
			
			
        <div class="col-md-7">
      <label class="control-label col-sm-2" for="street address">Street Address<font class="formclr" style="color: red;">*</font>:</label>
      <div class="col-sm-10">          
        <input type="street address" class="form-control" id="street address" placeholder="Enter street address" name="address" required><br>
      </div>
            </div></div>
        
       <div class="form-group">
           <div class="col-md-7">
      <label class="control-label col-sm-2" for="State">State:</label>
      <div class="col-sm-10">          
         <select class="form-control" name="state"id="states" required>
        <option>--Select--</option>
             <option value="Maharashtra" > Maharashtra
         <option value="Andaman Nicobar" > Andaman Nicobar			<option value="Andhra Pradesh" > Andhra Pradesh			<option value="INAR" > Arunachal Pradesh			<option value="INAS" > Assam			<option value="INBI" > Bihar			<option value="INCH" > Chandigarh			<option value="INCT" > Chhattisgarh			<option value="INDA" > Dadra and Nagar Haveli			<option value="INDD" > Daman and Diu			<option value="INDL" > Delhi			<option value="INGO" > Goa			<option value="INGU" > Gujarat			<option value="INHA" > Haryana			<option value="INHP" > Himachal Pradesh			<option value="INJK" > Jammu and Kashmir			<option value="INJH" > Jharkhand			<option value="INKA" > Karnataka			<option value="INKR" > Kerala			<option value="INLA" > Lakshadweep			<option value="INMP" > Madhya Pradesh			<option value="INMH" > Maharashtra			<option value="INMA" > Manipur			<option value="INME" > Meghalaya			<option value="INMI" > Mizoram			<option value="INNA" > Nagaland			<option value="INOR" > Orissa			<option value="INPY" > Pondicherry			<option value="INPB" > Punjab			<option value="INRJ" > Rajasthan			<option value="INSI" > Sikkim			<option value="INTN" > Tamil Nadu			<option value="INTR" > Tripura			<option value="INUP" > Uttar Pradesh			<option value="INUT" > Uttaranchal			<option value="INWB" > West Bengal		</select>
               <br>
               </div>
            </div>
            </div>
           
           
         
 
        <div class="form-group">
            <div class="col-md-7">
      <label class="control-label col-sm-2" for="locatin">Location:</label>
      <div class="col-sm-10">          
        <input type="locatin" class="form-control" id="location" placeholder="Enter locatin" name="locatin" required><br>
      </div> 
            </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-7">
      <label class="control-label col-sm-2"  for="email">Email Id<font class="formclr" style="color: red;">*</font>:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="emails" placeholder="Enter email" name="email" required><br>
      </div>
            </div>
            </div>
             
                  <div class="form-group">
                      <div class="col-md-7">
      <label class="control-label  col-sm-2"  for="blood group">Blood Group<font class="formclr"  style="color: red;">*</font>:</label>
      <div class="col-sm-10">
        <select class="form-control" name="bg" id="blood" required>
        <option value="">--Select--
							<option value="A+" > A+		</option>	<option value="A-" > A-		</option>	<option value="B+" > B+		</option>	<option value="B-" > B-		</option>	<option value="AB+" > AB+		</option>	<option value="AB-" > AB-			</option>	<option value="O+" > O+		</option>	<option value="O-" > O-	</option>		<option value="Don't_know" > Don't know	</option>					</select><br>

      </div>
                      </div>
            </div>
                      
                 <div class="form-group">
                     <div class="col-md-7">
      <label class="control-label col-sm-2"  for="weight">Weight<font class="formclr"  style="color: red;">*</font> (Kgs):</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="weight" placeholder="Enter weight" name="weight"><br>
      </div>
                     </div>
            </div>
                     
         <div class="form-group">
             <div class="col-md-7">
      <label class="control-label col-sm-2"   for="Date Of Birth">Date Of Birth<font class="formclr"  style="color: red;">*</font>:</label>
      <div class="col-sm-10">
        <input type="Date" name="dob" class="form-control" id="dateob" max="05-07-2019" required><br>
      </div>
             </div></div>
            
              <div class="form-group">
             <div class="col-md-7">
      <label class="control-label col-sm-2"   for="Date Of Regestration">Date Of Registration<font class="formclr"  style="color: red;">*</font>:</label>
      <div class="col-sm-10">
        <input type="Date" name="dor" class="form-control" id="dateor" required><br>
      </div>
             </div></div>
             
            <div class="form-group">
                <div class="col-md-7">
      <label class="control-label col-sm-2" for="gender">Gender<font class="formclr"  style="color: red;">*</font>:</label>
      <div class="col-sm-10">
        <input type="radio" name="Gender" value="Male" id="gend" required>Male&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="Gender" value="Female" id="gend" required>Female
          <br>
      </div>
                </div>  
            </div><br><br><br>
           
           
        
            
        
    
          <div class="form-group col-md-8">
          <p style="text-align: center;"> <button type="submit" class="btn btn-default" style="background-color: #808080;" value="submit" name="submit">Submit</button> </p>
                     
                     </div>       
                     </form>
                </div></div>
    </body>

</html>






<?php

$con=mysqli_connect("localhost","root","","path");
if(isset($_REQUEST["submit"])){
    
$a=("PLM");
    $y=date('y');
    $g=mysqli_query($con,"select * from reg");
    $g1=mysqli_num_rows($g);
    $inv= str_pad($g1,8,'0',STR_PAD_LEFT);
    $q=$a.$y.$inv;
    
    $id=$q;
	$name=$_REQUEST["name"];
	$ref=$_REQUEST["ref"];
    $mob=$_REQUEST["mob"];
    $address=$_REQUEST["address"];
    $city=$_REQUEST["city"];
    $state=$_REQUEST["state"];
    $locatin=$_REQUEST["locatin"];
    $email=$_REQUEST["email"];
    $bg=$_REQUEST["bg"];
    $weight=$_REQUEST["weight"];
    $dob=$_REQUEST["dob"];
    $dor=$_REQUEST["dor"];
    $Gender=$_REQUEST["Gender"];
	mysqli_query($con,"insert into reg(id,name,ref,mob,address,city,state,locatin,email,bg,weight,dob,dor,Gender)values('$id','$name','$ref','$mob','$address','$city','$state','$locatin','$email','$bg','$weight','$dob','$dor','$Gender')");
    
    $msg1="Successfuly regester.";
        $msg2="Your registration number is:   ";
    $msg4=$msg1.$msg2.$id;
    echo "<script type='text/javascript'>alert('$msg4');</script>";
    exit();

}
?>







                     