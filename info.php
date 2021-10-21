<?php
require __DIR__ . '/PHP/header.php';
require __DIR__ . '/PHP/arrays.php';
?>

<main>
    <img src="#" alt="">
    <div class="main-info">
        <h1>Why seasonally?</h1>
        <p>Sit pariatur tempor esse ullamco adipisicing aliqua dolore non ad pariatur quis incididunt sunt eiusmod. Dolore nisi ullamco culpa irure sit nulla anim qui reprehenderit laborum velit incididunt. Magna nostrud enim proident do dolore consectetur.</p>
        <img src="#" alt="">
    </div>
    <div class="main-info">
        <img src="#" alt="">
        <ul class="main-info">
            <?php foreach ($perks as $key => $value) : ?>
                <li><?= ucfirst("$key: $value\n") ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="main-info">
        <button>See all of the fruits and vegetables!</button>
    </div>
</main>
<?php require __DIR__ . '/PHP/footer.php'; ?>
