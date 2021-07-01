<?php

$con=mysqli_connect("localhost","root","","path");

if(isset($_POST['User'])){
    
    $uname=$_POST['User'];
    $password=$_POST['Pass'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($con , $sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        header("refresh:1 url=home.php");
        exit();
        
    }
    else{
        $message="Username or Password is wrong";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("refresh:1 url=finallogin.php");
        exit();
    }
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("mca.jpg");
  height: 100%;
   width: 100%;   
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
   position: center;
  /* right: 0; */ 
  
  margin-right: 20%;
  margin-left: 40%;
  max-width: 300px;
  padding: 16px;
  background-color: rgba(10 , 10 , 10 , 0.5);
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: red;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
    .log{
        
        padding-top: 60px;
        font-size: 40px;
        padding-left: 300px;
        font-style: italic;
        color: lightblue;
    }

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body class="bg-img">
<h1 class="log" style = "font-size: 60px;">GET EASY ACCESS TO PATHOLOGY LAB</h1>
<div class="container">
<div>
  <form method="POST" action="" >
    <h1 style= "color: white">Login</h1>
  
    
      
      
    <label for="email" style= "color: white"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="User" required>

    <label for="psw" style= "color: white"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Pass" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
</div>



</body>
</html>
