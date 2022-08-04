<?php
$conn = mysqli_connect("localhost", "root", "root", "benecibo");
//check connection
if ($conn === false){
die ("ERROR: Could not connect.".mysqli_connect_error());
  }
//taking values from form data
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
$phno = isset($_REQUEST['phno']) ? $_REQUEST['phno'] : '';
$message = isset($_REQUEST['message']) ? $_REQUEST['message'] : '';
$sql = "INSERT INTO `feedback`(`Name`, `Email`, `PhoneNumber`, `Message`)
VALUES ('$name','$email','$phno','$message')";
if (mysqli_query($conn, $sql)){
if ($name != '' && $email != '' && $phno != '' && $message != ''){
echo "<script> showSnackbar(); </script>"; } } else{
echo "ERROR: Failure in storing data ". mysqli_error($conn);
}
//close connection
mysqli_close($conn);
?>
<script>
function showSnackbar(){
if(document.getElementById("name").value !== "" && document.getEleme
ntById("email").value !== "" &&
document.getElementById("phno").value !== "" && document.getElementB
yId("message").value !== ""){
alert("Feedback form submitted");
}
else{
alert("Enter all details") } }
</script> <html lang="en"> <head><title>Book a table</title> <link rel="icon" href="logo.JPG" type="image/x-icon"> <link rel="stylesheet" href="benecibo.css"> <link rel="stylesheet" href="feedback.css"> <script src="feedback.js"></script>
</head> <body>
  <div id="titleContainer" style="backgroundcolor: rgba(5, 5, 5,0.4); width: 100%; float: left; height: 120px; textalign: center;"> <div id="logoContainer"> <a href="index.html" style="position: relative; float: right; ">
Log out</a>
</div> <h1 style="letter-spacing: 10px; fontsize: 3.2rem; color: aliceblue; padding-top: 0;">BENE CIBO</h1>
</div> <br><br><br><br><br> <div id="form" style="text-align: center;"> <h3>Tell us what do you think</h3> <p id="error" style="color: white;"></p> <form action="#" method="post"> <label>Name</label><br> <input type="text" id="name" name="name" onchange="checkname()" si
ze="40" required><br> <label>Email</label><br> <input type="text" id="email" name="email" onchange="checkemail()"
size="40" required><br> <label>Phone Number</label><br> <input type="text" id="phno" name="phno" onchange="checkphno()" si
ze="40" required><br> <label>Message</label><br> <textarea name="message" id="message" name="message" cols="55" row
s="10" style="resize: none;" required></textarea><br><br> <input type="submit" onclick="showSnackbar();" value="Submit" styl
e="width: 60px; margin-left: 300px;">
</form>
</div> <footer style="margin-bottom: 100px; position: none;">
Contact Us<br>
Phone no: 9840531760 <br>
Email: benecibo@gmail.com
</footer> <a href="home.html"> <div id="homeFooter"> <span>Homepage</span>
</div>
</a>
</body>
</html>
