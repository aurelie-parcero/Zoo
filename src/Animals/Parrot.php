<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;

class Parrot extends Animal implements CanFly
{

    protected function getNoise() : String
    {
        return 'coco';
    }
}