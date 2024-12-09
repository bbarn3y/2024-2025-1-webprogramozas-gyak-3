<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5</title>
    <link rel="stylesheet" href="src/index.css">
    <link rel="stylesheet" href="src/task.css">
</head>

<?php
$errors = [];

if (!empty($_GET)) {
    // a
    if ($_GET['username'] === '' ||
        $_GET['email'] === '' ||
        $_GET['hours'] === '' ||
        $_GET['rating'] === '' ||
        $_GET['opinion'] === '') {
        $errors[] = 'A mezők kitöltése kötelező!';
    }
    // b
    if (strlen($_GET['username']) < 8 || strlen($_GET['username']) > 20) {
        $errors[] = 'A felhasználónév hossza 8 és 20 karakter között legyen!';
    }
    // c
    if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Az e-mail cím formátuma helytelen!';
    }
    // d
    // floor($_GET['hours]) === $_GET['hours']
    if ((int) $_GET['hours'] != (float) $_GET['hours']) {
        $errors[] = 'A játszott órák száma csak egész szám lehet!';
    }
    // e
    if ((int) $_GET['hours'] < 0 || (int) $_GET['hours'] > 999) {
        $errors[] = 'A játszott órák száma 0 és 999 között legyen!';
    }
    // f
    if (!in_array(
        $_GET['rating'],
        ['5-excellent', '4-good', '3-average', '2-bad', '1-terrible']
    )) {
        $errors[] = 'Helytelen értékelés!';
    }
    // g
    if (
        ($_GET['rating'] === '2-bad' && !str_contains(strtolower($_GET['opinion']), 'bug')) ||
        ($_GET['rating'] === '1-terrible' && !str_contains(strtolower($_GET['opinion']), 'crash'))
    ) {
        $errors[] = 'Normális véleményt írj!';
    }
}



?>

<body>
    <header>
        <h1>5. Értékelés / Rating</h1>
    </header>

    <div id="content">
        <h2>Értékeld / Rate : Fallout 4</h2>
        <form novalidate>
            <div class="input">
                <label for="username">Felhasználónév / Username</label>
                <input type="text" name="username" id="username" placeholder="Felhasználónév / Username">
            </div>
            <div class="input">
                <label for="email">E-mail cím / E-mail address</label>
                <input type="email" name="email" id="email" placeholder="E-mail cím / E-mail address">
            </div>
            <div class="input">
                <label for="hours">Hány órád van a játékban? / How many hours do you have in the game?</label>
                <input type="number" name="hours" id="hours" placeholder="Hány órád van a játékban / How many hours do you have in the game?">
            </div>
            <div class="input">
                <label for="rating">Értékelés / Rating</label>
                <select name="rating" id="rating">
                    <option value="5-excellent">Nagyon jó / Excellent</option>
                    <option value="4-good">Jó / Good</option>
                    <option value="3-average">Átlagos / Average</option>
                    <option value="2-bad">Rossz / Bad</option>
                    <option value="1-terrible">Nagyon rossz / Terrible</option>
                </select>
            </div>
            <div class="input">
                <label for="opinion">Vélemény / Opinion</label>
                <textarea name="opinion" id="opinion" placeholder="Vélemény / Opinion"></textarea>
            </div>
            <div class="input">
                <button type="submit">Küldés / Send</button>
            </div>
        </form>
        <?php if(count($errors) > 0): ?>
        <div id="error">
            <img src="img/error.jpg">
            <ul>
                <?php foreach($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        <?php if(count($errors) === 0): ?>
        <div id="success">
            <img src="img/success.jpg">
        </div>
        <?php endif; ?>
    </div>

    <div id="testing">
        <h2>Linkek a teszteléshez / Links for testing</h2>
        <div>A megoldásod nem elég, ha helyes eredményt ad ezekre a tesztekre! Ez csak segítség, ha szeretnéd ellenőrizni.</div>
        <div>Your solution is not necessarily correct if it passes these tests! This is just a help if you want to check.</div>

        <ul>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=10&rating=5-excellent&opinion=teszt">Helyes / Correct</a></li>
            <li><a href="index.php?username=&email=teszt%40teszt.hu&hours=10&rating=5-excellent&opinion=teszt">Hiányzó felhasználónév / Missing username</a></li>
            <li><a href="index.php?username=teszt&email=teszt%40teszt.hu&hours=10&rating=5-excellent&opinion=teszt">Túl rövid felhasználónév / Too short username</a></li>
            <li><a href="index.php?username=tesztteszt&email=&hours=10&rating=5-excellent&opinion=teszt">Hiányzó e-mail cím / Missing e-mail address</a></li>
            <li><a href="index.php?username=tesztteszt&email=almafa&hours=10&rating=5-excellent&opinion=teszt">Hibás e-mail cím / Invalid e-mail address</a></li>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=&rating=5-excellent&opinion=teszt">Hiányzó játszott órák / Missing hours</a></li>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=-10&rating=5-excellent&opinion=teszt">Hibás játszott órák (negatív) / Invalid hours (negative)</a></li>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=10.5&rating=5-excellent&opinion=teszt">Hibás játszott órák (nem egész) / Invalid hours (non-integer)</a></li>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=ten&rating=5-excellent&opinion=teszt">Hibás játszott órák (szöveg) / Invalid hours (text)</a></li>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=10&rating=&opinion=teszt">Hiányzó értékelés / Missing rating</a></li>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=10&rating=teszt&opinion=teszt">Hibás értékelés / Invalid rating</a></li>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=10&rating=5-excellent&opinion=">Hiányzó vélemény / Missing opinion</a></li>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=10&rating=2-bad&opinion=teszt">Hibás vélemény "bad" értékelésnél / Invalid opinion at "bad" rating</a></li>
            <li><a href="index.php?username=tesztteszt&email=teszt%40teszt.hu&hours=10&rating=1-terrible&opinion=teszt">Hibás vélemény "terrible" értékelésnél / Invalid opinion at "terrible" rating</a></li>
        </ul>
    </div>
</body>

</html>
