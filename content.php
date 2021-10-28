<?php
require __DIR__ . '/PHP/header.php';
require __DIR__ . '/PHP/arrays.php';
require __DIR__ . '/PHP/functions.php';

?>

<main>
    <img class="content-hero" src="/Photos-icons/content-hero.jpg" alt="A hand holding a basket of tomatoes.">
    <div class="dropdown-container">
        <form action="content.php" method="GET" id="month-sorting">
            <label for="month">Month:</label>
            <select name="sorting" id="sorting">
                <option value="">Select...</option>
                <?php foreach ($months as $month) : ?>
                    <option value="<?= $month ?>"><?= $month ?></option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>
    <?php
    if (isset($_GET['sorting'])) {
        foreach ($fruitMonths as $month) {
            $name = $month['month'];
            if ($_GET['sorting'] === $name) { ?>
                <div class="content-container">
                    <h1><?= $month['name'] ?></h1>
                    <p><?= $month['description'] ?></p>
                </div>
    <?php }
        }
    }
    ?>
</main>
<?php require __DIR__ . '/PHP/footer.php'; ?>
