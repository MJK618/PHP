<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="Ans13.php" method="post">
  <h1>First n Even Numbers</h1>
  Enter the number : <input type="number" name="num">
  <input type="submit" name="submit">
</form>
<?php
function firstNEven()
{
  $x=2;
  for ($i=1;$i<=$_POST["num"];$i++){
    $j=$x*$i;
    echo "$j<br>";
    }
}
echo firstNEven();
?>
  </body>
</html>
