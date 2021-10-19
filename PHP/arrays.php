<?php

declare(strict_types=1);

$months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];

$perks = [
    'health' => 'fruits and vegetables are awesome.',
    'the environment' => 'less need for greenhouses.',
    'nutrients' => 'a larger variety of greens is better for you.',
    'taste' => 'fruits and vegetables in season are the tastiest!'
];

$fruitsAndVegetables = [
    'apple' => [
        'isVegetable' => false,
        'description' => 'the apple is a fall favourite in Sweden. You can either pick them by yourself or get a wide variety in the stores.',
        'months' => ['July', 'August', 'September', 'October'],
    ],
    'pear' => [
        'isVegetable' => false,
        'description' => 'pears are a summer fruit, and are usually ripe at the end of the summer. Great as a snack or paired with cheeses.',
        'months' => ['July', 'August', 'September', 'October'],
    ],
    'tomato' => [
        'isVegetable' => false,
        'description' => 'you thought it was a vegetable? Think again. A juicy tomato is an end of summer treat, enjoyed best with a sprinkle of salt.',
        'months' => ['July', 'August', 'September'],
    ],
];
