<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

class Parrot extends Animal implements CanFly, CanWalk
{

    protected function getNoise() : String
    {
        return 'coco';
    }
}