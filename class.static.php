<?php 
class MathCalculator{
    private $number;
    static $name;
    
    static function fibonacci($n){
        
        $selval = self::$name = $n;
        echo 'this is self value : '.$selval."\n";
        echo "The fibo number is {$n}\n";
        self::doSomething();
    }
    static function doSomething(){
        echo "\n This is dosomething\n";
    }
    function factorial($n){
        echo "The fact number is {$n}\n";
        self::doSomething();
        echo self::$name = 'hello ';
        echo $this->number = 12;
    }
}
MathCalculator::fibonacci(4);
echo "This is -- ".MathCalculator::$name."\n";

$obj = new MathCalculator();
echo $obj->factorial(6);
