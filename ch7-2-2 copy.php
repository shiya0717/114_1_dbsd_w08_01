<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>ch7-2-2.php</title>
</head>
<body>
   <?php 
      // 使用array()指定結合陣列的元素
      $arr = array(  "sID"=>"C112181116", 
                     "name"=>"徐詩雅", 
                     "shape"=>"三角形",
                              100 ); // 沒有指定,鍵值是0
      
      foreach($arr as $key=>$value) echo "$key=>$value <br>";
   ?>
</body>
</html>