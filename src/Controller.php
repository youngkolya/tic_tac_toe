<?php
namespace youngkolya\tic_tac_toe\Controller;
use function youngkolya\tic_tac_toe\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>