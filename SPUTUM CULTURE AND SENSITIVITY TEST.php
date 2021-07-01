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
            <span class="text-center"> <strong> 24 HOURS URINARY PROTEINS </strong>
            </span>
            <hr>
            
            
        </div>
    </body>
    <form>
 
        <table class="name">
            <tr>
            <th class="text">TEST</th>
            <th class="value">RESULT</th>
            </tr>
            <tr>
            
            <td>REPORT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
            <td><textarea name="message"rows="2" cols="50" ></textarea> </td>
            
            </tr> 
     
                <tr>
      <td> SPECIMEN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </td>
      <td><textarea name="message" rows="2" cols="50"></textarea></td>
  </tr>
                
                
         <tr>
      <td>METHOD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     
                       
      <td> <textarea name="message" rows="2" cols="50"></textarea></td>
                    
      
     
    </tr>
                
                
         
              
        </table><br>
        
        
        <table class="name">
            <border align="left"><h5>MACROSCOPIC EXAMINATION</h5></border>
        <tr>
            <td>RESULT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><textarea name="message" rows="2" cols="50"></textarea></td>
            
            
            </tr></table>
        <table class="name">
            <border align="left"><h5>SMEAR EXAMINATION</h5></border>
         
            <tr>
            <td>Gram's Stain</td>
            <td><textarea name="message" rows="2" cols="50"></textarea></td>
            
            
            </tr>
             <tr>
            <td>Wet Mount</td>
            <td><textarea name="message" rows="2" cols="50"></textarea></td>
            
            
            </tr>
         <tr>
            <td>Ziehl Neelson's Stain</td>
            <td><textarea name="message" rows="2" cols="50"></textarea></td>
            
            
            </tr>
        
        
        </table>
                <table class="name">
            <border align="left"><h5>ORGANISMS ISOLATED</h5></border>
        <tr>
            <td>RESULT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><textarea name="message" rows="2" cols="50"></textarea></td>
            
            
            </tr>
                    <tr>
            <td>Note&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><textarea name="message" rows="2" cols="50"></textarea></td>
            
            
            </tr>
             
        </table>
         <div style="text-align: center"><strong> <button onclick="myFunction()">Print </button></strong></div>
<script>
function myFunction() {
  window.print();
}
</script>
    </form>
</html>
            
            