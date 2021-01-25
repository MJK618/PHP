<html>
<head>
<title>
Menu</title>
</head>
<body>
<h3>Press 1 for remove space from string<br>
Press 2 to check whether a substring exist in given string or not.<br>
Press 3 to replace first "the" in a string with "that"<br>
Press 4 to to check whehter all the characters of a string are lowercase of not<br> </h3>

<form action="" method="POST">
<input type="text" name="menu"><br>
<input type="submit" name="login"><br>
</form>
</body>
</html>
<?php 
if(isset($_POST['login']))
{
switch($_POST['menu'])
{
case 1:
print<<<this
<form method="POST" action="remove.php">
<h3>Enter a string</h3>
<input type="text" name="rem"><br>
<input type="submit" name="submit1" value="Remove spaces"/> 
</form> 
this;

break;
case 2:
print<<<this
<form method="POST" action="match1.php">
<h3>Enter a string</h3>
<input type="text" name="string"><br><br>
<h3>Enter a string to be found</h3>
<input type="text" name="match">
<input type="Submit" name="submit">
</form>
this;
break;
case 3:
print<<<this
<form method="POST" action="replace.php">
Replace "the" with "that" in:
"The quick brown for jumps over the lazy little dog"
<input type="Submit" name="submit" value="Replace">
</form>
this;
break;
case 4:
print<<<this
<form method="POST" action="ord.php">
<h3>Enter a string</h3>
<input type="text" name="case"><br>
<input type="submit" name="submit" value="check for lowercase"/> 
</form> 
this;

break;
default:
echo"You entered wrong no.";
}
}
?>

