<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Task 4</title>
</head>
<body>
<?php
include_once 'Storage.php';
$storage = new Storage(new JsonIO('recipes.json'));
$recipes = $storage->findAll();

session_start();
if (!isset($_SESSION['fridge'])) {
    $_SESSION['fridge'] = [];
}

?>
    <h1>Task 4: Recipe tracker</h1>
    
    <h2>List of recipes</h2>
    <?php foreach ($recipes as $recipe => $ingredients): ?>
    <div>
    <a href="details.php?recipe=<?= $recipe ?>"><?= $recipe ?></a>
    <?php if(count(array_intersect($_SESSION['fridge'], $ingredients)) == count($ingredients)): ?>
        <a href="make.php?recipe=<?= $recipe ?>" style="color: green">Make!</a>
    <?php endif; ?>
    </div>
    <?php endforeach; ?>


    <h2>Fridge contents</h2>
    <ul>
    <?php foreach ($_SESSION['fridge'] as $ingredient): ?>
    <li><?= $ingredient ?></li>
    <?php endforeach; ?>
    </ul>
    
</body>
</html>
