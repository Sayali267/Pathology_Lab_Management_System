<html>
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
            <span class="text-center"> <strong> HEMATOLOGY</strong>
            </span>
            <hr>
            
            
        </div>
    </body>
    <form class="name">
        
        <table class="name">
    <tr>
      <th class="test"> TEST  </th>
      <th class="value"> PATIENT VALUE </th>
      <th class="normal"> NORMAL VALUE  </th>
      
    </tr>
    <tr>
      <td> HAEMOGLOBIN</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> 11.5 – 16.5 g/dl</td>
     
    </tr>
            <tr>
      <td>  TLC ( WBC)</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> 4000 – 11000/ul</td>
     
    </tr>
                   <tr>
      <td>Neutrophills%</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> 40 – 70 %   </td>
     
    </tr>       <tr>
      <td>Lymphocytes %</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> 15 – 40 % </td>
     
    </tr>    
        <tr>
      <td>Eosinophils</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>  01 – 06 %  </td>
     
    </tr>
       
               <tr>
      <td>Monocytes</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>02 – 10 %  </td>
     
    </tr>
               <tr>
      <td>Eosinophils</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>  01 – 06 %  </td>
     
    </tr>
               <tr>
      <td>Basophiles</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>  00 – 01 %  </td>
     
    </tr>   <tr>
      <td> HCT (P.C.V.6%.) </td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> 35 – 50 % </td>
     
    </tr>   <tr>
      <td> R.B.C. </td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>  3.8 – 5.8 million/ul</td>
     
    </tr>   <tr>
      <td> MCV</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>  80 – 97 fl</td>
     
    </tr>   <tr>
      <td>MCH</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> 26.5 – 33.5 Pg </td>
     
    </tr>
      
             <tr>
      <td>MCHC</td>
      <td><input type="TEXT" name="number" value=""></td>
      <td>       31.5 – 36.5 g/dl </td>
     
    </tr>
                   <tr>
      <td>Platelet count </td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> 150 – 400  103/mm3. </td>
     
    </tr>
             <tr>
      <td>RDW % </td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> 11.0 – 16.0 % </td>
                               <tr>
      <td><strong>BLOOD  SUGAR  R</strong> </td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> <strong>164mg/dl</strong></td>
     
    </tr>
                                    <tr>
      <td><strong>BLOOD  SUGAR  F</strong> </td>
      <td><input type="TEXT" name="number" value=""></td>
      <td> <strong>107mg/dl</strong></td>
     
    </tr>
            
</table>
       <strong> <button onclick="myFunction()">Print </button></strong>
<script>
function myFunction() {
  window.print();
}
</script>
           
        
        
</form>
    
    
    