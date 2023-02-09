<?php 
class Student{
    private $name;
    private $age;
    function __construct($name, $age){
        $this->name = $name;
        if($age < 4){
            throw new Exception("To Young", 100);
        }elseif($age > 30){
            throw new Exception("To Old", 200);
        }
        $this->age = $age;
    }
}

try{
    $std = new Student('Sakil', 2);
    //just
}catch(Exception $error){
    echo $error->getCode() .' : '. $error->getMessage();
}