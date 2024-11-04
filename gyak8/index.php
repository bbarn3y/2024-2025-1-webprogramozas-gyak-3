<?php

$formState = [
    1 => [
        'name' => 'Select one',
        'type' => 'radio',
        'options' => [
            'First option' => true,
            'Second option' => false
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



<?php endforeach; ?>

