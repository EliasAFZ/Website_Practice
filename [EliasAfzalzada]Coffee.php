<!DOCTYPE html>
<html lang = "en">
<!-- ITEC 225 Elias Afzalzada
      Assignment 5 
      PHP file for serverside -->
      <head>
		<title>PHP Output</title>
		<meta charset = "utf-8" />
		<style type = "text/css">

			body{
            background-color: #248f8f;
         }

			td, th, table {border: thin solid black;}
		
		</style>
	</head>
	<body>
	<?php
		// get form data values	
		$name = $_POST["name"];
		$Sumatran = $_POST["Sumatran"];
		$French = $_POST["French"];
		$Caramel = $_POST["Caramel"];
		$Decaf = $_POST["Decaf"];
		$payType = $_POST["payType"];

		// assign cost
		$sumatranCost = $Sumatran * 10.00;
		$frenchCost = $French * 11.50;
		$caramelCost = $Caramel * 12.00;
		$decafCost = $Decaf * 9.50;

		// compute the item costs and the total cost
		$total_items = $name + $Sumatran + $French + $Caramel + $Decaf;
		$total_price = $sumatranCost + $frenchCost + $caramelCost + $decafCost;

	?>
	<h3>Customer:</h3> 
	<?php
		
		print($name); 
	
	?>
	<br><br>
	<!-- Results from the calculations and data received -->
	<table>
		<caption> Order Information </caption>
		<tr>
			<th> Product </th>
			<th> Unit Price </th>
			<th> Quantity Ordered </th>
			<th> Item Cost </th>
		</tr>
		<tr>
			<td> Sumatran Coffee </td>
			<td> $10.00 </td>
			<td> <?php print ($Sumatran); ?> </td>
			<td> <?php print ("$" . $sumatranCost); ?> </td>
		</tr>
		<tr>
			<td> French Morning Roast </td>
			<td> $11.50 </td>
			<td> <?php print ($French); ?> </td>
			<td> <?php print ("$" . $frenchCost); ?> </td>
		</tr>
		<tr>
			<td> Caramel Nut Roast </td>
			<td> $12.00 </td>
			<td> <?php print ($Caramel); ?> </td>
			<td> <?php print ("$" . $caramelCost); ?> </td>
		</tr>
		<tr>
			<td> Decaffeinated Roast </td>
			<td> $9.50 </td>
			<td> <?php print ($Decaf); ?> </td>
			<td> <?php print ("$" . $decafCost); ?> </td>
		</tr>
	</table>
	<br><br>
	
	<?php
		print "You ordered " . $total_items . " pounds of coffee" . "<br>";
		print "Your total bill is: $" . $total_price . "<br>";
		print "Your chosen method of payment is: " . $payType . "<br>";
		print "<br>Thank you " . $name;
	?>


	</body>
</html>



