<?php require __DIR__ . '/PHP/header.php'; ?>
<main class="hero-container">
    <img class="hero-image" src="/Photos-icons/hero-kale.jpg" alt="Kale and spices on a table.">
    <section class="month-container">
        <div class="month-info">
            <p>See what's in season for: <?php echo date('F'); ?></p>
        </div>
    </section>
    <section class="season-container">
        <div>
            <h1>Why seasonally?</h1>
            <p>Text about it.</p>
            <img src="#" alt="">
            <button class="season-button">Read more</button>
        </div>
    </section>
    <section class="gallery-container">
        <div class="gallery-fruit-veg">
            <img class="gallery-pic" src="#" alt="">
            <button class="gallery-button">Fruit & vegetables</button>
            <img class="gallery-pic" src="#" alt="">
            <button class="gallery-button">Self-picking</button>
        </div>
    </section>
</main>
<?php require __DIR__ . '/PHP/footer.php'; ?>
