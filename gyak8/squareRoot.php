<?php

// print_r($_GET);

$number = $_GET['number'] ?? $_POST['number'] ?? NULL;

$errors = [];

if (!$number) {
    $errors[] = 'Please provide a number!';
}

?>

Number: <?= $number ?>
<br>
<?php if (count($errors) == 0): ?>
    SQRT: <?= sqrt($number) ?>
<?php endif; ?>

<?php foreach ($errors as $error) {
    echo '<div style="color: red">' . $error . '</div>';
}
?>

