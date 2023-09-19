<?php


// Challenge 10: Tic-Tac-Toe Game
// Create a PHP implementation of the Tic-Tac-Toe game. Use a multidimensional array to represent the game board and implement the game logic, including checking for a win or a draw.




// Initialize the Tic-Tac-Toe board


$board = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' '],
];

$player = 'X'; // Starting player (X or O)
$winner = null;

// Function to display the game board
function displayBoard($board) {
    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 3; $col++) {
            echo $board[$row][$col];
            if ($col < 2) {
                echo ' | ';
            }
        }
        echo "\n";
        if ($row < 2) {
            echo "---------\n";
        }
    }
    echo "\n";
}

// Function to check for a win
function checkWin($board, $player) {
    // Check rows, columns, and diagonals for a win
    for ($i = 0; $i < 3; $i++) {
        if (
            ($board[$i][0] == $player && $board[$i][1] == $player && $board[$i][2] == $player) ||
            ($board[0][$i] == $player && $board[1][$i] == $player && $board[2][$i] == $player)
        ) {
            return true;
        }
    }

    if (
        ($board[0][0] == $player && $board[1][1] == $player && $board[2][2] == $player) ||
        ($board[0][2] == $player && $board[1][1] == $player && $board[2][0] == $player)
    ) {
        return true;
    }

    return false;
}

// Function to check for a draw
function checkDraw($board) {
    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 3; $col++) {
            if ($board[$row][$col] == ' ') {
                return false; // The game is not a draw
            }
        }
    }
    return true; // All cells are filled, and no one has won (a draw)
}

// Main game loop
while (true) {
    // Display the current board
    displayBoard($board);

    // Get the player's move
    echo "Player $player's turn. Enter row (0-2) and column (0-2): ";
    $row = intval(readline("Row: "));
    $col = intval(readline("Column: "));

    // Check if the selected cell is empty and within the board boundaries
    if ($row >= 0 && $row < 3 && $col >= 0 && $col < 3 && $board[$row][$col] == ' ') {
        // Make the move
        $board[$row][$col] = $player;

        // Check for a win
        if (checkWin($board, $player)) {
            $winner = $player;
            displayBoard($board);
            echo "Player $winner wins!\n";
            break;
        }

        // Check for a draw
        if (checkDraw($board)) {
            displayBoard($board);
            echo "It's a draw!\n";
            break;
        }

        // Switch to the other player
        $player = ($player === 'X') ? 'O' : 'X';
    } else {
        echo "Invalid move. Try again.\n";
    }
}
