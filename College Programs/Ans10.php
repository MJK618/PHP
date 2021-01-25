<?php


$x=100;
$y=50;
$z=30;
//Comparing first two numbers
if($x>$y){
  if($x>$z){
echo "$x is the greatest number out of the three";
}
  else{
  echo "$z is the greatest number out of the three";
  }
}
else{
  if($y>$z){
    echo "$y is the greatest number out of the three";
  }
  else{
  echo"$z is the greatest number out of the three";
}

}
?>
