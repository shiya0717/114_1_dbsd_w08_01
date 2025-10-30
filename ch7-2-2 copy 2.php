<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>ch7-2-2.php</title>
</head>
<body>
   <?php 
      $arr["color"] = "紅色";
      $arr["name"] = "徐詩雅";
      $arr["shape"] = "圓形";
      foreach($arr as $key=>$value)
         echo "$key => $value <br>";
   ?>
</body>
</html>