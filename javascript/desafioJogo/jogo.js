let random = 0
let plays = 1
let number = 0

generateRandom()

function play() {
    number = prompt(`${plays}ª tentativa, adivinhe o número:`)

    checkResult()
}

function checkResult() {
    console.log(number + '==' + random)

    if (number == random) {
        alert('Acerto. Parabéns!')

        resetGame()
    } else if (plays >= 3) {
        alert('Game over!')

        resetGame()
    } else {
        plays++

        play()
    }
}

function generateRandom() {
    random = Math.floor(Math.random() * 10)
}

function resetGame() {
    plays = 1
    
    generateRandom()
}