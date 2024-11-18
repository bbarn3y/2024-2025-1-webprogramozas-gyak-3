<?php

require_once('Storage.php');

$gameStorage = new Storage(new JsonIO('data_games.json'), false);
$achievementStorage = new Storage(
    new JsonIO('data_achievements.json'), false);

$game = $gameStorage->findById($_GET['id']);
$achievements = $achievementStorage->findMany(
        fn($achievement) => $achievement->game == $game->id
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
    <link rel="stylesheet" href="src/index.css">
    <link rel="stylesheet" href="src/task.css">
</head>

<body>
    <header>
        <h1><?= $game->name ?></h1>
    </header>
    <div id="content">
        <table>
            <thead>
                <tr>
                    <th>Teljesítmény neve / Achievement name</th>
                    <th>Leírás / Description</th>
                    <th>Törlés / Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($achievements as $achievement): ?>
                <tr>
                    <td><?= $achievement->name ?></td>
                    <td>
                        <?= $achievement->desc ?>
                    </td>
                    <td><a href="delete.php?id=<?= $achievement->id ?>"
                        <button>🗑️</button>
                    </td>
                </tr>
            <?php endforeach; ?>
            <!--
                <tr>
                    <td>Teljesítmény 1</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </td>
                    <td><button>🗑️</button></td>
                </tr>
                <tr>
                    <td>Teljesítmény 2</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </td>
                    <td><button>🗑️</button></td>
                </tr>
                <tr>
                    <td>Teljesítmény 3</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </td>
                    <td><button>🗑️</button></td>
                </tr>-->
            </tbody>
        </table>
    </div>
</body>

</html>
