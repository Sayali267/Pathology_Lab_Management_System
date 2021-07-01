<html>
    <head>
        <style>
             {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 15px 20px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 27px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width:100%;
    height: 5%;
    text-align: center;
}

td, th {
  border: 2px solid aqua;
  text-align: left;
    text-align: right;
    text-align-last: center;
  padding: 2px;
}

tr:nth-child(even) {
  background-color: lightgray;
    text-align: left;
    text-align: right;
    text-align-last: center;
}
</style>
    
        <title>PATHOLOGY LABORATORY</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <link href="Bootstrap/animate.css" rel="stylesheet";>
        <link href="style1.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>

<table>
 
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>REFERED BY</th>
      <th>MOBILE NO.</th>
      <th>CITY</th>
      <th>ADDRESS</th>
      <th>STATE</th>
      <th>LOCATION</th>
      <th>EMAIL</th>
      <th>BLOOD GROUP</th>
      <th>DATE OF BIRTH</th>
      <th>DATE OF REGISTRATION</th>
      <th>GENDER</th>
      

  </tr>
<?php
// create table in mysql database
//now create connection

$con=mysqli_connect("localhost","root","","path");
if(!$con){
    
    echo "Database connection failed";
}
//connection sucess ok
//now fetch table from database ok

$query="SELECT * FROM reg";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
      
      echo"<tr>";
      echo"<td>".$row['id']."</td>";
      echo"<td>".$row['name']."</td>";
      echo"<td>".$row['ref']."</td>";
      echo"<td>".$row['mob']."</td>";
      echo"<td>".$row['city']."</td>";
      echo"<td>".$row['address']."</td>";
      echo"<td>".$row['state']."</td>";
      echo"<td>".$row['locatin']."</td>";
      echo"<td>".$row['email']."</td>";
      echo"<td>".$row['bg']."</td>";
      echo"<td>".$row['dob']."</td>";
      echo"<td>".$row['dor']."</td>";
      echo"<td>".$row['Gender']."</td>";
      echo"</tr>";
 }
        
         function getData()
{
    $data = array();
    
    $data[1]=$_POST['id'];
    $data[2]=$_POST['name'];
    $data[3]=$_POST['ref'];
    $data[4]=$_POST['mob'];
             $data[5]=$_POST['city'];
             $data[6]=$_POST['address'];
             $data[7]=$_POST['state'];
             $data[8]=$_POST['locatin'];
             $data[9]=$_POST['email'];
             $data[10]=$_POST['bg'];
            
             $data[12]=$_POST['dob'];
             $data[13]=$_POST['dor'];
             $data[14]=$_POST['Gender'];
    return $data;
}    
if(isset($_POST['search']))
{
   $info = getData();
        $search_query="SELECT * FROM reg WHERE name='$info[1]'";
        
        $search_result= mysqli_query($con,$search_query);
        if($search_result)
        {
            if(mysqli_num_rows($search_result))
            {
                while($rows = mysqli_fetch_array($search_result))
                {
                    $id=$rows['id'];
                    $name = $rows['name'];
                    $ref= $rows['ref'];
                    $mob = $rows['mob'];
                    $city = $rows['city'];
                    $address = $rows['address'];
                    $state = $rows['state'];
                    $locatin = $rows['locatin'];
                    $email = $rows['email'];
                    $bg = $rows['bg'];
                    
                    $dob = $rows['dob'];
                    $dor = $rows['dor'];
                    $Gender = $rows['Gender'];
                    
                }
            }else{
                echo("No Data");
            }
        }else{
            echo("result error");
        } 
    }
?>
        
        <div class="jumbotron">
            <h1 class="serif"><strong>PATHOLOGY LABORATORY</strong></h1>      
        </div>
        <nav class="navbar navbar-static-top" role="navigation" style="background-color: #808080;">
    
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <div class="search-container">
    <form>
      
     <a class="active" href="searchhistory.php">Search</a> 
    </form>
  </div>
</div>
 </nav>
    </body>
    
       

<h2 style="text-align:center;"><strong>DATABASE HISTORY</strong></h2>

