<?php
class fruitsList implements IteratorAggregate{
    private $fruits;
    function __construct(){
        $this->fruits = array();
    }
    function add($fruit){
        array_push($this->fruits, $fruit);
    }
    function getFruits(){
        return $this->fruits;
    }
    function getIterator(){
        return new ArrayIterator($this->fruits);
    }
}

$obj = new fruitsList;
$obj->add('Mango');
$obj->add('Mango1');
$obj->add('Mango2');
$obj->add('Mango3');
 var_dump($obj);
foreach($obj as $fruit){
    echo $fruit."\n";
}