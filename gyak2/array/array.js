const students = [
    {
        name: "Dudás Levente János",
        age: 30,
        hobbies: ["Futás", "Hangya égetés", "Hegymászás"],
    },
    {
        name: "Fekete Gyöngy",
        age: 24,
        hobbies: ["Műanyag villák gyűjtése különböző büfékből", "Úszás"],
    },
    {
        name: "András Dávid",
        age: 41,
        hobbies: ["Biciklizés", "LEGO", "Villanykapcsolók fel-le kapcsolgatása"],
    },
    {
        name: "Bollók Ármin",
        age: 18,
        hobbies: ["LEGO", "Rajzolás"],
    },
    {
        name: "Bálint Martin Attila",
        age: 21,
        hobbies: ["Ételek betűrendbe rendezése a kamrában"],
    },
    {
        name: "Faragó Flóra",
        age: 21,
        hobbies: ["Biciklizés", "Falmászás", "Golf", "Kavicshajítás", "LEGO", "Motorozás"],
    },
];

// 22 vagy több év feletti személyek
const atLeast22YearsOld = students.filter(x => x.age >= 22);

// Az egyetlen 20 év alatti személy
const under20 = students.find(s => s.age < 18);

// Mindenki 40 év alatti?
const everyoneUnder40 = students.every(e => e.age < 40);

// Legöregebb személy
// const oldestPerson = students
//     .sort((x, y) => x.age - y.age)[students.length -1];
// const oldestPerson = students
//     .reduce((partialMax, s) => partialMax.age > s.age ? partialMax : s,
//         students[0])

// Math.max(10, 23, 30,... )
const maxAge = Math.max(...students.map(s => s.age));
const oldestPerson = students.find(s => s.age === maxAge);

// Az első bicikliző indexe a tömbben
const firstCyclerIndex = students
    .findIndex(s => s.hobbies.includes('Biciklizés'));

// ABC-rendben a 3. személy
const thirdPerson = students.sort((s1, s2) =>
    s1.name.localeCompare(s2.name))[2];

// Szeretnek LEGOzni
const likesLEGO = students
    .filter(x => x.hobbies.includes('LEGO'));

// Hobbik átlagos száma
const averageHobbyCount = students.reduce((accumulated, s) =>
    accumulated + s.hobbies.length, 0) / students.length;

// Hobbik egyedi listája
const uniqueHobbies = // students.map(x => x.hobbies).flat();
    [
        ...new Set(students.flatMap(x => x.hobbies))
    ]

// Egyedi keresztnevek
const uniqueNames = students
    .flatMap(x => x.name.split(' ').slice(1));

console.log(
    `Legalább 22 évesek:`,  atLeast22YearsOld,
    '\nAz egyetlen 20 év alatti személy:', under20,
    '\nMindenki 40 év alatti?', everyoneUnder40,
    '\nLegöregebb személy:', oldestPerson,
    '\nAz első bicikliző indexe a tömbben:', firstCyclerIndex,
    '\nABC-rendben a 3. személy:', thirdPerson,
    '\nSzeretnek LEGOzni: ', likesLEGO,
    '\nHobbik átlagos száma:', averageHobbyCount,
    '\nHobbik egyedi listája:', uniqueHobbies,
    '\nUnique names', uniqueNames,
);
