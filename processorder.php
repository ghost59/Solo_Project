<!DOCTYPE html> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bob's Auto Parts - Order Results</title>

</head>
<body>
<h1>Bob's AUto Parts</h1>
<h2>Order Results</h2>
<?php 

	echo "<p> Order processed at ".date('H:i, JS F Y')."</p>"; 



?>

<?php 
//create short variable name 
$tireqty = $_POST['tireqty']; 
$oilqty = $_POST['oilqty']; 
$sparkqty = $_POST['sparkqty']; 

echo '<p> your order is a follows: </p>'; 
echo htmlspecialchars($tireqty).' tires<br />'; 
echo htmlspecialchars($oilqty).' Bottles of oil <br />'; 
echo htmlspecialchars($sparkqty).' spark plugs <br />'; 
$totalqty = 0; 
$totalqty = $tireqty + $oilqty + $sparkqty; 
echo "<p> Items ordered: ".$totalqty."<br />";
$totalamount = 0.00; 
define('TIREPRICE',100); 
define('OILPRICE', 10); 
define('SPARKPRICE', 4); 
$totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE; 
echo "Subtotal: $".number_format($totalamount,2)."<br />"; 
$taxrate = 0.10; // local sales tax is 10% 
$totalamount = $totalamount * (1 + $taxrate); 
echo "Total including tax: $".number_format($totalamount,2)."</P>"; 

 

?> 

</body>
</html>