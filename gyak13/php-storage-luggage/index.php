<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
    <link rel="stylesheet" href="src/index.css">
    <link rel="stylesheet" href="src/task.css">
</head>

<?php

include_once 'Storage.php';
$luggageStorage = new Storage(new JsonIO('luggage.json'), false);
$itemStorage = new Storage(new JsonIO('item.json'), false);

?>

<body>
    <header>
        <h1>6. Poggyász / Luggage</h1>
    </header>

    <div id="content">
        <div id="grid">
            <div>
                <h2>Új bőrönd / New bag</h2>
                <form action="newbag.php" method="post" novalidate>
                    <div class="input">
                        <label for="name">Név / Name</label>
                        <input type="text" name="name" id="name" placeholder="Bőrönd neve / Bag name">
                    </div>
                    <div class="input">
                        <label for="capacity">Kapacitás / Capacity</label>
                        <input type="number" name="capacity" id="capacity" placeholder="Kapacitás / Capacity">
                    </div>
                    <div class="input">
                        <button type="submit">Save / Mentés</button>
                    </div>
                </form>
            </div>
            <div>
                <h2>Új tárgy / New item</h2>
                <form action="newitem.php" method="post" novalidate>
                    <div class="input">
                        <label for="name">Név / Name</label>
                        <input type="text" name="name" id="name" placeholder="Tárgy neve / Item name">
                    </div>
                    <div class="input">
                        <label for="size">Size / Méret</label>
                        <input type="number" name="size" id="size" placeholder="Size / Méret">
                        <?php
                        session_start();
                        if (isset($_SESSION['item_size_error'])):
                        ?>
                            <?= $_SESSION['item_size_error'] ?>
                            <?php
                            unset($_SESSION['item_size_error']);
                            ?>
                        <?php endif; ?>
                    </div>
                    <div class="input">
                        <label for="bag">Bag / Bőrönd</label>
                        <select name="bag" id="bag">
                            <?php foreach($luggageStorage->findAll() as $luggage): ?>
                                <option value="<?= $luggage->id ?>"><?= $luggage->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input">
                        <button type="submit">Save / Mentés</button>
                    </div>
                </form>
            </div>
        </div>

        <h2>Tartalom / Contents</h2>

        <ul>
            <!-- d -->
            <?php foreach ($luggageStorage->findAll() as $luggage): ?>
                <?php
                $itemsInLuggage = $itemStorage->findMany(fn($item) => $item->bag === $luggage->id);
                $usedSpace = array_sum(array_map(fn($item) => $item->size, $itemsInLuggage));
                ?>
                <li>
                    <?= $luggage->name ?>
                    <!-- f -->
                    (<?= $usedSpace ?> / <?= $luggage->capacity ?>)
                </li>
                <ul>
                    <?php foreach($itemsInLuggage as $item): ?>
                        <li>
                            <?= $item->name ?>
                            <!-- e -->
                            <a href="./remove.php?id=<?= $item->id ?>">Kivesz</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>
