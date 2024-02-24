<?php

    class Person
     {
        public $firstName;
        public $lastName;
        public $age;

        public function __construct($firstName, $lastName, $age) 
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }
    }

    $birama = new Person('Birama', 'DIOP', 20);
    $modou = new Person('Mamadou', 'FALL', 24);
    $niasse = new Person('Abdoulaye', 'NIASSE', 20);

    echo $birama-> firstName . " " . $birama->lastName . " " . $birama->age . "\n";
    echo $modou-> firstName . " " . $modou->lastName. " " . $modou->age . "\n";
    echo $niasse-> firstName . " " . $niasse->lastName . " " . $niasse->age;