<?php
if(isset($_POST['submit']))
{
$str="The quick brown fox jumps over the lazy little dog";
$b=preg_replace('/The/',"That",$str);
echo $b;
}
 

?>