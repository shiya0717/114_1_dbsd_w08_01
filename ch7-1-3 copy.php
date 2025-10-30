<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>ch7-1-3.php</title>
</head>
<body>
   <h2>sID:C112181116<br>
   name:徐詩雅</h2>
   <?php 
      $scores = array(22, 16, 30, 24);
      $total = 0;
      foreach ($scores as $score) {
         echo "$score ";
         $total += $score;
      }
      echo "<br>total: ". $total. "<br>";
      print_r($scores);
      echo "<br><br>sID: ". "C112181116";
      echo "<br>name: ". "徐詩雅" . "<br>";
   ?>
</body>
</html>