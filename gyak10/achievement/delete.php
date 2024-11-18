<?php

require_once('Storage.php');

// $gameStorage = new Storage(new JsonIO('data_games.json'), false);
$achievementStorage = new Storage(
    new JsonIO('data_achievements.json'), false);

$achievementStorage->delete($_GET['id']);

header("Location: index.php");
die;
