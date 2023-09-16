<?php

    class Fruites{

        //property
        public $name;

        //starting when object create
        function __construct($name) {
            $this->name = $name;
        }

        //starting when scripting ending
        function __destruct(){
            echo "fruite name is {$this->name}";
        }
    }

    $fruite = new Fruites('apple');
