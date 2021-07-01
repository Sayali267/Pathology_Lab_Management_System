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
        <div class="jumbotron">
            <h1 class="serif"><strong>PATHOLOGY LABORATORY</strong></h1>      
        </div>
        <nav class="navbar navbar-static-top" role="navigation" style="background-color: #808080;">
    
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <div class="search-container">
    <form action="" method="get">
      <input type="text" placeholder="Enter Rg. NO." name="id">
     <input type="submit" value="search"> 
    </form>
  </div>
</div>
 </nav>
    </body>
    <body>
       

<h2 style="text-align:center;"><strong>SEARCH HISTORY</strong></h2>

<table>
 
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>REFERED BY</th>
      <th>MOBILE NO.</th>
      <th>CITY</th>
      <th>STATE</th>
      <th>EMAIL</th>
      <th>BLOOD GROUP</th>
      <th>DATE OF BIRTH</th>
      <th>DATE OF REGISTRATION</th>
      <th>GENDER</th>
      

  </tr>
        
        
<?php
        $con=mysqli_connect("localhost","root","","path");
        
     if(isset($_GET['id'])) 
     {
         $ids=$_GET['id'];
         $query = mysqli_query($con,"select * from reg where id='$ids'");
         while($result=mysqli_fetch_array($query))
         {
?>
        
        <tr>
            <td><?php echo $result['id'];?></td>
            <td><?php echo $result['name'];?></td>
            <td><?php echo $result['ref'];?></td>
            <td><?php echo $result['mob'];?></td>
            <td><?php echo $result['city'];?></td>
            <td><?php echo $result['state'];?></td>
            <td><?php echo $result['email'];?></td>
            <td><?php echo $result['bg'];?></td>
            <td><?php echo $result['dob'];?></td>
            <td><?php echo $result['dor'];?></td>
            <td><?php echo $result['Gender'];?></td>
        </tr>
        </table>
        
        
        
        
<?php
        
         }
         
     }
?>
        
        
        
    </body>
        
    
    
    
    
</html>