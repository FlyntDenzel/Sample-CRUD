<?php
    //working with object oriented programming

    class Person {
        public $name;
        public $surname;
        public $hobby;
        private $age;
        public static $counter = 0;

    }
    //creating an instance of a class
    $p1 = new Person();

    //adding value to that class
    $p1 -> name = 'Nchang';
    $p1 -> surname = 'Denzel';

    $p2 = new Person();
    $p2 -> name = 'Mul';
    $p2 -> surname = 'Frank';
    echo '<pre>';
        var_dump($p1).'<br>';
        var_dump($p2).'<br>';
    echo '</pre>';
    // print_r($p1);

     
?>