<?php 

    class Main{
        const MY_MESSAGE = "hello from inside main class \n";

        function inner()
        {
            //self scop resolution
            echo self::MY_MESSAGE;
        }
    }

    //scope resolution
    echo Main::MY_MESSAGE;

    $obj = new Main();
    $obj->inner();