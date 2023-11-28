<?php
    $student = array("darshil","raj","jayraj","vishvraj");

    $check = "parth";

    if(in_array($check, $student))
    {
        echo "the value $check exists in array";
    }else
    {
        echo "the value $check not exists in array";
    }
?>