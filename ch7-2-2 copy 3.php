<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>ch7-2-2.php</title>
</head>
<body>
   <?php 
      $weekday = array( 1=>"Mon",
                           "Tue", 
                           "Wed",
                           "Thu",
                           "Fri",
                           "Sat",
                           "Sun");
      for ( $i = 1; $i <= count($weekday); $i++ )
         echo "$i : $weekday[$i]<br>";
      echo "<br/>";
   ?>
</body>
</html>
</html>