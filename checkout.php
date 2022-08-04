<?php
$conn = mysqli_connect("localhost", "root", "root", "benecibo");
//check connection
if ($conn === false){
die ("ERROR: Could not connect.".mysqli_connect_error());
}
$itemarray = array();
$quantityarray = array();
$sql = "SELECT ItemID, Quantity from customerorder WHERE OrderID = (select M
AX(OrderID) from customerorder);";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
// echo $row['ItemID'] . "<br>";
array_push($itemarray, $row['ItemID']);
array_push($quantityarray, $row['Quantity']);
} }
$i = 0;
echo "<br><br><br><br><br><br><br><br>";
echo "
<center>
<table border='2px solid black' cellspacing='10px' cellpadding='10px' st
yle='text-align: center; color: white; backgroundcolor: rgba(5, 5, 5, 0.8); margin-bottom: 100px;'>
<tr>
<th>Item Name</th>
<th>Item Price</th>
<th>Item Quantity</th>
<th>Cost</th>
</tr>
";
$total = 0;
foreach($itemarray as $item){
$cost = 0;
$sql = "SELECT ItemName, ItemPrice from menuitems WHERE ItemID ='$item';
";
$result1 = mysqli_query($conn, $sql);
if (mysqli_num_rows($result1) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result1)) {
$cost = $row['ItemPrice'] * $quantityarray[$i];
$total += $cost;
echo "
<tr>
<td> ". $row['ItemName'] ."</td>
<td> ". $row['ItemPrice'] ."</td>
<td> ". $quantityarray[$i] ."</td>
<td> ". $cost."</td>
</tr>
";
$i++;
} } }
echo "
<tr>
<td colspan='4'>Total Price: ". $total ."</td>
</tr>
</center>";
?>
<html lang="en"> <head><title>Checkout</title> <link rel="icon" href="logo.JPG" type="image/x-icon"> <link rel="stylesheet" href="benecibo.css">
</head> <body><header> <div id="titleContainer"
style="backgroundcolor: rgba(5, 5, 5,0.4); width: 100%; float: left; height: 120px; textalign: center;"> <div id="logoContainer"> <a href="index.html" style="position: relative; float: right
; ">Log out</a>
</div> <h1 style="letter-spacing: 10px; fontsize: 3.2rem; color: aliceblue; padding-top: 0;">BENE CIBO</h1>
</div> <a href="orderonline.php"> <div id="homeFooter"> <span>Back to menu</span>
</div>
</a>
</body>
</html>
