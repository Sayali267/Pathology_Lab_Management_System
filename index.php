<!DOCTYPE html>
<html>
<head><link href="style1.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>Billing</title>
    <style>
        tr:nth-child(even){
            background-color: lightblue;
        }
    </style>
</head>
    <body>
    <centre>
        <div>
        <form method="post" action="print_bill.php">
            <table>
                <th>Patient Name</th>
                <th>Reg no.</th>
                <th>Gender</th>
                <th>Date</th>
                <th>Age</th>
                <tr>
                    <td style="padding: 10px;"><input type="text" name="name" placeholder="Name"></td>
                    <td><input type="number" name="reg_num" placeholder="Reg No"></td>
                    <td><select style="name" name="class" value=""><option selected>--Gender--</option>
                    <option value="nursery">Male</option>
                    <option value="lKg">Female</option>
                    <option value="ukg">Other</option>
                    </select></td>
                    <td><input type="Date" name="date" value=""></td>
                    <td><input type="number" name="age" placeholder="Age"></td>
                </tr>
            </table>
            <table>
                 <div style="text-align: center"><strong><h2>TEST</h2></strong></div>
                <tr><td colspan="5">
                    <fieldset>
                        <legend>Heart</legend>
                        <label>Cardioac Profile</label><input type="checkbox" name="card" value="card">
                        <label>CPK-MB</label><input type="checkbox" name="cpk" value="cpk">
                        <label>heart LDH</label><input type="checkbox" name="ldh" value="ldh">
                    </fieldset>
                    </td></tr>
                
                    <tr><td colspan="5">
                    <fieldset>
                        <legend>Liver</legend>
                        <label>Liver function test</label><input type="checkbox" name="lft" value="lft">
                        <label>Stool culture and sensitivity</label><input type="checkbox" name="scs" value="scs">
                        <label>Stool Analysis</label><input type="checkbox" name="sa" value="sa">
                    </fieldset>
                    </td></tr>
                
                    <tr><td colspan="5">
                    <fieldset>
                        <legend>Lungs</legend>
                        <label>D-dimer</label><input type="checkbox" name="dimer" value="dimer">
                        <label>Sputum Culture and Sensitivity Test</label><input type="checkbox" name="scst" value="scst">
                        <label>Sputum Examination</label><input type="checkbox" name="set" value="set">
                        <label>Monutoux Test</label><input type="checkbox" name="mt" value="mt">
                        <label>Sputum for AFB and Montex Test</label><input type="checkbox" name="afb" value="afb">                        
                    </fieldset>
                    </td></tr>
                
                    <tr><td colspan="5">
                    <fieldset>
                        <legend>Reproduction</legend>
                        <label>Leutinising Hormone</label><input type="checkbox" name="lh" value="lh">
                        <label>Seamen Analysis</label><input type="checkbox" name="sma" value="sma">
                        <label>Vaginal Swab Culture</label><input type="checkbox" name="vsc" value="vsc">
                    </fieldset>
                    </td></tr>
                
                    <tr><td colspan="5">
                    <fieldset>
                        <legend>Kidney</legend>
                        <label>Kidney Test Biochemistry 1</label><input type="checkbox" name="kta" value="kta">
                        <label>Kidney Test Biochemistry 2</label><input type="checkbox" name="ktb" value="ktb">
                        <label>Kidney Test Biochemistry 3</label><input type="checkbox" name="ktc" value="ktc">
                        <label>Kidney Report</label><input type="checkbox" name="kr" value="kr">
                        <label>Kidnry Stages</label><input type="checkbox" name="ks" value="ks">
                        <label>Albumin to Creatinine</label><input type="checkbox" name="atc" value="atc">
                        <label>Renal Profile</label><input type="checkbox" name="rp" value="rp">
                    </fieldset>
                    </td></tr>
                
                    <tr><td colspan="5">
                    <fieldset>
                        <legend>Brain</legend>
                        <label>Brain Test</label><input type="checkbox" name="brain" value="brain">
                    </fieldset>
                    </td></tr>
                
                    <tr><td colspan="5">
                    <fieldset>
                        <legend>Blood</legend>
                        <label>BTCT</label><input type="checkbox" name="btct" value="btct">
                        <label>Chlotesterol</label><input type="checkbox" name="chol" value="chol">
                        <label>CBC</label><input type="checkbox" name="cbc" value="cbc">
                        <label>Co-agulation Test</label><input type="checkbox" name="cot" value="cot">
                        <label>Direct Coombs test</label><input type="checkbox" name="dct" value="dct">
                        <label>Hb Report</label><input type="checkbox" name="hbr" value="hbr">
                        <label>Iron Study</label><input type="checkbox" name="iron" value="iron">
                        <label>Platlet Count</label><input type="checkbox" name="pla" value="pla">
                        <label>Ra-Quantitative</label><input type="checkbox" name="raq" value="raq">
                        <label>Sicking Test</label><input type="checkbox" name="sic" value="sic">
                        <label>Erythrocyte Sedimentation rate</label><input type="checkbox" name="esr" value="esr">

                    </fieldset>
                    </td></tr>
                
                    <tr><td colspan="5">
                    <fieldset>
                        <legend>Suger</legend>
                        <label>GTT</label><input type="checkbox" name="gtt" value="gtt">
                        <label>Biochemistry 1</label><input type="checkbox" name="bioa" value="bioa">
                        <label>Biochemistry 2</label><input type="checkbox" name="biob" value="biob">
                        <label>Biochemistry 3</label><input type="checkbox" name="bioc" value="bioc">
                        <label>Biochemistry 4</label><input type="checkbox" name="biod" value="biod">
                        <label>Biochemistry 5</label><input type="checkbox" name="bioe" value="bioe">
                    </fieldset>
                    </td></tr>
                
                    <tr><td colspan="5">
                    <fieldset>
                        <legend>Disease</legend>
                        <label>CMV-IGG</label><input type="checkbox" name="igg" value="igg">
                        <label>Drain Fluid Culture and Sensitivity</label><input type="checkbox" name="dfcs" value="dfcs">
                        <label>Dengue</label><input type="checkbox" name="deng" value="deng">
                        <label>Elisa Test for</label><input type="checkbox" name="eli" value="eli">
                        <label>Fungal Culture</label><input type="checkbox" name="fun" value="fun">
                        <label>Examination of Sputum</label><input type="checkbox" name="eos" value="eos">
                        <label>HAV A</label><input type="checkbox" name="hava" value="hava">
                        <label>HAV B</label><input type="checkbox" name="havb" value="havb">
                        <label>Joint pain</label><input type="checkbox" name="jp" value="jp">
                        <label>Maleria Antigen</label><input type="checkbox" name="ma" value="ma">
                        <label>Maleria Parasites</label><input type="checkbox" name="mp" value="mp">
                        <label>T3 T4 TSH</label><input type="checkbox" name="tsh" value="tsh">
                        <label>Thyroid TSH</label><input type="checkbox" name="thy" value="thy">
                        <label>Widal</label><input type="checkbox" name="wid" value="wid">
                        <label>Widal Antigen</label><input type="checkbox" name="wida" value="wida">
                    </fieldset>
                    </td></tr>
                
                   
            </table>
        <div style="text-align: center"><strong> <button onclick="myFunction()">Print Bill </button></strong></div>
        </form>
        </div>
    </centre>
    </body>
</html>