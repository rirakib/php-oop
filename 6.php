<?php 

abstract class Main{
    
    public $name;

    function __construct($name){
        $this->name = $name;
    }

    abstract function intro();

}

class Drived extends Main{

    function intro()
    {
        echo "hello {$this->name}";
    }
}

$obj = new Drived("rakib");
$obj->intro();

