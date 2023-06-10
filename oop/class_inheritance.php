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

class Man extends Person {

}

class Women {

}


$man = new Man();
$women = new Women();

echo $man->gender;
echo $man->name_details();

?>