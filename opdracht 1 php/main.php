<?php
    date_default_timezone_set("America/Chicago");
    $hour = date("H");
    $min = date("i");
    $image = array("<img src=morning.png class='image'>","<img src=afternoon.png class='image'>","<img src=evening.png class='image'>","<img src=night.png class='image'>");  



    echo "<div id='main'>";
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
    echo "</div>";
?>