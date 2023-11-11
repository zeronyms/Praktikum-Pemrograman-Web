const cells = document.querySelectorAll('.cell')
const statusText = document.querySelector('#status')
const resetBtn = document.querySelector('#reset')

const winCondition = [
    [0,1,2],
    [3,4,5],
    [6,7,8],
    [0,3,6],
    [1,4,7],
    [2,5,8],
    [0,4,8],
    [2,4,6]
]

let options = [
    "","","",
    "","","",
    "","","" 
]

let currentPlayer = 'X'
let running = false
initializeGame()

function initializeGame(){
    cells.forEach(element => {
        element.addEventListener('click', cellClicked)
    });
    resetBtn.addEventListener('click', resetGame)
    statusText.textContent = `Player ${currentPlayer} Turn`
    running = true
}

function cellClicked(){
    const cellIndex = this.getAttribute('data-index')
    if (options[cellIndex] != "" || !running) {
        return
    }
    updateCell(this, cellIndex)
    // changePlayer()
    checkWinner()
}

function updateCell(cell, index){
    options[index] = currentPlayer
    cell.textContent = currentPlayer
}
function changePlayer(){
    currentPlayer = (currentPlayer == 'X') ?  'O' : 'X'
    statusText.textContent = `Player ${currentPlayer} Turn`
}
function checkWinner(){
    let roundWon = false
    for (let i = 0; i < winCondition.length; i++) {
        const condition = winCondition[i]; // [0,1,2]
        const cellA = options[condition[0]]
        const cellB = options[condition[1]]
        const cellC = options[condition[2]]
        if (cellA == "" || cellB == "" || cellC == "") {
            continue
        } else if (cellA == cellB && cellB == cellC){
            roundWon = true
            break
        }
    }
    if (roundWon) {
        statusText.textContent = `Player ${currentPlayer} Win`
        running = false
    } else if(!options.includes("")){
        statusText.textContent = `Draw!`
        running = false
    } else {
        changePlayer()
    }
}
function resetGame(){
    currentPlayer = 'X'
    options = [
        "","","",
        "","","",
        "","","" 
    ]
    statusText.textContent = `Player ${currentPlayer} turn`
    cells.forEach(cell => cell.textContent = "")
    running = true
}