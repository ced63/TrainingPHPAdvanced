<?php

namespace Smile\Training;

class CarFactory
{

    static public function makeCar($brand)
    {
        $classname = "\\Smile\\Training\\" . ucfirst($brand);

        if (class_exists($classname)) {
            return new $classname();
        }

//        if ($brand == 'audi') {
//            return new Audi();
//        } elseif ($brand == 'tesla') {
//            return new Tesla();
//        }


    }


}