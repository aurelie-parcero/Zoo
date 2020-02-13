<?php


namespace App\Animals;


use App\Animal;

class Zebra extends Animal
{
    protected function getNoise(): String {
        return 'hiiiii';
    }
}