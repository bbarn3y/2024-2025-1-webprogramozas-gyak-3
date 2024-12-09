<?php

include_once 'Storage.php';
$luggageStorage = new Storage(new JsonIO('luggage.json'), false);

// a
if (!empty($_POST) && isset($_POST['name']) && isset($_POST['capacity'])) {
    $luggageStorage->add([
        "name" => $_POST['name'],
        "capacity" => $_POST['capacity']
    ]);
}

header('Location: index.php');
exit();
