<html>
<body>
<form method="post" action=" ">
E-mail: <input type="text" name="email">
<input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST["submit"]))
{
if(empty($_POST["email"]))
{
$emailErr = "Email is required";
echo $emailErr;
}
else
{
$email=trim($_POST["email"]);
// check if e-mail address is well-formed
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
$emailErr = "Invalid email format";
echo $emailErr;
}
else
{
$emailErr="Valid email";
$dm=explode("@",$email);
print_r($dm);
echo "<br>";
//Connect to the database
$cn=mysqli_connect("localhost:3307","root","");
//edit the port no. of by checking it in "my" configuration file
//of your database, in my system, it is 3307
// Select the database to use
mysqli_select_db($cn,"domains");
$query = "SELECT * FROM Dnames WHERE Domainlist ='".$dm[1]."'";
$result = mysqli_query($cn,$query) ;
if(mysqli_num_rows($result)==1)
echo "You entered a valid email_id";
else
echo "Valid Format but not authorised";
}
}
}
?>
</body>
</html>
