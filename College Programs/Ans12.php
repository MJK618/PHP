<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="Ans12.php" method="post">
  <h1>Prime Number</h1>
  Enter the number : <input type="number" name="num">
  <input type="submit" name="submit">
</form>
<?php
function Prime()
{
  for ($i=2;$i<$_POST["num"];$i++){
    if ($_POST["num"]%$i==0){
       echo $_POST["num"];
       echo " is  not prime.";
      exit;
    }
     
  }
    echo $_POST["num"];
    echo " is prime.";
}
Prime();
?>
  </body>
</html>
