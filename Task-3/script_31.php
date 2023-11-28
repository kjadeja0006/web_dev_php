<?php
    $food = array("pizza","burger","fries","sandwiches","dessert");
    $search = "pizza";

    $index = array_search($search, $food);
    
    if($index !== false  )
    {
        echo "$search was found at index: $index";
    }
    else
    {
        echo "$search not found in the array";
    }
?>