<?php
    $student = array("name"=>"darshil", "age"=>20, "city"=>"rajkot");

    $check = "age";

    if(array_key_exists($check, $student))
    {
        echo "the key $check exist in the array";
    }else
    {
        echo "the key $check not exist in the array";
    }

?>