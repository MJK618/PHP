<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="Ans1.php" method="post">

Enter the string you want to reverse : <input type="text" name="string1" >
<input type="submit" name="submit">

</form>

<?php
$s1 = ($_POST["string1"]);
$len = strlen($s1);
echo "<br>";
$rev_s1 = '';
$i=0;
while(!empty($s1[$i])){

  $rev_s1=$s1[$i].$rev_s1;
  $i++;
}

echo "Original String : $s1<br> ";

echo("Reversed String : $rev_s1");

?>






  </body>
</html>
