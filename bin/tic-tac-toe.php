<?php
    $autoLoadGit = __DIR__.'/../vendor/autoload.php';
    $autoLoadPackgaist = __DIR__.'/../../../autoload.php';

    if(file_exists($autoLoadGit)){
        require_once($autoLoadGit);
    } else {require_once($autoLoadPackgaist);}

    use function youngkolya\tic_tac_toe\Controller\showGame;
    startGame();
?>