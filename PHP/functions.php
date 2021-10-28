<?php

declare(strict_types=1);


function getRandomFruit()
{
    $randomFruit = [
        'Apple' => '🍎',
        'Pear' => '🍐',
        'Tomato' => '🍅'
    ];

    return $randomFruit[array_rand($randomFruit)];
}
