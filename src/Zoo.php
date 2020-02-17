<?php


namespace App;


use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo
{
    /**
     * @var Enclosure $_aquarium
     */
    private static $_aquarium = null;

    /**
     * @var Enclosure $_aviary
     */
    private static $_aviary = null;

    /**
     * @var Enclosure $_fence
     */
    private static $_fence = null;


    public static function aquarium() {
        return self::$_aquarium;
    }

    public static function aviary() {
        return self::$_aviary;
    }

    public static function fence() {
        return self::$_fence;
    }

    public static function addAnimal(Animal $classAnimal) {

        if(self::aquarium() === null){
            self::$_aquarium = new Enclosure();
        }

        if(self::aviary() === null) {
            self::$_aviary = new Enclosure();
        }

        if(self::fence() === null) {
            self::$_fence = new Enclosure();
        }

        if($classAnimal instanceof CanFly)
        {
            self::aviary()->addAnimal($classAnimal);
            return ;
        }

        if($classAnimal instanceof CanWalk) {
            self::fence()->addAnimal($classAnimal);
            return ;
        }
            self::aquarium()->addAnimal($classAnimal);

    }

    public static function visitTheZoo() {

        echo '<p>' . '<h1>Aquarium</h1> ' . '<br />' . self::aquarium() . '<br /> <h1>Volière</h1> ' . '<br />' . self::aviary() . '<br /> <h1>Cage</h1> ' . '<br />' . self::fence() . '</p>';

    }
}