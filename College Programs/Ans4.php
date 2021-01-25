<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "Note : All Time Formats are according to PHP Time Stamp i.e The UNIX Timestamp (1 January 1970 00:00:00 GMT)<br><br> ";

    $dob = mktime(0,0,0,6,29,2000);// modify the birth day 3/25/2020
    echo $dob." : Date Of Birth <br>";
    $today = time();
    echo $today." : Time till today<br>";
    $diff_days = ($today- $dob);
    echo $diff_days." : Difference <br>";
    $days = (int)($diff_days/86400); // To convert seconds into days print "Days till next birthday: $days days!"."\n";
    echo "$days : Days Left";
    ?>




  </body>
</html>
