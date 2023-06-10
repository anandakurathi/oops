<?php

class Person {

    var $name = "Noman";
    var $gender = "Not disclosed";

    function name_details()
    {
        return "Hello ". $this->name ."!";
    }

    function genderDetails($gender)
    {
        return "Gender ". $gender;
    }

}

$anand = new Person();
$bindu = new Person();

echo $anand->name_details();

echo "<br/>";

echo $bindu->gender;

?>