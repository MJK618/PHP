<?php
function match($x,$y)
{
$b=preg_match("/$y/i","$x");
if($b==FALSE)
echo "String not Present";
else
echo "String present";
}

if(isset($_POST['submit']))
{

if(isset($_POST['string']) && isset($_POST['match']))
{
echo match($_POST['string'],$_POST['match']);
}
}
?>
