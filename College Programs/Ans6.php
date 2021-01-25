<html>
<body>
<form method="post" action="Ans6.php">
<select name="lang">
  <option value="English">English</option>
  <option value="Spanish">Spanish</option>
  <option value="Germany">Germany</option>
  <option value="French">French</option>
  <option value="Arabic">Arabic</option>
  <option value="Hindi">Hindi</option>
</select>
<input type="submit" name='submit'>
</form>
<?php
echo "Displaying Hello in the language chosen from the Dropdown Menu.<br><br>";

if(isset($_POST["submit"]))
{
$lang1=trim($_POST["lang"]);
echo $lang1;
echo "<br>";
switch ($lang1) {
    case "English":
        echo "Hello";
        break;
    case "Spanish":
        echo "Hola";
        break;
    case "Germany":
        echo "Hallo";
        break;
    case "French":
        echo "Bonjour";
        break;
    case "Arabic":
        echo "Marhaba";
        break;
    case "Hindi":
        echo "Namaskar";
        break;
}
}
?>
</body>
</html>
