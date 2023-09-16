<?php 

    class Item{

        public $name, $color, $weight;

        function __construct($name,$color,$weight='N/A'){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function getData(){
            echo "name : {$this->name}, color : {$this->color}, weight : {$this->weight} \n";
        }

    }

    class Fruit extends Item{

        
    }

    class Flower extends Item{

        
    }

    $f1 = new Fruit('apple','red','200gm');
    $f1->getData();
    $f2 = new Fruit('lichi','red');
    $f2->getData();
    $fl1 = new Fruit('Water Lili','white');
    $fl1->getData();