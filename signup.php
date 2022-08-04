<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
$con=mysqli_connect("localhost","root","root","benecibo");
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$checkusername="select count(username) from signup where username='$user
name'";
$ruser=mysqli_query($con,$checkusername);
$ruser1=mysqli_fetch_array($ruser);
$checkemail="select count(email) from signup where email='$email'";
$remail=mysqli_query($con,$checkemail);
$remail1=mysqli_fetch_array($remail);
if($ruser1[0]!=0){
echo "<h4 style='margin-left:500px; margin￾top: 150px;color:red; font-weight:900; position:absolute;z￾index:10;'>Username already exist</h4>"; }
if($remail1[0]!=0){
echo "<h4 style='margin-left:500px; margin￾top: 237px;color:red; font-weight:900; position:absolute;z￾index:10;'>Email already exist</h4>"; }
else{
$add="insert into signup values('$username','$email','$password')";
if(mysqli_query($con,$add)){
header("Location: login.php");
} } }
?>
<html> <head><title>Customer Signup</title> <link rel="icon" href="logo.JPG" type="image/x-icon"> <link rel="stylesheet" href="signup.css"> <script src="customer.js"></script> <script src="signup.js"></script>
</head> <body><div id="full-page"> <div id="heading"> <h1>SignUp</h1>
</div> <div id="sub-head"> <h1>Customer</h1>
</div> <div id="form"> <form action="" method="post"> <p id="error" name="error" style="marginleft: 250px; margin-top:-20px;color: red; position:absolute; zindex:20;" ></p><div id="input-1"> <input type="text" required placeholder="Username" name=
"username" id="username" onchange="checkusername()"><br> <input type="text" required placeholder="Email Id" name=
"email" id="email" onchange="checkemail()"><br> <input type="password" required placeholder="Password"
name="password" id="password" onchange="checkpassword()"><br> <input type="password" required placeholder="Reenter password" id="repassword" onchange="checkrepass()"><br>
</div> <div id="button" style="margin:0px auto;"> <span><a href="home.html" style="textdecoration: none;"><input type="submit" value="Signup" name="submit" style="
border: 50%; width: 70px; height: 40px; border-radius: 8px;"></a></span>
<!- - <button id="button1" name="button" style="border: 50%; width: 70px; height
: 40px; border-radius: 8px;">
<span><a href="home.html" style="textdecoration: none;">Signup</a></span></button> -->
</div>
</form>
</div>
</div>
</body>
</html>
