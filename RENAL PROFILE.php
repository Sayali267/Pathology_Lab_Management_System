<html>
<title>RENAL PROFILE</title>

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
            <span class="text-center"> <strong> RENAL PROFILE </strong>
            </span>
            <hr>
            
            
        </div>
    </body>
    <form>
        <table class="name">
    <tr>
      <th class="test"> Test</th>
      <th class="value"> Result  </th>
      <th class="value">Range</th>
    </tr>
    <tr>
      <td>Blood Urea</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>10 - 50 mg/dl</td>
    </tr>
    <tr>
    <td>Blood Urea Nitrogen</td>
    <td><input type="text" name="number"></td>
    <td>04 - 20 mg/dl</td>
    </tr>
    <tr>
      <td>S. Creatinine</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>Male : 0.7 - 1.4 mg/dl<br>
Female : 0.6 - 1.2 mg/dl</td>
    </tr>
            <tr>
      <td>S. Uric Acid</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> Male : 3.4 - 7.0 mg/dl<br>
 Female : 2.4 - 5.7 mg/dl</td>
    </tr>
            <tr>
      <td>S. Phosphorus</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>Adults : 2.5 - 5.0 mg/dl<br>
Children : 4.0 - 7.0 mg/dl</td>
    </tr>
            <tr>
      <td>S. Calcium</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>8.5 - 10.5 mg/dl</td>
    </tr>
            <tr>
      <td>Total Proteins</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>6.2-8.0 mg/dl</td>
    </tr>
            <tr>
      <td>S. Albumin</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>3.5-5.5 mg/dl</td>
    </tr>
            <tr>
      <td>Globumin</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>2-3.5mg/dl</td>
    </tr>
            <tr>
      <td>A.G Ratio</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>1.0 - 2.3 </td>
    </tr>
            <tr>
      <td>S.SODIUM</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>135 - 149 mEq/L</td>
    </tr>
            <tr>
      <td>S.POTASSIUM</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>3.5 - 5.5 mEq/L.</td>
    </tr>
            <tr>
      <td>S.CHLORIDES</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>9.8 - 107 mEq/L</td>
    </tr>
            
     
</table><br>
        <tr>
        <border align="left">
        <h6>Test Done on semi automated analyser Micro Lab RX-50 & Audicom's AC9101.</h6>
        </border>
        </tr>
        
        
        <div style="text-align: center"><strong> <button onclick="myFunction()">Print </button></strong></div>
<script>
function myFunction() {
  window.print();
}
</script>
           
        
        
</form>
    
    
    