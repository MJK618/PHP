<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="Ans11.php" method="get">
<h1>FACTORIAL</h1>
Enter the number : <input type="number" name="num">
<input type="submit" name="submit">
</form>
<?php
function Fact()
{
  $fac=1;
  for($i=1;$i<=$_GET["num"];$i++){
    $fac=$fac*$i;
  }
  //echo $_GET["num"]
  echo "! = $fac";
}
echo$_GET["num"];
Fact();
 ?>
  </body>
</html>
