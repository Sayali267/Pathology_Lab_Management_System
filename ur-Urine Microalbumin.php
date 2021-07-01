<html>
<title>Urine Microalbumin</title>

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
            <span class="text-center"> <strong> Urine Microalbumin </strong>
            </span>
            <hr>
            
            
        </div>
    </body>
    <form>
        <table class="name">       
    <tr>
      <th class="test"> Test </th>
      <th class="normal"> Result  </th>
      <th class="normal"> Range</th>
    </tr>
    <tr>
      <td>Urine - Microalbumin</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td><h6>Reference Range :-Less Than 18 mcg/ml<br>
                Technology Used :- On Automated Nycocard reader</h6></td>
    </tr>
             
    <tr>
      <td>Urine – Creatinine</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td><h6>Reference Range:
			  Male:-39–259 mg/dl &nbsp;&nbsp;  Female:-28–217 mg/dl<br>
              Technology Used :- Creatinine Jaffe Method On Automated Biochemishtry Analyser Microlab 200</h6></td>
    </tr>  
    <tr>
      <td>Urine – Microalbumin/Creatinine Ratio (UA/C)</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td><h6>Reference Range:- Less Than 30 microg/ml Of Creatinine</h6></td>
    </tr>
</table>
        
        
        <div style="text-align: center"><strong> <button onclick="myFunction()">Print </button></strong></div>
<script>
function myFunction() {
  window.print();
}
</script>
           
        
        
</form>
    </body>
    
    