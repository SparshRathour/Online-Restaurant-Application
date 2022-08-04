<!DOCTYPE html>
<?php
$conn = mysqli_connect("localhost", "root", "root", "benecibo");
//check connection
if ($conn === false){
die ("ERROR: Could not connect.".mysqli_connect_error());
}
//taking values from form data
$city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';
$date = isset($_REQUEST['date']) ? $_REQUEST['date'] : '';
$time = isset($_REQUEST['time']) ? $_REQUEST['time'] : '';
$quantity = isset($_REQUEST['quantity']) ? $_REQUEST['quantity'] : '';
$sql = "INSERT INTO `booktable`(`City`, `Date`, `Time`, `Chairs`) VALUES ( '$city','$date','$time','$quantity')";
if (mysqli_query($conn, $sql)){
if ($date != '' && $time != '' && $quantity != '0'){
echo "<script> showSnackbar(); </script>"; } else{ } } else{
echo "ERROR: Failure in storing data ". mysqli_error($conn);
}
//close connection
mysqli_close($conn);
?>
<script>
<!- - <button id="button1" style="border: 50%; width: 70px; height: 40px; border
-radius: 8px;">
<span><a href="home.html" style="text￾decoration: none;">Login</a></span></button> -->
</div>
</form>
</div>
</div>
</body>
</html>
function showSnackbar(){
// //finds first element with the snackbar css class
// const snackbar = document.querySelector(".snackbar");
// //add the show class to snackbar element
// snackbar.classList.add("show");
// //remove show class after 3 seconds
// setTimeout(() => snackbar.classList.remove("show"), 3000);
// var snackbar = document.getElementById("bar");
// snackbar.innerHTML="Table Booked Successfully!";
if(document.getElementById("date").value !== "" && document.getEleme
ntById("time").value !== "" && document.getElementById("quantity").value !==
""){
alert("Table booked succesfully!");
} }
</script> <html lang="en"> <head><title>Book a table</title> <link rel="icon" href="logo.JPG" type="image/x-icon"> <link rel="stylesheet" href="benecibo.css">
</head> <body> <div id="titleContainer"
style="background￾color: rgba(5, 5, 5,0.4); width: 100%; float: left; height: 120px; text￾align: center;"> <div id="logoContainer"> <a href="index.html" style="position: relative; float: right
; ">Log out</a>
</div> <h1 style="letter-spacing: 10px; font￾size: 3.2rem; color: aliceblue; padding-top: 0;">BENE CIBO</h1>
</div> <br><br><br>
<!-- <p><span class="error" style="text￾align: center;">* required field</span>
</p> --> <form method="post" action="<?php echo htmlspecialchars($_SERVER["PH
P_SELF"]); ?>"> <br><br><br><br><br> <fieldset> <legend>Book a table</legend>
<label for="city" style="color: white; font￾size: 1.2rem;">City</label><br> <select name="city" id="city" required> <option value="hyderabad" style="opacity: 0.9;">Hyderabad</o
ption> <option value="chennai">Chennai</option> <option value="bangalore">Bangalore</option>
</select><br><br> <label for="date" id="datevalue" style="color: white; font￾size: 1.2rem;">Date</label><br> <input type="date" id="date" name="date" size="15" required><br> <br> <label for="time" id="time1" style="color: white; font￾size: 1.2rem;">Time</label><br> <input type="time" id="time" name="time" required><br><br> <label for="quantity" id="quantity1" style="color: white; font￾size: 1.2rem;" >Chairs</label><br> <input type="number" id="quantity" name="quantity" min="1" max="
15" required><br><br>
<!- - <input type="submit" id="submit" value="Submit" size="15" style="height: 3
0px; width: 80px; background-color: gray; color: white;"/> --> <input type="submit" onclick="showSnackbar();" style="height: 30
px; width: 80px; background-color: gray; color: white;" value="Submit">
</fieldset>
</form>
</body>
</html> <a href="home.html"> <div id="homeFooter"> <span>Homepage</span>
</div>
</a> <style>
fieldset {
opacity: 0.9;
width: 20%;
text-align: center;
margin: auto;
font-weight: bold; }
legend {
background-color: gray;
color: white;
padding: 5px 10px; }
#city {
font-size: 1.2rem;
opacity: 0.8;
color: red;
font-weight: bold; }
#date{
font-size: 1.2rem;
opacity: 0.8;
color: red;
font-weight: bold; }
#time {
font-size: 1.2rem;
opacity: 0.8;
color: red;
font-weight: bold; }
#quantity {
font-size: 1.2rem;
opacity: 0.8;
color: red;
font-weight: bold; }
#submit {
width: 30%; }
input{
/* width: 50%;
opacity: 0.4;
font-size: 15px;
margin: 5px; */
color: aliceblue;

font-weight: bold;
opacity: 0.4;
font-size: 15px; }
.snackbar > div{
background-color: #333;
color: white;
min-width: 150px;
padding: 15px;
display: flex;
justify-content: center;
align-items: center; }
.snackbar {
position: fixed;
bottom: 20px;
left: 50%;
transform: translateX(-50%);
opacity: 0;
pointer-events: none;
transition: bottom 0.5s, opacity 0.5s; }
.snackbar.show{
bottom: 80px;
opacity: 1.0;
pointer-events: all; }
.error {
color: #FF0000; }
</style>
