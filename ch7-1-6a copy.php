<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ch7-1-6a.php</title>
</head>
<body>
    <h2>sID:C112181116<br>
    name:徐詩雅</h2>
    <?php
        define("ANIMALS", [
            "猫", 
            "狗",
        ]);
        echo ANIMALS[0];
        echo "<br/>";
        echo ANIMALS[1];
        echo "<br/>";
    ?>
</body>
</html>