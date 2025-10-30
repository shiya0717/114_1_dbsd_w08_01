<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>ch7-2-2.php</title>
</head>
<body>
   <h2>sID:C112181116<br>
   name:徐詩雅</h2>
   <?php 
      $animals = array( "Dog","Cat","Rabbit","Tiger");
      foreach ($animals as $animal) {
         echo "$animal<br>";
      }
   ?>
</body>
</html>