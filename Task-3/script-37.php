<?php
    $student = array("darshil");

    array_push($student, "raj");
    array_push($student, "parthraj");
    array_push($student, "meetraj");

    echo "after pushing element: ";
    print_r($student);

    $remove = array_pop($student);

    echo"<br>";
    echo " remove element :". $remove ."<br>" ;
    echo " after popping element :";
    print_r($student);
?>