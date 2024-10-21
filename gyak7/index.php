<?php
declare(strict_types=1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

Hello world!

<?php echo "<br> Hello from PHP!" ?>
<?= "<br>Short hello!" ?>

<?php
$bool = true;
$int = 5;
$float = 4.2;
$string = 'Simple string';
$multiLineString = "Multi
line
string";
$array = ["el1", "el2"];
$callable = function() {};

echo "<br>gettype(bool): " . gettype($bool);
echo "<br>gettype(int): " . gettype($int);
echo "<br>gettype(float): " . gettype($float);
echo "<br>gettype(string): " . gettype($string);
echo "<br>gettype(array): " . gettype($array);
echo "<br>gettype(callable): " . gettype($callable);
echo "<br>is_callable(callable): " . is_callable($callable);

echo 5 + 10;
echo 1 ? 2 : 0;
echo 1 ?: 0; // 1 ? 1 : 0
echo NULL ?? 9 ?? 4;
echo 5 <=> 3;

function even(array $numberArray): array {
    $results = [];
    foreach ($numberArray as $number) {
        if ($number % 2 == 0) {
            // array_push($results, $number);
            $results[] = $number;
        }
    }
    return $results;
}

function filter(array $numberArray, callable $func): array {
    $results = [];
    foreach ($numberArray as $number) {
        if ($func($number)) {
            // array_push($results, $number);
            $results[] = $number;
        }
    }
    return $results;
}

$numberArray = [1, 3, 6, 12, -2, -8];
$evenNumbers = even($numberArray);
print_r($evenNumbers);
echo '<br>';
var_dump($evenNumbers);

$oddNumbers = filter($numberArray, function($n) {
    return $n % 2 == 1;
});
?>

<ul>
    <?php foreach ($evenNumbers as $evenNumber): ?>
        <li><?= $evenNumber ?></li>
    <?php endforeach; ?>
</ul>

<?php
print_r($oddNumbers);

$negativeNumbers = array_filter($numberArray, function($num) {
    return $num < 0;
});
print_r($negativeNumbers);

$backgroundColor = $_GET['color'] ?? 'aqua';

?>

<style>
    body {
        background-color: <?= $backgroundColor ?>;
    }
</style>






</body>
</html>


