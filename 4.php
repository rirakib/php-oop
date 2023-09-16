<?php

    class Main{

        function wish()
        {
            echo "hi from main class";
        }

        //can not override it in children class
        final function bye()
        {
            echo "bye from main class";
        }
    }

    class Drived extends Main{

        //override method
        function wish()
        {
            echo "hi from drived class";
        }
    }

    $ob1 = new Drived();
    $ob1->wish();