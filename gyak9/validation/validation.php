<?php

function validate($input, &$errors) {
    if (!isset($input['email']) ||
        !filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please provide a valid e-mail address';
    }

}

$errors = [];
if (!empty($_POST)) {
    validate($_POST, $errors);
}

// var_dump($errors);

?>

<h3> Workshop registration form </h3>

<form method="post">
    <div>
        <label for="email">Email:</label>
        <input id="email" name="email">
    </div>
    <?php if(isset($errors['email'])): ?>
        <div style="color: red"><?= $errors['email'] ?></div>
    <?php endif; ?>

    <div>
        <p>Please select at least two sessions you’d like to attend:</p>

        <div>
            <label for="PHP">Session 1: Introduction to PHP</label>
            <input id="PHP"
                   type="checkbox"
                   name="sessions[]"
                   value="PHP">
        </div>

        <div>
            <label for="JavaScript">Session 2: Advanced JavaScript</label>
            <input id="JavaScript"
                   type="checkbox"
                   name="sessions[]"
                   value="JavaScript">
        </div>

        <div>
            <label for="design">Session 3: Responsive Design</label>
            <input id="design"
                   type="checkbox"
                   name="sessions[]"
                   value="design">
        </div>
    </div>

    <div>
        <p>How likely are you to attend?</p>

        <div>
            <label for="yes">I will definitely attend!</label>
            <input id="yes"
                   type="radio"
                   name="attendance"
                   value="true">
        </div>

        <div>
            <label for="no">I won't be able to attend.</label>
            <input id="no"
                   type="radio"
                   name="attendance"
                   value="false">
        </div>

        <div>
            <label for="maybe">Maybe?</label>
            <input id="maybe"
                   type="radio"
                   name="attendance"
                   value="other">
        </div>
    </div>

    <button type="submit" style="margin-top: 20px;">Submit</button>

</form>
