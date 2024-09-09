console.log('Hello from gyak1.js')

console.log('5', "6", `7`, 5,
    true, false,
    [5, 'asd', 7],
    {
        name: 'Péter',
        age: 25
    }
); console.log('test');

const constantVariable = 5;
// constantVariable = 6;
/* Test comment
* Test
 Test */
let dynamicVariable = 6;
dynamicVariable = 5;

console.log(
    ['Péter'] == ['Péter']
)
const nameArray = ['Péter', 'Gábor'];
nameArray.push('András');
// nameArray = [];

console.log('5' == 5)
console.log('5' === 5)
console.log(typeof 5)
console.log(typeof '5')

console.log(5 + 5, 5 * 3, 5 ** 2,
    5 / 2, 5 % 2, true || false,
    true && false
)
console.log('5' + 7)

console.log(!![])
console.log(!!'', !!0, !!1, !!'asd')

const numberArray = [-5, 1, 30, -20, -6]
function filterPositives(array) {
    const results = [];
    for (let i = 0; i < array.length; i++) {
        if (array[i] > 0) {
            results.push(array[i]);
        }
    }
    return results;
}
console.log(filterPositives(numberArray));

function filterNegatives(array) {
    const results = [];
    for (const num of array) {
        if (num < 0) {
            results.push(num);
        }
    }
    return results;
}
console.log(filterNegatives(numberArray))

function generalFilter(array, filterFn) {
    const results = [];
    for (const num of array) {
        if (filterFn(num)) {
            results.push(num);
        }
    }
    return results;
}
console.log(
    generalFilter(
        numberArray,
        n => n % 2 === 0
    ),
    generalFilter(
        numberArray,
        (n) => {
            return n % 2 === 1
        }
    ),
)

function test() {
    const test='test'
}
console.log(test())
let testVariable;
console.log(testVariable);

console.log(+'5')
console.log(+'asd')

console.log(
    numberArray
        .filter((szam) => szam > 5),
    numberArray
        .map(n => n ** 2)
        .filter(n => n < 200),
    numberArray.some(n => n < 50),
    numberArray.every(n => n < 20),
    numberArray.find(num => num < 15),
    numberArray.findIndex(num => num < 15),
    numberArray.reduce(
        (partialResult, currentNumber) => {
            return partialResult + currentNumber
        }, 0
    )
);








