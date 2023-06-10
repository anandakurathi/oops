<?php

class Person {

    function name()
    {
        return "Hello there!";
    }

    function gender($gender)
    {
        return "Gender ". $gender;
    }

}

$anand = new Person();
$bindu = new Person();

echo $anand->name();


?>