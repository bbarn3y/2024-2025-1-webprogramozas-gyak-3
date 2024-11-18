<?php

require_once('Storage.php');

// $gameStorage = new Storage(new JsonIO('data_games.json'), false);
$achievementStorage = new Storage(
    new JsonIO('data_achievements.json'), false);

$matchingAchievement = $achievementStorage->findOne([
    'name' => $_GET["name"],
    'game' => $_GET['game']
]);

if ($matchingAchievement) {
    $matchingAchievement->desc = $_GET['desc'];
    $achievementStorage->update(
        $matchingAchievement->id,
        $matchingAchievement
    );
} else {
    $achievementStorage->add([
        "name" => $_GET["name"],
        "desc" => $_GET["desc"],
        "game" => $_GET["game"],
    ]);
}

header("Location: index.php");
die;
