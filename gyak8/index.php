<?php

$formState = [
    1 => [
        'name' => 'Select one',
        'type' => 'radio',
        'options' => [
            'First option' => false,
            'Second option' => true
        ]
    ],
    2 => [
        'name' => 'Select multiple',
        'type' => 'checkbox',
        'options' => [
            'First' => true,
            'Second' => false,
            'Third' => true
        ]
    ]
];

?>

<!--
<h3>Select one</h3>
<input type="radio"
       name="selectone"
       value="1"
       checked
/> 1
-->

<?php foreach ($formState as $id => $settings): ?>

    <h3><?= $settings['name'] ?></h3>

    <?php foreach ($settings['options'] as $option => $checked): ?>
        <input type="<?= $settings['type'] ?>"
               name="<?= $settings['name'] ?>>"
               value="<?= $option ?>"
               <?= $checked ? 'checked' : '' ?>
        /> <?= $option ?>
    <?php endforeach; ?>

<?php endforeach; ?>


<h3>SQRT</h3>
<form method="POST" action="gyak8/squareRoot.php">
    <label for="number">Number</label>
    <input id="number" name="number" type="text" />
    <button type="submit">Calculate SQRT</button>
</form>

