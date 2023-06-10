<?php
ini_set('display_errors', '1');

class Person {

    private $gender = "Not disclosed";
    protected $age = 18;

    function get_values() {
        echo $this->gender;
    }

    function set_values($gender) {
        $this->gender = $gender;
        echo $this->gender;
    }

}

$person = new Person();

$person->get_values();

$person->set_values('Male');

$person->get_values();
?>
