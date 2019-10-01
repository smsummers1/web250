<?php

/*----------------------------------------------------
Week 4, Part 1 Arrays
-----------------------------------------------------*/
# Numerically indexed/keyed arrays
$coins = ['heads', 'tails'];
$moves = ['rock', 'paper', 'scissors'];
$strawLengths = [2, 2, 2, 2, 2, 2, 1];
$guesses = [];

# Print array values using keys
// echo $moves[0];
// echo $moves[1];
// echo $moves[2];
// echo $moves[3];

# Print entire array using PHP's built-in var_dump
// var_dump($moves);

# Randomly choose a move (rock, paper, or scissors)
$randomNumber = rand(0, 2);
// var_dump($moves[$randomNumber]);

# Refactor Piggy Bank code to arrays
$coinValues = [
    'pennies' => .01,
    'nickels' => .05,
    'dimes' => .10,
    'quarters' => .25,
    'halfDollars' => .50
];

$coinCounts = [
    'pennies' => 300,
    'nickels' => 5,
    'dimes' => 0,
    'quarters' => 125,
    'halfDollars' => 50,
];

# Get an array value using an associative key
//var_dump($coinValues['dimes']);

# Sort array by values
asort($coinCounts);

# Sort array by values in descending order
// arsort($coinCounts);

# Sort an array by keys
// krsort($coinCounts);

# Shuffle an array
// var_dump($cards);

# Multi-dimensional array
$coins = [
    'pennies' => [.01, 300],
    'nickels' => [.05, 5],
    'dimes' => [.10, 0],
    'quarters' => [.25, 125],
    'halfDollars' => [.50, 50]
];

$total = 0;
foreach ($coins as $coin => $info) {
    $total = $total + ($info[1] * $info[0]);
}

# Multi-dimensional array where the nested array is an associative array
$coins = [
    'pennies' => [
        'value' => .01,
        'count' => 300
    ],
    'nickels' => [
        'value' => .05,
        'count' => 5
    ],
    'dimes' => [
        'value' => .10,
        'count' => 0
    ],
    'quarters' => [
        'value' => .25,
        'count' => 125
    ],
    'halfDollars' => [
        'value' => .50,
        'count' => 50
    ]
];

$total = 0;
foreach ($coins as $coin => $info) {
    $total = $total + ($info['value'] * $info['count']);
}

//var_dump($total);

# "Draw" a card from the top of the deck
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);
// var_dump($cards);
// var_dump(array_pop($cards));
// var_dump($cards);

# Split the deck of cards amongst 2 players
$player1Cards = array_splice($cards, 0, 5);
$player2Cards = $cards;
//var_dump($player1Cards);
//var_dump($player2Cards);


/*----------------------------------------------------
Week 4, Part 2 Internal (built-in) functions
-----------------------------------------------------*/
# Misc function examples
//var_dump(date('F j Y'));
//var_dump(strtoupper('AbCDDDDD'));

$foo = 'Cat';
$newFoo = strtoupper($foo);

// var_dump($foo); # Cat
// var_dump($newFoo); # CAT

// var_dump(rand());
// var_dump(rand(0, 10));


/*----------------------------------------------------
Week 4, Part 3 Conditionals
-----------------------------------------------------*/
$coin = ['heads', 'tails'];

# Player's choice
$randomNumber = rand(0, 1);
$player1Choice = $coin[$randomNumber];

# Coin flip logic using conditionals
$randomNumber = rand(0, 1);
$flip = $coin[$randomNumber];

//var_dump(4 > 5); # False
//var_dump(6 > 5); # True;
//var_dump(6 == 9); # False;

if ($player1Choice == $flip) {
    //var_dump('Player 1 wins!');
} else {
    //var_dump('Player 1 lost :(');
}

# RPS Scissors logic using conditionals
$moves = ['rock', 'paper', 'scissors'];
$player1Move = $moves[rand(0, 2)];
$player2Move = $moves[rand(0, 2)];

// var_dump($player1Move);
// var_dump($player2Move);

if ($player1Move == $player2Move) {
    //var_dump('Tie');
} elseif ($player1Move == 'rock' and $player2Move == 'paper') {
    //var_dump('Player 2 wins');
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    //var_dump('Player 1 wins');
}
# ...etc...


/*----------------------------------------------------
Week 4, Part 4 Loops
-----------------------------------------------------*/
# Count from 0-10 using a foreach loop
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numbers as $key => $number) {
    //var_dump($number);
}

# Count from 0-10 using a for loop
for ($i = 0; $i <= 10; $i++) {
    //var_dump($i);
}

# Count from 0-10 using a while loop
$i = 0;
while ($i <= 10) {
    //var_dump($i);
    $i++;
}

# Example use of while loop in a number guessing game
$answer = 5;
$guess = null;

while ($guess != $answer) {
    $guess = rand(0, 10);
    //var_dump('Guess: ' . $guess);
}

/*
<ul>
    <?php foreach ($guesses as $key => $guess) { ?>
        <li><?php echo $guess; ?></li>
    <?php } ?>
</ul>
*/
