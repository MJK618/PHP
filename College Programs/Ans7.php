<html>
<head>
<title>Login Form</title>
</head>
<body>
<form method="post" action="Ans7.php" >
<table border="1" >
<tr>
<td><label for="User_ID">User_ID</label></td>
<td><input type="text"
name="User_ID" id="User_ID"></td>
</tr>
<tr>
<td><label for="Pass">Password</label></td>
<td><input name="Pass"
type="password" id="Pass"></input></td>
</tr>
 <tr>
<td><input type="submit" value="Submit"/>
<td><input type="reset" value="Reset"/>
</tr>
</table>
</form>
</body>
</html>

<?php
// Grab User submitted information
$id = trim($_POST["User_ID"]);
$pass =trim($_POST["Pass"]);
//$id="Jatin";
//$pass="8647";
// Connect to the database
$server_name = "localhost";
$username = "root";
$pass = "";
$database = "Validation";
$conn=mysqli_connect("localhost","root");

// Check Connection

$query = "SELECT * FROM id_pass WHERE User_ID ='".$id."' ,AND Pass = '".$pass."'";

$result = mysqli_query($conn,$query);
echo mysqli_num_rows($result)."<br>";
if(mysqli_num_rows($result)==1){
echo "You are a validated user.";
}
else {
echo "Sorry, your credentials are not valid, Please try again.";
}

?>
