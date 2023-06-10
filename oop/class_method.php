<?php

class Person {

    function name()
    {
        return "My Name is";
    }

    function gender()
    {
        return "Gender";
    }

}

$the_method = get_class_methods('Person');

foreach($the_method as $method) {
    echo $method . "<br/>";
}

?>