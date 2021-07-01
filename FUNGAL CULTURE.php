<html>
<title>FUNGAL CULTURE</title>

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
            <span class="text-center"> <strong> FUNGAL CULTURE </strong>
            </span>
            <hr>
            
            
        </div>
    </body>
    <form>
        <table class="name">
            <div style="text-align: center"><h2>TESTS RESULTS</h2></div>
    <tr>
      <th class="test"> Test</th>
      <th class="value"> Result &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
    </tr>
    <tr>
      <td> Report</td>
      <td><input type="TEXT" name="number" value=""></td>
     
    </tr>
            <tr>
      <td>Specimen </td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
            
    <tr>
      <td> Method</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
            
         <table class="name">  
             <div style="text-align: center"><h2>MACROSCOPIC EXAMINATION</h2></div>
    <tr>
      <td> Result&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><input type="text" name="number"></td>
    </tr>
          </table>
          
             <table class="name">
                 <div style="text-align: center"><h2>SMEAR EXAMINATION</h2></div>
    <tr>
      <td>Gram's Stain&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>  
    <tr>
      <td>Wet Mount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
    <tr>
      <td>KOH Mount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>
              <table class="name">
                  <div style="text-align: center"> <h2>ORGANISMS ISOLATED</h2></div>
    <tr>
      <td>Result&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><input type="TEXT" name="number" value=""></td>
    </tr>   
              </table>
            
</table>
       <div style="text-align: center"><strong> <button onclick="myFunction()">Print </button></strong></div>
<script>
function myFunction() {
  window.print();
}
</script>
           
        
        
            </table>
    </form>
    
    