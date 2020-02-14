<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanWalk;

class Zebra extends Animal implements CanWalk
{
    protected function getNoise(): String {
        return 'hiiiii';
    }
}