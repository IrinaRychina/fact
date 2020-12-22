<?php
    $time = date("H");
    if(($time >= 8) || ($time < 20))
    {
        $img = '<img src="images/sun.jpg">';
    }
    elseif (($time >= 20) || ($time < 8))
    {
        echo '<img src="images/moon.png">';
    }
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>День и ночь</title>
</head>
<body>
<h1><?php echo $img; ?></h1>
</body>
</html>
