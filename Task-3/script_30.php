<?php
    $food = array("pizza","burger","fries","sandwiches","pizza","fries");
    $unique = array_unique($food);
    
    foreach($unique as $foods)
    {
        echo $foods .", ";
    }
?>