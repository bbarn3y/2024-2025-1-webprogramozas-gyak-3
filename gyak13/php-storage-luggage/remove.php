<?php

include_once 'Storage.php';
$itemStorage = new Storage(new JsonIO('item.json'), false);

// e
if (isset($_GET['id'])) {
    $itemStorage->delete($_GET['id']);
}

header('Location: index.php');
exit();
