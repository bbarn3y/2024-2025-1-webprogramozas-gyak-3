<?php

$personsFile = fopen("persons.json", "r");

$personJSONString =
    fread($personsFile, filesize("persons.json"));
$personsObject = json_decode($personJSONString, true);

fclose($personsFile);

print_r($personsObject);

$adultPersons = array_filter(
    $personsObject,
    fn($person) => $person['age'] >= 18
);

?>

<ul>
    <?php foreach($adultPersons as $adultPerson): ?>
        <li><?= $adultPerson['name'] ?></li>
    <?php endforeach; ?>
</ul>

<?php

$adultPersonsToJSON = fopen("adultPersons.json", "w");

fwrite(
    $adultPersonsToJSON,
    json_encode($adultPersons,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

fclose($adultPersonsToJSON);

/**
 * name,age
 * Molnár Zalán, 20
 */

$adultPersonsToCSV = fopen("adultPersons.csv", "w");

fwrite($adultPersonsToCSV, "name,age" . PHP_EOL);
foreach($adultPersons as $adultPerson) {
    fwrite($adultPersonsToCSV,
        $adultPerson['name'] . "," . $adultPerson['age'] . PHP_EOL);
}
fclose($adultPersonsToCSV);
