<html>
<head> <title>Register- Admin Pannel</title></head>
<body> 
<?php include 'connect.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'title_bar.php'; ?>

<h3>Register here:</h3>


<form method='post'>
<?php
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	if(empty($username)or empty($password)){
echo "<p>Fields Empty</p>";
}else {
	echo"INSERT INTO users VALUES('','$username','$password','2','')";
	mysql_query("INSERT INTO users VALUES('','$username','$password','2','')");
	echo "<p>Successfully Registered!</p>";
}
	
 }

?>

User Name: <br/>
<input type="text" name="username"/>
<br/><br/>
Password :<br/>
<input type="password" name="password"
<br/><br/>
<input type="submit" name="submit" value="Register" />

</form>





</body>


</html>