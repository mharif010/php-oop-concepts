<?php 
class student{
    private $name;
    private $age;
    private $class;
    function __construct( $name = '', $age = '', $class = '' ){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }
    function __set( $prop, $value ){
        $this->$prop = $value;
    }
    function __get($prop){
        return strtoupper($this->$prop);
    }
    // function setName($name){
    //     $this->name = $name;
    // }
    // function getName(){
    //     return $this->name;
    // }
    // function setAge($age){
    //     $this->age = $age;
    // }
    // function getAge(){
    //     return $this->age;
    // }
    // function setClass($class){
    //     $this->class = $class;
    // }
    // function getClass(){
    //     return $this->class;
    // }
}
// $obj = new student('arif', '12', '10');
// var_dump($obj);
// echo $obj->getName();
// echo $obj->getAge();
// echo $obj->getClass();
$obj = new student();
$obj->name = 'Solim';
echo $obj->name;