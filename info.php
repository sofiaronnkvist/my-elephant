<?php
require __DIR__ . '/PHP/header.php';
require __DIR__ . '/PHP/arrays.php';
require __DIR__ . '/PHP/functions.php';
?>

<main>
    <img class="info-hero-image" src="/Photos-icons/info-hero-image.jpg" alt="Seeds growing in black plastic containers.">
    <div class="info-intro-container">
        <div class="info-intro-text">
            <h1 class="info-heading"><?= $infoHeading ?></h1><br>
            <p class="info-body-text"><?= $infoText ?></p>
        </div>
        <div class="info-intro-image">
            <img class="intro-image" src="/Photos-icons/info-subheading-image.jpg" alt="Cucumbers and tomatoes on a bed of newspaper.">
        </div>
    </div>
    <div class="info-intro-container">
        <div class="info-intro-text">
            <h2>Perks</h2>
            <ul class="main-info-bottom">
                <?php foreach ($perks as $key => $value) : ?>
                    <li><?= ucfirst("$key: $value\n") ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="info-intro-image">
            <img class="intro-image" src="/Photos-icons/list-image.jpg" alt="Woman cooking with vegetables in a modern kitchen.">
        </div>
    </div>
    <div class="buttons-bottom">
        <div class="buttons-element">
            <form action="/content.php">
                <button class="main-button" type="submit">See all of the fruits and vegetables!</button>
            </form>
        </div>
    </div>
</main>
<?php require __DIR__ . '/PHP/footer.php'; ?>
