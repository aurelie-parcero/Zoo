<?php


namespace App;


class Enclosure
{

    public $animals;
    
    public function addAnimal($animal) {
        $this->animals[] = $animal;
    }

    public function __toString() : String {

        $allSounds = "";

        foreach($this->animals as $animal) {
            $allSounds .= $animal->noise();

        }
        return $allSounds;
    }
}