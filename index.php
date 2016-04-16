<?php

/*
 * HOW IT WORKS !
 */

include ("autoloader.php");

$numbers = range(1, 10000);

$progressBar = new \Core\GeneralProgressBarCreator($numbers);

foreach ($numbers as $number)
{
    $progressBar->load();
}

