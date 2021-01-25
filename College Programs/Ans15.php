<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="Ans15.php" method="post">
  <h1>Pallindrome</h1>
  Enter the string : <input type="text" name="string">
  <input type="submit" name="submit">
</form>
<?php
function pallindrome()
{
  $x=0;
$s1=$_POST["string"];
$len = strlen($s1);
echo "Length of the string $len<br>";
for($i=$len - 1, $j = 0; $i >= 0, $j < $len; $i--, $j++)
{

  $s2[$j]=$s1[$i];

if ($s1[$j]==$s2[$j]){
$x=1;
}
else {
  $x=0;
}
}
if ($x==1){
  echo "<br>$s1 is a Pallindrome";
}
else{
  echo "<br>$s1 is not a Pallindrome";
}
}


echo pallindrome();
?>
  </body>
</html>
