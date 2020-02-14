<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;

class Dove extends Animal implements CanFly

{
protected function getNoise(): String {
    return 'Rou Rouuu';
}


}