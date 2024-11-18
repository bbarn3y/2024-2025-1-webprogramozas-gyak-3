<?php

interface PersonAPI {
    function getPersons(): array;
    function getPersonsOverAge(int $age): array;
}

abstract class PersonsFromWhatever implements PersonAPI {
    abstract function getPersons(): array;

    function getPersonsOverAge(int $age): array
    {
        return array_filter(
            $this->getPersons(),
            fn($person) => $person['age'] >= $age
        );
    }
}

class PersonsFromJSON extends PersonsFromWhatever {
    public function getPersons(): array
    {
        return json_decode(
            file_get_contents('persons.json'), true);
    }
}

class PersonsFromCSV extends PersonsFromWhatever {
    public function getPersons(): array
    {
        $persons = [];
        $csvPointer = fopen('persons.csv', 'r');
        $headers = fgetcsv($csvPointer, null,",");
        while($row = fgetcsv($csvPointer, null, ",")) {
            $persons[] = array_combine($headers, $row);
        }
        fclose($csvPointer);
        return $persons;
    }
}

$jsonApi = new PersonsFromJSON();
print_r($jsonApi->getPersonsOverAge(30));
echo '<br>';
$csvApi = new PersonsFromCSV();
print_r($csvApi->getPersonsOverAge(30));


