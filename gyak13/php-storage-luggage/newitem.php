<?php

include_once 'Storage.php';
$luggageStorage = new Storage(new JsonIO('luggage.json'), false);
$itemStorage = new Storage(new JsonIO('item.json'), false);

// c
if (isset($_POST['name']) && isset($_POST['size']) && isset($_POST['bag'])) {
    $matchingLuggage = $luggageStorage->findById($_POST['bag']);
    $itemsInLuggage = $itemStorage->findMany(fn($item) => $item->bag === $_POST['bag']);
    $usedSpace = array_sum(array_map(fn($item) => $item->size, $itemsInLuggage));

    if ($matchingLuggage->capacity - $usedSpace - $_POST['size'] >= 0) {
        $itemStorage->add([
            "name" => $_POST['name'],
            "size" => $_POST['size'],
            "bag" => $_POST['bag'],
        ]);
    } else {
        session_start();
        $_SESSION['item_size_error'] = 'The new item did not fit in the selected bag!';
    }
}

header('Location: index.php');
exit();
