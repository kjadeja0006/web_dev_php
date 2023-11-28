<?php
$food = array("pizza","burger","fries",);
$food2 = array("ice cream","shake");
$merge = array_merge($food, $food2);

foreach($merge as $foods)
{
    echo $foods .", ";
}
?>