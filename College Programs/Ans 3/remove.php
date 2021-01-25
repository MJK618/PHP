<?php
echo "hi";
if(isset($_POST['submit1']))
{
if(isset($_POST['rem']))
{
$b=preg_replace('/\s+/',"",$_POST['rem']);
echo $b;
}
else
echo "blank string";
}
?>