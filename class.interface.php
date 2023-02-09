<?php
interface baseAnimal{
    function isAlive();
    function canEat( $param, $param2 );
    function bread();
}

class Animal implements baseAnimal{
    function isAlive(){}
    function canEat( $param, $param2 ){}
    function bread(){}
}

interface baseHuman extends baseAnimal{
    function canTalk();
}

class Human implements baseHuman{
    function isAlive(){}
    function canEat( $param, $param2 ){}
    function bread(){}
    function canTalk(){}
}
$cat = new Animal;
echo $cat instanceof baseAnimal;
$h = new Human;
//echo $h instanceof baseAnimal; 



