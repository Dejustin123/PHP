<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet"> 
    <script src="main.js"></script>
</head>
<body>
<?php
    $hour = date("H")+1;
    $min = date("i");
    $image = array("<img src=morning.png>","<img src=afternoon.png>","<img src=evening.png>","<img src=night.png>");  
    
    
    if($hour >= 6 && $hour < 12 ){
        echo "<h1>Good Morning<br>$hour : $min</h1>";
        echo $image[0];
        
    }
    elseif( $hour >= 12 && $hour <18 ){
        echo "<h1>Good Afternoon<br>$hour : $min</h1>";
        echo $image[1];
    }
    elseif($hour >= 18 && $hour < 24 ){
        echo "<h1>Good Evening<br>$hour : $min</h1>";
        echo $image[2];
    }
    elseif($hour >= 0 && $hour <6 ){
        echo "<h1>Good Night<br>$hour : $min</h1>";
        echo $image[3];
    }

?>
    
</body>
</html>