<?php
$conn = mysqli_connect(“localhost”, “root”, “root”, “benecibo”);
//check connection
if ($conn === false){
die (“ERROR: Could not connect.”.mysqli_connect_error());
}
if ($_POST){
$orderidQuery = mysqli_query($conn, “SELECT OrderID from customerorder WHERE
OrderID = (select MAX(OrderID) from customerorder);”);
$orderid = mysqli_fetch_array($orderidQuery);
$id = $orderid[‘OrderID’];
$id = $id + 1;
$it1=$_POST[‘it1’];
if ($it1 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t1’,’$it1’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$it2=$_POST[‘it2’];
if ($it2 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t2’,’$it2’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$it3=$_POST[‘it3’];
if ($it3 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t3’,’$it3’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$it4=$_POST[‘it4’];
if ($it4 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t4’,’$it4’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$it5=$_POST[‘it5’];
if ($it5 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t5’,’$it5’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$it6=$_POST[‘it6’];
if ($it6 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t6’,’$it6’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$it7=$_POST[‘it7’];
if ($it7 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t7’,’$it7’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$it8=$_POST[‘it8’];
if ($it8 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t8’,’$it8’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$it9=$_POST[‘it9’];
if ($it9 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t9’,’$it9’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$it10=$_POST[‘it10’];
if ($it10 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’i
t10’,’$it10’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me1=$_POST[‘me1’];
if ($me1 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e1’,’$me1’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me2=$_POST[‘me2’];
if ($me2 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e2’,’$me2’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me3=$_POST[‘me3’];
if ($me3 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e3’,’$me3’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me4=$_POST[‘me4’];
if ($me4 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e4’,’$me4’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me5=$_POST[‘me5’];
if ($me5 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e5’,’$me5’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me6=$_POST[‘me6’];
if ($me6 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e6’,’$me6’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me7=$_POST[‘me7’];
if ($me7 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e7’,’$me7’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me8=$_POST[‘me8’];
if ($me8 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e8’,’$me8’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me9=$_POST[‘me9’];
if ($me9 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e9’,’$me9’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$me10=$_POST[‘me10’];
if ($me10 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’m
e10’,’$me10’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch1=$_POST[‘ch1’];
if ($ch1 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h1’,’$ch1’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch2=$_POST[‘ch2’];
if ($ch2 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h2’,’$ch2’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch3=$_POST[‘ch3’];
if ($ch3 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h3’,’$ch3’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch4=$_POST[‘ch4’];
if ($ch4 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h4’,’$ch4’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch5=$_POST[‘ch5’];
if ($ch5 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h5’,’$ch5’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch6=$_POST[‘ch6’];
if ($ch6 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h6’,’$ch6’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch7=$_POST[‘ch7’];
if ($ch7 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h7’,’$ch7’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch8=$_POST[‘ch8’];
if ($ch8 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h8’,’$ch8’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch9=$_POST[‘ch9’];
if ($ch9 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h9’,’$ch9’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
$ch10=$_POST[‘ch10’];
if ($ch10 !== ‘0’){
if (mysqli_query($conn, “INSERT INTO `customerorder`VALUES (‘’, ‘$id’,’c
h10’,’$ch10’)”)){
} else{
echo “ERROR: Failure in storing data “. mysqli_error($conn);
} }
mysqli_close($conn);
}
?>
<!DOCTYPE html> <html lang=”en”> <head><title>Menu</title> <link rel=”icon” href=”logo.JPG” type=”image/x-icon”> <link rel=”stylesheet” href=”benecibo.css”>
</head> <body><header> <header> <div id=”titleContainer”
style=”background￾color: rgba(5, 5, 5,0.4); width: 100%; float: left; height: 120px; text￾align: center;”><div id=”logoContainer”> <a href=”index.html” style=”position: relative; float: r
ight; “>Log out</a> <a href=”checkout.php” style=”position: relative; float:
left; “>Checkout</a>
</div> <h1 style=”letter-spacing: 10px; font￾size: 3.2rem; color: aliceblue; padding-top: 0;”>BENE CIBO</h1>
</div>
</header>
</header> <div id=”mainViewContainer”> <div id=”maincontent”> <form method=”post” style=”float: left; width: 100%”> <div><h1 style=”text￾align: center; color:azure; margin: 0; padding:0;”>Italina MENU</h1>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Veg Deluxe Pizza
</div>
<img src=”https://images.unsplash.com/photo-
1589187151053-
5ec8818e661b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb1&a
uto=format&fit=crop&w=334&q=80
“ alt=”Veg Deluxe Pizza”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.150</h3> <select name=”it1” id=”it1” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Chicken Loaded Pizza
</div> <img src=”https://images.unsplash.com/photo-
1604917869287-
3ae73c77e227?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-
1.2.1&auto=format&fit=crop&w=334&q=80”
alt=”Chicken Loaded Pizza”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.450</h3> <select name=”it2” id=”it2” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option>
<option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
White Sauce Pasta
</div> <img src=”https://images.unsplash.com/photo-
1573821201069-
dbf297ca410a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-
1.2.1&auto=format&fit=crop&w=375&q=80”
alt=”White Sauce Pasta”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.550</h3> <select name=”it3” id=”it3” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Red Pasta Pizza
</div> <img src=”https://images.unsplash.com/photo-
1597131628347-c769fc631754?ixlib=rb-
1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=cr
op&w=750&q=80
“ alt=”Red Pasta Pizza”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.350</h3> <select name=”it4” id=”it4” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option>
<option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Veg Cheese Hamburger
</div> <img src=”https://images.unsplash.com/photo-
1604137762918-
ca0896aa2b37?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-
1.2.1&auto=format&fit=crop&w=282&q=80
“ alt=”Veg Cheese Hamburger”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.250</h3> <select name=”it5” id=”it5” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Chicken Cheese Hamburger
</div> <img src=” https://images.unsplash.com/photo-
1598182198871-
d3f4ab4fd181?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-
1.2.1&auto=format&fit=crop&w=750&q=80”
alt=”Chicken Cheese Hamburger”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.350</h3> <select name=”it6” id=”it6” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Lasagne
</div> <img src=”https://thestayathomechef.com/wp￾content/uploads/2017/08/Most-Amazing-Lasagna-2-e1574792735811.jpg”
alt=”Lasagne”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.650</h3> <select name=”it7” id=”it7” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
1587740908075-
Ravioli
</div> <img src=”https://images.unsplash.com/photo-
9e245070dfaa?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-
1.2.1&auto=format&fit=crop&w=375&q=80”
alt=””>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.250</h3> <select name=”it8” id=”it8” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Baked Spaghetti
</div> <img src=”https://hips.hearstapps.com/delish/assets/17/3
7/1505340657-baked-spaghetti-delish-1.jpg”
alt=”Baked Spaghetti”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.370</h3> <select name=”it9” id=”it9” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option>
<option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Focaccia Bread
</div> <img src=”https://i.ytimg.com/vi/xCc2Qn4vxt4/maxresdefau
lt.jpg” alt=”Focaccia Bread”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.270</h3> <select name=”it10” id=”it10” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div>
<!-- </div> 
<!-- </div>  <div><h1 style=”text￾align: center; color:azure; margin: 0; padding:0;”>Mexican MENU</h1>
</div>
<!-- <div id=”mainViewContainer”>
<div id=”maincontent”>  <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Nacho Chips
</div> <img src=”https://www.cookingclassy.com/wp￾content/uploads/2019/09/tortilla-chips-7.jpg” alt=”Nacho Chips”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.250</h3>
<select name=”me1” id=”me1” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Mexican Avacodo Dip
</div> <img src=”https://www.shanazrafiq.com/wp￾content/uploads/2020/06/1-Guacamole-8.jpg” alt=”Mexican Avacodo Dip”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.300</h3> <select name=”me2” id=”me2” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Burritos
</div>
<img src=”https://www.thespruceeats.com/thmb/AAnECK7pIP9
DrvVOFlM2CRRndWM=/4048x2696/filters:fill(auto,1)/vegetarian-bean-and-rice￾burrito-recipe-3378550-hero-01-40ecbc08fcc84e80b8be853c1b779a13.jpg”
alt=”Burritos”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.400</h3> <select name=”me3” id=”me3” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Mexican Cheese Fajita
</div> <img src=”https://potatoonion.com/wp￾content/uploads/sites/9/2018/11/mexican￾fajita.jpg” alt=”Mexican Cheese Fajita”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.350</h3> <select name=”me4” id=”me4” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Mexican Tomato Soup
</div> <img src=”https://jamiegeller.com/.image/ar_1:1%2Cc_fill
%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTY1NTI0OTg4Mjg2ODA1MDE5/
mexican-tomato-soup.jpg”
alt=”Mexican Tomato Soup”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.550</h3> <select name=”me5” id=”me5” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Veg Tacos (2)
</div> <img src=”https://www.simplyrecipes.com/thmb/VMZLVN7sMMa
JrdbaBCFGzypsFSo=/735x0/ opt aboutcom coeus resources content_migration
simply_recipes uploads 2009 09 veggie-tacos-vertical-a-1800-
7809f3115a474822b6c2df02741719d1.jpg
“ alt=”Veg Tacos (2)”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.300</h3> <select name=”me6” id=”me6” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option>

<option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Chicken Tacos(2)
</div> <img src=”https://joyfoodsunshine.com/wp￾content/uploads/2020/04/crockpot-chicken-tacos-recipe-6.jpg
“ alt=” Chicken Tacos (2)”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.400</h3> <select name=”me7” id=”me7” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Mole Poblanos
</div> <img src=”https://karstravels.com/wp￾content/uploads/2020/11/Mole-1140x716.jpg” alt=”Mole Poblanos”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.550</h3>

<select name=”me8” id=”me8” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Pozole
</div> <img src=”https://www.simplyrecipes.com/thmb/AJRmMX2b2dD
wJ2IVSjQqCVns48Y=/1600x1600/smart/filters:no_upscale()/ opt aboutcom coeu
s resources__content_migration simply_recipes uploads 2011__10 posole-rojo￾vertical-b2-1600-b92c7f3ea7394957b10b0a1d4862f00f.jpg
“ alt=”Pozole”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.450</h3> <select name=”me9” id=”me9” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Mexican Fried Rice

</div> <img src=”https://cdn.apartmenttherapy.info/image/upload
/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2Farchive%2F1b0238d780d4fe38
23d6be2c211288edb4b815dd”
alt=”Mexican Fried Rice”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.600</h3> <select name=”me10” id=”me10” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div>
<!-- </div>
</div>  <div><h1 style=”text￾align: center; color:azure; margin: 0; padding:0;”>Chinese MENU</h1>
</div>
<!-- <div id=”mainViewContainer”>
<div id=”maincontent”>  <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Veg Noodles
</div> <img src=”https://www.whiskaffair.com/wp￾content/uploads/2020/03/Hakka-Noodles-2-3.jpg” alt=”Veg Noodles”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.250</h3> <select name=”ch1” id=”ch1” style=”border￾radius: 10px;margin-left: 40px;” onchange=”hi()”> <option value=”0”>--Select Quantity--</option>

<option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Chicken Noodles
</div> <img src=”https://static.toiimg.com/photo/75356205.cms”
alt=”Chicken Noodles”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.300</h3> <select name=”ch2” id=”ch2” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Manchurian
</div> <img src=”https://i.ytimg.com/vi/xkMbJCtaaqA/maxresdefau
lt.jpg” alt=”Manchurian”>
</a>

<h3 style=”color: white;margin￾left: 40px;”>price: Rs.370</h3> <select name=”ch3” id=”ch3” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Singapuri Chowmein
</div> <img src=”https://tastesbetterfromscratch.com/wp￾content/uploads/2019/03/Chicken-Chow-Mein-4.jpg”
alt=”Chowmein”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.500</h3> <select name=”ch4” id=”ch4” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Manchow Soup

</div> <img src=”https://myfoodstory.com/wp￾content/uploads/2016/07/Chicken-Manchow-Soup-2.jpg” alt=”Manchow Soup”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.350</h3> <select name=”ch5” id=”ch5” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Hakka Noodles
</div> <img src=”https://i1.wp.com/yourfoodfantasy.com/wp￾content/uploads/2018/04/Hakka-Noodles-Recipe-Indo-Chinese-Cuisine-
.jpg?fit=1345%2C903&ssl=1”
alt=”Hakka Noodles”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.300</h3> <select name=”ch6” id=”ch6” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option>

<option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Chilli Chicken
</div> <img src=”https://static.toiimg.com/photo/53094926.cms”
alt=”Chilli Chicken”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.400</h3> <select name=”ch7” id=”ch7” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Spring Rolls
</div> <img src=”https://www.thespruceeats.com/thmb/ZZmkGMQHaxc
Febc9juL-OzEucHw=/1532x862/smart/filters:no_upscale()/89011534-
56a1432f5f9b58b7d0bd96f2.jpg”
alt=”Spring Rolls”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.100</h3> <select name=”ch8” id=”ch8” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option>

<option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Veg Dimsums
</div> <img src=”https://149366112.v2.pressablecdn.com/wp￾content/uploads/2020/01/dim-sum-1.jpg” alt=”Veg Dimsums”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.450</h3> <select name=”ch9” id=”ch9” style=”border￾radius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div> <div class=”gridViewItem”> <a href=”album.html”> <div class=”gridViewInfo”>
Chicken Dimsums
</div> <img src=”https://niftyrecipe.com/content/recipes/299/ma
in_b_chicken-dim-sum-with-coconut-milk.jpg”
alt=”Chicken Dimsums”>
</a> <h3 style=”color: white;margin￾left: 40px;”>price: Rs.600</h3>

<select name=”ch10” id=”ch10” style=”borderradius: 10px;margin-left: 40px;”> <option value=”0”>--Select Quantity--</option> <option value=”1”>1</option> <option value=”2”>2</option> <option value=”3”>3</option> <option value=”4”>4</option> <option value=”5”>5</option> <option value=”6”>6</option> <option value=”7”>7</option> <option value=”8”>8</option> <option value=”9”>9</option> <option value=”10”>10</option>
</select>
</div>
</div> <center> <input type=”submit” name=”submit” onclick=”alert(‘Order Placed’)” value=”Pl
ace Order” style=”margin-bottom: 30px; padding: 10px; font-size: 15px;”>
</center>
</form>
</body> <a href=”home.html” style=”margin: 0; border: 0;”> <div id=”homeFooter” style=”margin: 0; border: 0; width: 100%”> <span>Homepage</span>
</div>
</a>
</html>
