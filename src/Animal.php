<?php


namespace App;


abstract class Animal
{
    private $_name;


    public function __construct($name) {
    $this->_name = $name;

    }

    private function name() {
        return $this->_name;
    }

    protected abstract function getNoise();

    public function noise() {
        return 'Je suis ' . $this->name() . ': ' . $this->getNoise() . '<br />';
    }
}
