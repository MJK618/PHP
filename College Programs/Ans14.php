<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="Ans14.php" method="post">
  <h1>Sum of First n Numbers</h1>
  Enter the number : <input type="number" name="num">
  <input type="submit" name="submit">
</form>
<?php
function sumOfFirstNums()
{
  $x=0;
  for ($i=1;$i<=$_POST["num"];$i++){
    $x=$x+$i;
    }
echo "$x<br>";
}

echo sumOfFirstNums();
?>
  </body>
</html>
