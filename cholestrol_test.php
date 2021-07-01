<!--header-->
<?php
	
	include "inc/head.inc.php";
?>


<style>
    input{
            border:none;
            border-bottom: 1px solid;
           
        }
</style>
    
        <div class="container card" style="padding:25px;margin-top:3cm">

        
            <div class="text-center">
            <h2>Cholesterol</h2> 
            </div>
            <hr style="border-bottom: 1px solid">

            <div class="col-12 row">
                    <div class="col-6 p-0">
                        <label>Lab No: </label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="col-6 p-0">
                        <label>Date: </label>
                        <input type="date" placeholder="">
                </div>
            </div>
                <div class="col-12 row">
                    <div class="col-6 p-0">
                        <label>Patient Name: </label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="col-6 p-0">
                        <label>Sex: </label>
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
            
            
            
            
        </div>
        
        
        
    <div class="col-sm-8"style="margin:auto;margin-top:20px" >
    <div class="card" style="padding:25px">

    <table class="name">
        <tr>
        <th class="test"> TEST  </th>
        <th class="value"> NORMAL RANGE </th>
        <th class="test">RESULT</th>
        </tr>
                    
        <tr>
            <td>Total  Cholesterol</td>
            <td>125-200 mg/dl</td>
            <td><input type="TEXT" name="number" value=""></td>
        </tr>
        
        <tr>
            <td>GGT</td>
            <td>  5-32 U/L	</td>
            <td><input type="TEXT" name="number" value=""></td>
        </tr>
    </table>

        <h5 style="margin-top:20px">*  Please Correlate with clinical condition<br>
            * Tests available here :-   Automated Biochemistry analyzer Merck Microlab 200<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Automated Haematolical  analyzer ABX Micros 60 {France} CBC   <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automated Nycocard Reader For Quantitative Detrmination Of<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D-Dimer,HBa1c,CRP,Urine-Microalbum<br>
        </h5>
        
        
        
        
        
        </div>
        
        </div>
        
        
    <div style="text-align: center;margin-top:20px"><strong><button onclick="myFunction()">Print </button></strong></div>
<script>
function myFunction() {
  window.print();
}
</script>
 



<!--FOOTER-->
<?php
		include "inc/foot.inc.php";
?>