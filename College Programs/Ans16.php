<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="Ans16.php" method="post">
  <h1>Fibonacci Series</h1>
  Enter the number : <input type="number" name="num">
  <input type="submit" name="submit">


</form>
<?php
function fibonacci(){
$n = $_POST["num"];
$n1=0;
$n2=1;
for($i=0;$i<=$n;$i++){
$f=$n1+$n2;
echo "$f<br>";
$n1=$n2;
$n2=$f;

}
}
fibonacci()
 ?>


  </body>
</html>
