<?php
  
	include("dbucims.php");  
 session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>www.cims.com</title>
<script src="../argiepolicarpio.js" type="text/javascript" charset="utf-8"></script> 
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css" media="all">
@import "online.css";
</style>
<script src="../argiepolicarpio.js" type="text/javascript" charset="utf-8"></script> 
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" /> 
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
   </head>
<body id="top">

<div class="wrapper row0">
  
 

      <div class="group"> 
	  
 <a href="../adhome.php" title="click to go back"><img src=" ../images/back.png"></a>
<br><center> <b style='color:#800000;background:#F8F8FF;padding:6px 35px 6px 35px;border-radius:10px;' > 
<center><b style='font-size:18px;'>Generating  information of constraction office</b>
 </b></center><br>
 
	 <script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
		if(selectedOption == "6")
		{
			displayDiv(prefix,"6");
		}
		
} 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}
</script>
	 <table id="contentbox">
	  <li><a href="generetreport.php">refresh<b></a></li>	
		<tr>
			<td id="content">	
			Which Type of report do you want?
				<select name="portal" id="cboOptions" onChange="showDiv('div',this)">
					<option value="1">...</option>
					<option value="2">Registered projects</option>
					<option value="3">Registered schedule</option>
					<option value="4">bids that annuncmnt </option>
					<option value="5">the request to pay  contractor</option>
					<option value="6">payment</option>
			
				</select>
				<br /><br/>
						  
				<div id="div1" style="display:none;"></div>	
				<div id="div2" style="display:none;">
					<form action="" method="post" >
						<center><h3>project:</h3></center> 
						<?php 
						echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';
	$sel=mysqli_query($conn,"SELECT * FROM project ");
			echo '<table align="center" style="width:100px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">pId.</th><th bgcolor="#336699"><font color="white" size="2">pName</th> <th bgcolor="#336699"><font color="white" size="2">ptype</th><th bgcolor="#336699"><font color="white" size="2">stratdate</th><th bgcolor="#336699"><font color="white" size="2">finishdate</th><th bgcolor="#336699"><font color="white" size="2">pLocation</th><th bgcolor="#336699"><font color="white" size="2">pOwner</th><th bgcolor="#336699"><font color="white" size="2">floorlevel</th><th bgcolor="#336699"><font color="white" size="2">Tbudget</th></tr>';
			$rowcolor=0;
			$intt=mysqli_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>project are registered";
			echo"<br><br>";
			while($row=mysqli_fetch_array($sel)){
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['pId'] . "</td>");
print ("<td><font size='2'>" . $row['pName'] . "</td>");	 
print ("<td><font size='2'>" . $row['ptype'] . "</td>");		
print ("<td><font size='2'>" . $row['stratdate'] . "</td>");	
print ("<td><font size='2'>" . $row['finishdate'] . "</td>");	
print ("<td><font size='2'>" . $row['pLocation'] . "</td>");	
print ("<td><font size='2'>" . $row['pOwner'] . "</td>");	
print ("<td><font size='2'>" . $row['floorlevel'] . "</td>");		
print ("<td><font size='2'>" . $row['Tbudget'] . "</td>");	
  print ("</tr>");
  }
print( "</table>");
						
						
						
						?>
					</form>
				</div>		
				<div id="div3" style="display:none;">
					<form action="" method="post">
					<u><center><h2>schedule</h2s></center></u>
						<?php
echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';						
	$sel=mysqli_query($conn,"SELECT * FROM schedule");
			echo '<table style="width:500px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Task_ID.</th>
			<th bgcolor="#336699" ><font color="white" size="2">taskName</th>
			<th bgcolor="#336699" ><font color="white" size="2">startDate</th>
			<th bgcolor="#336699" ><font color="white" size="2">finishDate</th>
			<th bgcolor="#336699" ><font color="white" size="2">budget</th>
			<th bgcolor="#336699" ><font color="white" size="2">pId</th>
	
			</tr>';
			$rowcolor=0;
			$intt=mysqli_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>scedule  are registered";
			echo"<br><br>";
			while($row=mysqli_fetch_array($sel)){
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['Task_ID'] . "</td>");
	  print ("<td><font size='2'>" . $row['taskName'] . "</td>");
print ("<td><font size='2'>" . $row['startDate'] . "</td>");
print ("<td><font size='2'>" . $row['finishDate'] . "</td>");
print ("<td><font size='2'>" . $row['budget'] . "</td>");
print ("<td><font size='2'>" . $row['pId'] . "</td>");
	  
  print ("</tr>");
  }
print( "</table>");
						
						
								?>
					</form>
				</div>
				
				<div id="div4" style="display:none;">
					<form action="" method="post">
					<u><center><h2>bids that annuncmnt</h2s></center></u>
						<?php
echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';						
	$sel=mysqli_query($conn,"SELECT * FROM bid");
			echo '<table style="width:800px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">bidid</th>
			<th bgcolor="#336699" ><font color="white" size="2">title</th>
			<th bgcolor="#336699" ><font color="white" size="2">start date</th>
			<th bgcolor="#336699" ><font color="white" size="2">finshed date</th>
			<th bgcolor="#336699" ><font color="white" size="2">discrbution</th>
			

			</tr>';
			$rowcolor=0;
			$intt=mysqli_num_rows($sel);
			echo"<br>";
			//echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>certificate that are given for the owner";
			echo"<br><br>";
			while($row=mysqli_fetch_array($sel)){
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['bidid'] . "</td>");
	  print ("<td><font size='2'>" . $row['title'] . "</td>");
print ("<td><font size='2'>" . $row['sdate'] . "</td>");
print ("<td><font size='2'>" . $row['edate'] . "</td>");
print ("<td><font size='2'>" . $row['discribution'] . "</td>");
 
  print ("</tr>");
  }
print( "</table>");			
								?>
					</form>
				</div>
								<div id="div5" style="display:none;">
					<form action="" method="post">
					<u><center><h2>request to pay contarctor</h2s></center></u>
						<?php
echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';						
	$sel=mysqli_query($conn,"SELECT * FROM requistionpayment ");
			echo '<table style="width:800px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">requestion no</th>
			<th bgcolor="#336699" ><font color="white" size="2">date</th>
			<th bgcolor="#336699" ><font color="white" size="2">requested by</th>
			<th bgcolor="#336699" ><font color="white" size="2">contractor name</th>
			<th bgcolor="#336699" ><font color="white" size="2">name</th>
			<th bgcolor="#336699" ><font color="white" size="2">role</th>
			<th bgcolor="#336699" ><font color="white" size="2">deliver_date</th>
			<th bgcolor="#336699" ><font color="white" size="2">project id</th>
			<th bgcolor="#336699" ><font color="white" size="2">phone</th>
			<th bgcolor="#336699" ><font color="white" size="2">description</th>
			<th bgcolor="#336699" ><font color="white" size="2">price</th>
			
			
			</tr>';
			$rowcolor=0;
			$intt=mysqli_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>request that are given for the finance";
			echo"<br><br>";
			while($row=mysqli_fetch_array($sel)){
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['req_no'] . "</td>");
	  print ("<td><font size='2'>" . $row['date'] . "</td>");
print ("<td><font size='2'>" . $row['req'] . "</td>");
print ("<td><font size='2'>" . $row['cname'] . "</td>");
print ("<td><font size='2'>" . $row['name'] . "</td>");
print ("<td><font size='2'>" . $row['role'] . "</td>");
print ("<td><font size='2'>" . $row['deliver_date'] . "</td>"); 
print ("<td><font size='2'>" . $row['proid'] . "</td>");
print ("<td><font size='2'>" . $row['phone'] . "</td>");
print ("<td><font size='2'>" . $row['description'] . "</td>");
print ("<td><font size='2'>" . $row['price'] . "</td>"); 
  print ("</tr>");
  }
print( "</table>");			
								?>
					</form>
				</div>
				<div id="div6" style="display:none;">
					<form action="" method="post">
					<u><center><h2>payment</h2s></center></u>
						<?php
echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';						
	$sel=mysqli_query($conn,"SELECT * FROM payment ");
			echo '<table style="width:800px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">payment id</th>
			<th bgcolor="#336699" ><font color="white" size="2">bidder id</th>
			<th bgcolor="#336699" ><font color="white" size="2">first name</th>
			<th bgcolor="#336699" ><font color="white" size="2">middele name</th>
			<th bgcolor="#336699" ><font color="white" size="2">amount</th>
			<th bgcolor="#336699" ><font color="white" size="2">date payed</th>
			</tr>';
			$rowcolor=0;
			$intt=mysqli_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>bidder payied";
			echo"<br><br>";
			while($row=mysqli_fetch_array($sel)){
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['payment_id'] . "</td>");
	  print ("<td><font size='2'>" . $row['bider_id'] . "</td>");
print ("<td><font size='2'>" . $row['firstname'] . "</td>");
print ("<td><font size='2'>" . $row['mname'] . "</td>");
	  print ("<td><font size='2'>" . $row['amount'] . "</td>");
print ("<td><font size='2'>" . $row['date_payed'] . "</td>");

  print ("</tr>");
  }
print( "</table>");			
								?>
					</form>
				</div>
				
	
				
				
				

			</td>
	
	</table>


</div>

           </div>

</div>
</div>

  </body>
  </html>