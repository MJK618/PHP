<?php
function input($a)
{
$m=1;	
$b=ord("a");
$c=ord("z");
$k=strlen($a);
for($i=0;$i<$k;$i++)
{
if (ord($a[$i])>=$b && ord($a[$i])<=$c)
$m=1;
else
{
$m=0;
break;
}
}
if($m==1)
echo "string is lowercase";
else 
echo "not lowercase";
}
if(isset($_POST['submit']))
{
if(isset($_POST['case']))
{
echo input($_POST['case']);
}
}
?>

