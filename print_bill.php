
<?php

//to hide warning of undefined index or checkboxes
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$conn= mysqli_connect('localhost','root','','path');


$qry_rcv="SELECT `rcv_no` FROM `rcv` order by `id` DESC LIMIT 1";

$get_last_rcv= mysqli_query($conn, $qry_rcv);

$data=mysqli_fetch_assoc($get_last_rcv);

$rcv_no=$data['rcv_no'];
$rcv_no++;

$name= $_POST['name'];
$gender= $_POST['gender'];
$reg_num=$_POST['reg_num'];

$particulars= "".$_POST['card']." ".$_POST['cpk']." ".$_POST['ldh']." ".$_POST['lft']." ".$_POST['scs']." ".$_POST['sa']." ".$_POST['dimer']." ".$_POST['scst']." ".$_POST['set']." ".$_POST['mt']." ".$_POST['afb']." ".$_POST['lh']." ".$_POST['sma']." ".$_POST['vsc']." ".$_POST['kta']." ".$_POST['ktb']." ".$_POST['ktc']." ".$_POST['kr']." ".$_POST['ks']." ".$_POST['atc']." ".$_POST['rp']." ".$_POST['btct']." ".$_POST['chol']." ".$_POST['cbc']." ".$_POST['cot']." ".$_POST['dct']." ".$_POST['hbr']." ".$_POST['iron']." ".$_POST['pla']." ".$_POST['raq']." ".$_POST['sic']." ".$_POST['esr']." ".$_POST['bioa']." ".$_POST['biob']." ".$_POST['bioc']." ".$_POST['biod']." ".$_POST['bioe']." ".$_POST['igg']." ".$_POST['dfcs']." ".$_POST['eli']." ".$_POST['fun']." ".$_POST['eos']." ".$_POST['hava']." ".$_POST['havb']." ".$_POST['jp']." ".$_POST['ma']." ".$_POST['mp']." ".$_POST['tsh']." ".$_POST['thy']." ".$_POST['wid']." ".$_POST['wida'];


$age= $_POST['age'];

$date=$_POST['date'];

$month= "".$_POST['apr']." ".$_POST['may']." ".$_POST['jun']." ".$_POST['jul']." ".$_POST['aug']." ".$_POST['sep']." ".$_POST['oct']." ".$_POST['nov']." ".$_POST['dec']." ".$_POST['jan']." ".$_POST['feb']." ".$_POST['mar'];

$qry = " INSERT INTO `rcv` (`name`, `reg_num`,`class`, `depositer`, `date` , `rcv_no`, `particulars`, `fee_month`) VALUES ('$name','$reg_num','$class','$depositer','$date', '$rcv_no','$particulars','$month')";

$run=mysqli_query($conn,$qry);

$get_fee_month="SELECT `fee_month` FROM `rcv` WHERE `rcv_no`=$rcv_no";

$fee_data=mysqli_query($conn, $get_fee_month);
//Counting no of months paid
$fee_fetch=mysqli_fetch_assoc($fee_data);

$fee_string =$fee_fetch['fee_month'];

$fee_string= str_replace(' ', '', $fee_string);

$length= strlen($fee_string);
//Final No of months of fee paid
$no_of_month=$length;

?>
<div align="center">
	<body style="height: 147mm; width: 102mm; margin-top: 10px; margin-left: 8px;">
<table border="">
	<tr> <td  style= "text-align:center; border-width: 0px;" colspan="4" ><b style="font-size: 20px;">Pathology</b></td></tr>
	<tr>
		<td colspan="2" style="border-width: px;" rowspan="2">Patient Name: <b style="text-transform: uppercase; text-align: right;"><?php echo "".$_POST['name']." / ".$_POST['reg_num'];?></b><br>
		Age: <?php echo $_POST['age'];?><br>
		Gender:<b><?php echo $_POST['gender'];?></b>

		</td>
		<td align="right" colspan="2">Date: <?php echo $_POST['date'];?></td>
	</tr>
	<tr>
		<td colspan="3" align="right">Rc. No: <b><?php echo $rcv_no; ?></b></td>
	</tr>
	<tr>
		<td style="padding-left: 0px;"><b>Tests</b></td>
		
		<td><b>     </b></td>
		<td><b>Balance</b></td>
	</tr>
	<tr >
		<td style="padding-bottom: 150px; max-width: 25ch">
			<?php
			//Set item and their price
			if($_POST['card'])
			{
				echo ""."card"." = 50Rs";
				$amount=50;

			}
			if ($_POST['cpk']) {
				echo " "."cpk"." = 40Rs,";
				$amount=$amount+40;
			}
			if ($_POST['ldh']) {
				echo " "."ldh"." = 50Rs,";
				$amount=$amount+50;
			}

			if ($_POST['lft']) {
				echo " "."lft"." = 50Rs,";
				$amount=$amount+50;
			}
			if ($_POST['scs']) {
				echo " "."scs"." = 30Rs,";
				$amount=$amount+30;
			}
			if ($_POST['sa']) {
				echo " "."sa"." = 250Rs,";
				$amount=$amount+250;
			}
			if ($_POST['dimer']) {
				echo " "."dimer"." = 450Rs,";
				$amount=$amount+450;
			}
            if($_POST['scst'])  {
				echo ""."scst"." = 50Rs,";
				$amount=$amount+50;
                
            }
            if($_POST['set'])  {
				echo ""."set"." = 50Rs,";
				$amount=$amount+50;
                
            }
            if($_POST['mt'])  {
				echo ""."mt"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['afb'])
			{
				echo ""."afb"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['lh'])
			{
				echo ""."lh"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['sma'])
			{
				echo ""."sma"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['kta'])
			{
				echo ""."kta"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['ktb'])
			{
				echo ""."ktb"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['ktc'])
			{
				echo ""."ktc"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['kr'])
			{
				echo ""."kr"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['ks'])
			{
				echo ""."ks"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['atc'])
			{
				echo ""."atc"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['rp'])
			{
				echo ""."rp"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['btct'])
			{
				echo ""."btct"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['chol'])
			{
				echo ""."chol"." = 50Rs,";
				$amount=$amount+$amount+50;
            }
            if($_POST['cbc'])
			{
				echo ""."cbc"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['cot'])
			{
				echo ""."cot"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['hbr'])
			{
				echo ""."hbr"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['iron'])
			{
				echo ""."iron"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['pla'])
			{
				echo ""."pla"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['raq'])
			{
				echo ""."raq"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['sic'])
			{
				echo ""."sic"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['esr'])
			{
				echo ""."esr"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['gtt'])
			{
				echo ""."gtt"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['bioa'])
			{
				echo ""."bioa"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['biob'])
			{
				echo ""."biob"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['bioc'])
			{
				echo ""."bioc"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['biod'])
			{
				echo ""."biod"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['bioe'])
			{
				echo ""."bioe"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['igg'])
			{
				echo ""."igg"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['dfcs'])
			{
				echo ""."dfcs"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['deng'])
			{
				echo ""."deng"." = 50Rs,";
				$amount=$amount+$amount+50;
            }
            if($_POST['eli'])
			{
				echo ""."eli"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['fun'])
			{
				echo ""."fun"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['fun'])
			{
				echo ""."fun"." = 50Rs,";
				$amount=$amount+50;
            }
            if($_POST['eos'])
			{
				echo ""."eos"." = 50Rs,";
				$amount=$amount+50;
            }

			 if($_POST['hava'])
			{
				echo ""."hava"." = 50Rs,";
				$amount=$amount+50;
             }

			 if($_POST['havb'])
			{
				echo ""."havb"." = 50Rs,";
				$amount=$amount+50;
             }

			 if($_POST['jp'])
			{
				echo ""."jp"." = 50Rs,";
				$amount=$amount+50;
             } 
            if($_POST['ma'])
			{
				echo ""."ma"." = 50Rs,";
				$amount=$amount+50;
            }

			 if($_POST['mp'])
			{
				echo ""."mp"." = 50Rs,";
				$amount=$amount+50;
             }

			 if($_POST['tsh'])
			{
				echo ""."tsh"." = 50Rs,";
				$amount=$amount+50;
             }

			 if($_POST['thy'])
			{
				echo ""."thy"." = 50Rs,";
				$amount=$amount+50;
             }

			 if($_POST['wid'])
			{
				echo ""."wid"." = 50Rs,";
				$amount=$amount+50;
             }

			 if($_POST['wida'])
			{
				echo ""."wida"." = 50Rs,";
				$amount=$amount+50;
             }

			

			
			else  { 

				echo "<br><div align=center>-------<br>";				
			    echo "-------</div>";
				
			}

			?>


		</td>
		<td style="padding-bottom: 150px; max-width: 15ch">
			<?php
			echo "<div style='text-transform:uppercase'>";
			echo $fee_fetch['fee_month'];
			?>
		</td>
		<td style="padding-bottom: 150px;"><?php echo $amount;?></td>
		<td style="padding-bottom: 150px;" align="right"></td>
		</tr>
	
	<tr><td colspan="2">Total :</td><td><?php echo $total= $amount;?>/-</td><td align="right"></td></tr>
	<?php
	$qryy = " UPDATE `rcv` SET `total`='$total' WHERE `rcv_no`='$rcv_no'";
	$run=mysqli_query($conn,$qryy);
	?>
</table>
<input type="button" onclick="window.print()" value="Print now"  style="margin-top: 8px;" />
<a href="index.php" style="margin-left: 50px;">Go back!</a>
