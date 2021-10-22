<?php
require __DIR__ . '/PHP/header.php';
require __DIR__ . '/PHP/arrays.php';
?>

<main>
    <img class="info-hero-image" src="/Photos-icons/info-hero-image.jpg" alt="Seeds growing in black plastic containers.">
    <div class="info-intro-container">
        <div class="info-intro-text">
            <h1 class="info-heading">Why seasonally?</h1>
            <p class="info-body-text">Sit pariatur tempor esse ullamco adipisicing aliqua dolore non ad pariatur quis incididunt sunt eiusmod. Dolore nisi ullamco culpa irure sit nulla anim qui reprehenderit laborum velit incididunt. Magna nostrud enim proident do dolore consectetur.</p>
        </div>
        <div class="info-intro-image">
            <img class="intro-image" src="/Photos-icons/info-subheading-image.jpg" alt="Cucumbers and tomatoes on a bed of newspaper.">
        </div>
    </div>
    <div class="main-info">
        <img src="#" alt="">
        <ul class="main-info-bottom">
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
