<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="Ans17.php" method="post">
  <h1>Displaying Patterns</h1>
  Enter the number :    <input type="number" name="num">
  <br>
  Enter the character : <input type="text" name="char">
    <input type="submit" name="submit">
</form>
<?php
function display(){
$n = $_POST["num"];
$c = $_POST["char"];

for ($i=1; $i < $n+1; $i++) {
  for ($j=1; $j <=$i; $j++)
  {
   echo "$c";
   }
echo " <br>";
}
}

display()
 ?>


  </body>
</html>
