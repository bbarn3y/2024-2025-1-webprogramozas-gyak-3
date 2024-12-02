<?php

include_once 'Storage.php';
$storage = new Storage(new JsonIO('recipes.json'));
$ingredients = $storage->findById($_GET['recipe']);

session_start();

$_SESSION['fridge'] = array_diff($_SESSION['fridge'], $ingredients);

header('Location: index.php');
