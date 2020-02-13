<?php

require __DIR__ . '/vendor/autoload.php';

$nemo = new \App\Animals\Fish\CatFish('Nemo');

//echo $nemo->noise();


$animals = [
    [
        'type' => \App\Animals\Fish::class,
        'nbr' => 5
    ],
    [
        'type' => \App\Animals\Fish\BubbleFish::class,
        'nbr' => 3
    ],
    [
        'type' => \App\Animals\Fish\CatFish::class,
        'nbr' => 2
    ],
    [
        'type' => \App\Animals\Fish\ClownFish::class,
        'nbr' => 1
    ],
    [
        'type' => \App\Animals\Elephant::class,
        'nbr' => 2
    ],
    [
        'type' => \App\Animals\Zebra::class,
        'nbr' => 1
    ],
    [
        'type' => \App\Animals\Parrot::class,
    'nbr' => 10
    ],
    [
        'type' => \App\Animals\Dove::class,
        'nbr' => 2
    ]

];

foreach($animals as $class) {

    for ($x = 0; $x < $class['nbr']; $x++):
        $temp = new $class['type'](get_name($class['type']) . ' ' . ($x + 1));
        echo $temp->noise() . '<br />';
    endfor;

//    echo 'Je suis un ' . $value->name() . ' et je fais ' . $value->noise();
}

function get_name($class) {
    return (substr($class, strrpos($class, '\\') + 1));
}

$animals2 = [
    new \App\Animals\Fish('Nemo'),
    new \App\Animals\Fish('Dori'),
    new \App\Animals\Fish('Seal'),
    new \App\Animals\Fish('Gérard'),
    new \App\Animals\Fish('Michel'),
    new \App\Animals\Fish\BubbleFish('Robert'),
    new \App\Animals\Fish\BubbleFish('Vincent'),
    new \App\Animals\Fish\BubbleFish('Matthias'),
    new \App\Animals\Fish\CatFish('Adil'),
    new \App\Animals\Fish\CatFish('Linda'),
    new \App\Animals\Fish\ClownFish('Arnaud'),
    new \App\Animals\Elephant('Samantha'),
    new \App\Animals\Elephant('Bernard'),
    new \App\Animals\Zebra('Zebulon'),
    new \App\Animals\Parrot('Muza'),
    new \App\Animals\Parrot('Valentin'),
    new \App\Animals\Parrot('Natalia'),
    new \App\Animals\Parrot('Alex'),
    new \App\Animals\Parrot('Phillippe'),
    new \App\Animals\Parrot('Sonia'),
    new \App\Animals\Parrot('Kevin'),
    new \App\Animals\Parrot('Manu'),
    new \App\Animals\Parrot('Hyejin'),
    new \App\Animals\Parrot('Mimi'),
    new \App\Animals\Dove('Damien'),
    new \App\Animals\Dove('Damien')
];

foreach ($animals2 as $value) {

   echo $value->noise().'</br>';
}
//var_dump($animals2);