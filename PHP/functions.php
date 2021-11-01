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

function footerText(string $topText, string $bottomText): string
{
    return "$topText $bottomText";
}

$footer = footerText('Seasons for the win', '©2021 sea/son');
