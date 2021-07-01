<html>
<title>Stool Analisys</title>

<head>
    
        <link href="style1.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        body{
            margin-top: 100px;
        }
        .card{
            padding: 25px;
        }
        input{
            border:none;
            border-bottom: 1px solid;
            border-bottom-color: rgba(0,0,0,.125);
        }
        .text-center{
            text-align: center;
        }
        
    </style>
    <body>
        <div class="container card">
            <div class="col-12 row">
                    <div class="col-6 p-0">
                        <label>Lab No.</label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="col-6 p-0">
                        <label>Date:</label>
                        <input type="date" placeholder="">
                </div>
            </div>
                <div class="col-12 row">
                    <div class="col-6 p-0">
                        <label>Patient Name:</label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="col-6 p-0">
                        <label>Sex:</label>
                        <input type="text" placeholder="">
                    </div>
                </div>
    
                <div class="col-12 row">
                    <div class="col-6 p-0">
                        <label>REF. BY DR.: </label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="col-6 p-0">
                        <label>AGE: </label>
                        <input type="number" placeholder="">
                    </div>
                </div>
            
                <div class="col-12 row">
                    <div class="col-6 p-0">
                        <label>SAMPLE COLL. AT: </label>
                        <input type="text" placeholder="">
                    </div>
                </div>
            
            <hr>
            <span class="text-center"> <strong> Stool Analisys </strong>
            </span>
            <hr>
            
            
        </div>
    </body>
    <form>
        
        <table class="name">
            <div style="text-align: center"><h2>PHYSICAL EXAMINATION</h2></div>
    <tr>
      <td> Color: </td>
      <td><input type="TEXT" name="number" value=""></td>
      
    
    </tr>
            <tr>
      <td> Consistancy:</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
            
    <tr>
      <td> Nature Of Collection:</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
            
         <table class="name">  
             <div style="text-align: center"><h2> CHEMICAL EXAMINATION</h2></div>
    <tr>
      <td> PH:</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
                <tr>
      <td> Suger Benedicts:</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
          
             <table class="name">
                 <div style="text-align: center"><h2>MICROSCOPIC EXAMINATION</h2></div>
    <tr>
      <td> Red Blood Cells:</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>  
                <tr>
      <td> Pus Cells:</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
                <tr>
      <td> Cyst:</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
                <tr>
      <td> Ova:</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
    
            
            
</table>
             <div style="text-align: center"><strong> <button onclick="myFunction()">Print </button></strong></div>
<script>
function myFunction() {
  window.print();
}
</script>
           
        
        
</form>
    
    
    