<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$x = array('cat','hat','mat','rat' ,'bat');

echo "This is an unsorted array<br>";
for ($i=0; $i < count($x); $i++) {
  echo "$x[$i]<br>";
}
echo "<br>";
echo "Sorted Array<br>";
sort($x);
for ($i=0; $i < count($x); $i++) {
  echo "$x[$i] <br>";
}


 ?>




  </body>
</html>
