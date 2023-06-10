<?php
ini_set('display_errors', '1');

class Person {

    public $name = "Noman";
    private $gender = "Not disclosed";
    protected $age = 18;

    function details()
    {
        echo $this->name;
        echo $this->gender;
        echo $this->age;
    }

}

$person = new Person();

// public property can be accessed
// echo $person->name;

// will throw fatal error
// echo $person->gender;
// echo $person->gender;

// you can access all those inside the class
$person->details();

?>