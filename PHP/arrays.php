<?php

declare(strict_types=1);

$infoHeading = 'Why seasonally?';
$infoText = 'Eating fruits and vegetables that are in season comes with a range of perks. For you, the people you feed and the world around you. On this site you can look up, month by month, which produce is in season for that month specifically. So browse around with your shopping list ready at hand, and let\'s enjoy the seasons.';

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
    'health' => 'Fruits and vegetables are awesome.',
    'the environment' => 'Less need for greenhouses.',
    'nutrients' => 'A larger variety of greens is better for you.',
    'taste' => 'Fruits and vegetables in season are the tastiest!'
];

$fruitMonths = [
    [
        'month' => 'January',
        'name' => 'Brussel sprouts',
        'isVegetable' => true,
        'description' => 'Have you ever seen how brussel sprouts are grown before? It\'s really something! These are great shaved in a sallad or roasted.',
    ],
    [
        'month' => 'January',
        'name' => 'Green kale',
        'isVegetable' => true,
        'description' => 'This healthy favorite is in recipies everywhere, so you\'ll have no shortage of ideas when you google them. If you want to eat it raw thouhg, make sure to massage it with oil first.',
    ],
    [
        'month' => 'January',
        'name' => 'Jerusalem artichoke',
        'isVegetable' => true,
        'description' => 'If you thought that this wasn\'t a versitile root vegetable, think again. It great in soups, roasted och sliced thinly and fried as a topping.',
    ],
    [
        'month' => 'January',
        'name' => 'Rutabaga',
        'isVegetable' => true,
        'description' => 'Is this the most beautiful name of a vegetable ever? It might be! It\'s a great root vegetable to roast, either in pieces or whole.',
    ],
    [
        'month' => 'January',
        'name' => 'Apple',
        'isVegetable' => false,
        'description' => 'Even though they are usually in their prime at the end of the summer, apples can still be found in January. So cook up something warm with them and get cozy.',
    ],
    [
        'month' => 'February',
        'name' => 'Blood orange',
        'isVegetable' => false,
        'description' => 'Blood oranges have a bit more tang than their orange counterparts, and of course the eyecatching color inside. Enjoy them in a sallad or cooked down with syrup.',
    ],
    [
        'month' => 'February',
        'name' => 'Clementine',
        'isVegetable' => false,
        'description' => 'There is a lot of confusion about the variety of small, orange citrus fruits. Clementines are usually the sweetest, and are great in desserts.',
    ],
    [
        'month' => 'February',
        'name' => 'Carrots',
        'isVegetable' => true,
        'description' => 'Boiled carrots are out - everything else about them is in. This is a perfect vegetable to get creative with, either in a sweet dish or a savoury.',
    ],
    [
        'month' => 'March',
        'name' => 'Grapefruit',
        'isVegetable' => false,
        'description' => 'This tart friut is great in a lot of things, such as sallads or replacing the lemon in a homemade curd.',
    ],
    [
        'month' => 'March',
        'name' => 'Red beets',
        'isVegetable' => true,
        'description' => 'As earthy as it is raw, red beets can easily take on a more sweet flavour. Although, it is mostly used in savoury dishes.',
    ],
    [
        'month' => 'March',
        'name' => 'Potato',
        'isVegetable' => true,
        'description' => 'The golden potato, truly the best out of all of the vegetables. Enjoy it fried, mashed, roasted or however you like.',
    ],
    [
        'month' => 'April',
        'name' => 'Red onion',
        'isVegetable' => true,
        'description' => 'Red onions are sharp, delicious and very versitile. A pro tip is to slice them thinly, and let rest in water before consuming. It removes some sharpness.',
    ],
    [
        'month' => 'April',
        'name' => 'Cucumber',
        'isVegetable' => true,
        'description' => 'Even though cumcumbers are 70% water or something, they truly are tasty. Enhance the flavour of them by grilling, marinating, or just seasoing.',
    ],
    [
        'month' => 'April',
        'name' => 'Pomagranate',
        'isVegetable' => false,
        'description' => 'Opening a pomagranate up can be daunting, but don\'t fear! Just slit it open in sections with a knife and get to town on getting those seeds out.',
    ],
    [
        'month' => 'May',
        'name' => 'Carrots',
        'isVegetable' => true,
        'description' => 'Boiled carrots are out - everything else about them is in. This is a perfect vegetable to get creative with, either in a sweet dish or a savoury.',
    ],
    [
        'month' => 'May',
        'name' => 'Red beets',
        'isVegetable' => true,
        'description' => 'As earthy as it is raw, red beets can easily take on a more sweet flavour. Although, it is mostly used in savoury dishes.',
    ],
    [
        'month' => 'May',
        'name' => 'Jerusalem artichoke',
        'isVegetable' => true,
        'description' => 'If you thought that this wasn\'t a versitile root vegetable, think again. It great in soups, roasted och sliced thinly and fried as a topping.',
    ],
    [
        'month' => 'June',
        'name' => 'Cucumber',
        'isVegetable' => true,
        'description' => 'Even though cumcumbers are 70% water or something, they truly are tasty. Enhance the flavour of them by grilling, marinating, or just seasoing.',
    ],
    [
        'month' => 'June',
        'name' => 'Apple',
        'isVegetable' => false,
        'description' => 'This is when the summer apples start arriving. Enjoy them in baked goods, chetneys, sauces or just plain as is.',
    ],
    [
        'month' => 'June',
        'name' => 'Strawberry',
        'isVegetable' => false,
        'description' => 'Enjoy strawberries in abundance, please. They are the ruby of the summer time and must at least once be eaten with only sugar and cream.',
    ],
    [
        'month' => 'July',
        'name' => 'Apricot',
        'isVegetable' => false,
        'description' => 'Not to be confused with other stone friuts, apricots are amazing. They have a really sweet taste and are great in savoury things and sweet stuff such as marmelade.',
    ],
    [
        'month' => 'July',
        'name' => 'Fennel',
        'isVegetable' => true,
        'description' => 'Tastes like liquorice, is a vegetable. Shave it thinly and dress it to get an amazing summer salad that you can serve with everything.',
    ],
    [
        'month' => 'July',
        'name' => 'Dill',
        'isVegetable' => true,
        'description' => 'Truly the Odie to if crayfish was Garfield. Dill is an amazing herb that is used all over the world in different, exciting ways.',
    ],
    [
        'month' => 'August',
        'name' => 'Zucchini',
        'isVegetable' => true,
        'description' => 'If you\'r english you will call this a courgette. It\'s long, greeen, pretty tasteless but amazing when marinated and grilled.',
    ],
    [
        'month' => 'August',
        'name' => 'Tomato',
        'isVegetable' => false,
        'description' => 'Tomato season is finally here, truly the best part of all of the year. Imagine italian grandmas making sauce all day long, and harness that energy.',
    ],
    [
        'month' => 'August',
        'name' => 'Carrots',
        'isVegetable' => true,
        'description' => 'Boiled carrots are out - everything else about them is in. This is a perfect vegetable to get creative with, either in a sweet dish or a savoury.',
    ],
    [
        'month' => 'September',
        'name' => 'Jerusalem artichoke',
        'isVegetable' => true,
        'description' => 'If you thought that this wasn\'t a versitile root vegetable, think again. It great in soups, roasted och sliced thinly and fried as a topping.',
    ],
    [
        'month' => 'September',
        'name' => 'Brussel sprouts',
        'isVegetable' => true,
        'description' => 'Have you ever seen how brussel sprouts are grown before? It\'s really something! These are great shaved in a sallad or roasted.',
    ],
    [
        'month' => 'September',
        'name' => 'Apples',
        'isVegetable' => false,
        'description' => 'Fall apples are great in every way. This is when most of the different kinds are harvested, so make sure to taste lots of different ones.',
    ],
    [
        'month' => 'October',
        'name' => 'Mushrooms',
        'isVegetable' => true,
        'description' => 'More a vegetable than a fruit, but acutally mycellium are an entire spieces of their own. Look for the yellow gold known as chantarells.',
    ],
    [
        'month' => 'October',
        'name' => 'Pumpkin',
        'isVegetable' => true,
        'description' => 'Don\'t waste all of the pumpkins on just decorations. They make an amazing fall food, in things such as salads, coffees, desserts and much more.',
    ],
    [
        'month' => 'October',
        'name' => 'Clementine',
        'isVegetable' => false,
        'description' => 'There is a lot of confusion about the variety of small, orange citrus fruits. Clementines are usually the sweetest, and are great in desserts.',
    ],
    [
        'month' => 'November',
        'name' => 'Brussel sprouts',
        'isVegetable' => true,
        'description' => 'Have you ever seen how brussel sprouts are grown before? It\'s really something! These are great shaved in a sallad or roasted.',
    ],
    [
        'month' => 'November',
        'name' => 'Green kale',
        'isVegetable' => true,
        'description' => 'This healthy favorite is in recipies everywhere, so you\'ll have no shortage of ideas when you google them. If you want to eat it raw thouhg, make sure to massage it with oil first.',
    ],
    [
        'month' => 'November',
        'name' => 'Mango',
        'isVegetable' => false,
        'description' => 'Mangoes and sticky rice is a must if you have not had it. But mangoes are great in so many other things, especially in savoury dishes. Put it in a poké bowl.',
    ],
    [
        'month' => 'December',
        'name' => 'Rutabaga',
        'isVegetable' => true,
        'description' => 'Is this the most beautiful name of a vegetable ever? It might be! It\'s a great root vegetable to roast, either in pieces or whole.',
    ],
    [
        'month' => 'December',
        'name' => 'Green kale',
        'isVegetable' => true,
        'description' => 'This healthy favorite is in recipies everywhere, so you\'ll have no shortage of ideas when you google them. If you want to eat it raw thouhg, make sure to massage it with oil first.',
    ],
    [
        'month' => 'December',
        'name' => 'Red onion',
        'isVegetable' => true,
        'description' => 'Red onions are sharp, delicious and very versitile. A pro tip is to slice them thinly, and let rest in water before consuming. It removes some sharpness.',
    ],
];
