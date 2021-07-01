<html>
<title>Urea-Creatinine</title>

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
            <span class="text-center"> <strong> Urea-Creatinine </strong>
            </span>
            <hr>
            
            
        </div>
    </body>
    <form>
        <table class="name">       
    <tr>
      <td class="test"> Test </td>
      <td class="value"> Normal Range </td>
      <td class="normal"> Result  </td>
    </tr>
    <tr>
      <td>UREA</td>
      <td class="normal">15-40 ml/dl</td> 
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
    <tr>
      <td>CREATININE</td>
      <td class="normal">0.5-1.1 ml/dl</td> 
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
    <tr>
      <td>SODIUM</td>
      <td class="normal">136-145 ml/dl</td> 
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
    <tr>
      <td>POTASIUM</td>
      <td class="normal">3.5-5.1 ml/dl</td> 
      <td><input type="TEXT" name="number" value=""></td>
    </tr>               
</table><br>
        
        <tr>
            <border align="left">
            <h6>*Please Corrlate with clinical condition</h6>   
            <h6>*Here Test done on:-<br>
            Automated Biochemistry  analyser Merck Microlab 200<br>
            and Automated Electrolytes Analyser 9180 AVL Roche(Switzerland) USA<br>
            </h6>
            </border>
            </tr>
        
        <div style="text-align: center"><strong> <button onclick="myFunction()">Print </button></strong></div>
<script>
function myFunction() {
  window.print();
}
</script>
           
        
        
</form>
    </body>
    
    