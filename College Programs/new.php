<html>
<head>
<title>Student marksheet</title>
</head>
<body>
 <form method="post" action="" >
 <table border="1" >
 <tr>
 <td>
 <label for="Roll_no">Roll Number</label></td>
 <td>
 <input type="text" name="rno" id="Roll no"></td>
 </tr>
<tr>
 <td><input type="submit" name="submit" value="Submit"/>
 <td><input type="reset" value="Reset"/>
 </tr>
 </table>
 </form>
<?php
if(isset($_POST["submit"]))
{
$id= trim($_POST["rno"]);

$Servername = "localhost";
$Username = "root";
$Password = "";
$dbName = "Student Results";

$conn = mysqli_connect($Servername,$Username,$Password,$dbName);

$query = "SELECT * FROM `Student Results` WHERE `Roll no.` ='".$id."';";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
//Execute the query
while($row=mysqli_fetch_array($result))
{
echo "Roll No.:<input type=\"text\" value=".$row['Roll No.']."><br>";
echo "Name:<input type=\"text\" value=".$row['Name']."><br>";
echo "S1:<input type=\"text\" value=".$row['Sub1']."><br>";
echo "S2:<input type=\"text\" value=".$row['Sub2']."><br>";
echo "S3:<input type=\"text\" value=".$row['Sub3']."><br>";
$x=$row['Sub1']+$row['Sub2']+$row['Sub3'];
If($x>200)
echo "Grade:<input type=\"text\" value=Good><br>";
else
echo "Grade:<input type=\"text\" value=Poor><br>";
}
}
?>
</body>
</html>
