// ========= Utility functions =========
function random(a, b) {
  return Math.floor(Math.random() * (b - a + 1)) + a;
}

// ========= Selected elements =========
const inputGuess = document.querySelector("#inputGuess");
const form = document.querySelector("form");
const tableGuesses = document.querySelector("#guesses");
const divTheWord = document.querySelector("details > div");
const spanError = document.querySelector("#error");
const btnGuess = document.querySelector("form > button");
const divEndOfGame = document.querySelector("#end-of-game");
const btnRestart = document.querySelector("#restart");

// ========= Solution =========

// a
const word = wordList[random(0, wordList.length -1)];
divTheWord.innerHTML = word;

// b
form.addEventListener('submit', (e) => {
      e.preventDefault();
      spanError.innerHTML = '';

      // c
      if (inputGuess.value.length !== 5) {
        spanError.innerHTML = 'The length of the word is not 5!'
        return;
      }

      // d
      if (!wordList.includes(inputGuess.value)) {
        spanError.innerHTML = 'The word is not considered acceptable!'
        return;
      }

      // e
      const matches = inputGuess.value.split('')
          .reduce((subMatches, char, index) =>
            subMatches + (char === word[index] ? 1 : 0),
            0
          )
      console.log('matches', matches);

      // f
      tableGuesses.innerHTML = `<tr ${matches === 5 ? 'class="correct"' : ""}>
    <td>${inputGuess.value}</td>
    <td>${matches}</td>
</tr>
` + tableGuesses.innerHTML;

    if (matches === 5) {
      divEndOfGame.removeAttribute('hidden');
    }
    }
)







