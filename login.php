<?php
if(isset($_POST['submit'])){
$con=mysqli_connect("localhost","root","root","benecibo");
$username=$_POST['username'];
$password=$_POST['password'];
$checkusername="select * from signup where username='$username'";
$ruser=mysqli_query($con,$checkusername);
$ruser1=mysqli_fetch_array($ruser);
$checkpassword="select password from signup where username='$username'";
$rpass=mysqli_query($con,$checkpassword);
$rpass1=mysqli_fetch_array($rpass);
if($ruser1==null){
echo "<h4 style='margin-left:500px; margintop: 150px;color:red; font-weight:900; position:absolute;zindex:10;'>Username does not exist. Please signup first. <a href='signup.php
'>Click here</a> to Signup</h4>"; }
elseif($password!=$rpass1[0]){
echo "<h4 style='margin-left:500px; margintop: 150px;color:red; font-weight:900; position:absolute;zindex:10;'>Username does not matches password</h4>"; }
else{
header("Location: home.html");
} }
?>
<!DOCTYPE html> <html> <head><title>Customer Login</title> <link rel="icon" href="logo.JPG" type="image/x-icon"> <link rel="stylesheet" href="login.css">
</head> <body><div id="full-page"> <div id="heading"> <h1>Login</h1>
</div> <div id="sub-head"> <h1>Customer</h1>
</div> <div id="form"> <form action="#" method="post"> <div id="input-1"> <input type="text" required placeholder="Username" id="
username" name="username"><br> <input type="password" required placeholder="Password" i d="password" name="password"><br>
</div> <div id="button" style="margin:0px auto;"> <span><a href="home.html" style="textdecoration: none;"><input type="submit" value="Login" name="submit" style="b
order: 50%; width: 70px; height: 40px; border-radius: 8px;"></a></span>
<!- - <button id="button1" style="border: 50%; width: 70px; height: 40px; border
-radius: 8px;">
<span><a href="home.html" style="textdecoration: none;">Login</a></span></button> -->
</div>
</form>
</div>
</div>
</body>
</html>
