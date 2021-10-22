<?php
require __DIR__ . '/PHP/header.php';
require __DIR__ . '/PHP/arrays.php';
?>
<main>
    <img class="content-hero" src="/Photos-icons/content-hero.jpg" alt="A hand holding a basket of tomatoes.">
    <div class="dropdown-container">
        <select class="" name="Months" id="dropdown-months">
            <?php foreach ($months as $month) : ?>
                <option value="<?= $month ?>"><?= $month ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>

    </div>
</main>
<?php require __DIR__ . '/PHP/footer.php'; ?>
