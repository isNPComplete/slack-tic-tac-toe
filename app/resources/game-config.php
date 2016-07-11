<?php

return array(
    'boardExceptionMessage' => 'The board size is out of the allowed range. Please choose an odd board length in the range [3,99]. ',
    
    'playerNotInGameExceptionMessage' => 'Players in the game cannot make a move, but can look at the board and leaderboard.',
    
    'wrongTurnExceptionMessage' => 'Only the player whose turn it is can make a move.',
    
    'gameDoesNotExistExceptionMessage' => 'A game does not exist. Please make a new one with the \'play\' command.Type \'\\tic-tac-toe help\' for more info on commands.',
   
    'gameDoesExistExceptionMessage' => 'A game already exists. Please terminate the game by playing it out, using the \'resign\' command, or the \'tie\' command. Type \'\\tic-tac-toe help\' for more info on commands.',

    'boardImageName' => 'board.png',
);

?>
