<?php

declare(strict_types=1);

$sizeRhombus = 7;
$countStars = 1;
$spaceChar = '0';
$rhombusCHar = '*';

for ( $i = 1; $i <= round($sizeRhombus/2); $i++ )
{
    $countSpace = round($sizeRhombus/2) - $i;

    for ( $j = 0; $j < $countSpace; $j++ )
    {
        echo $spaceChar;
    }

    for ( $j = 0; $j < $countStars; $j++ )
    {
        echo $rhombusCHar;
    }

    for ( $j = 0; $j < $countSpace; $j++ )
    {
        echo $spaceChar;
    }

    echo PHP_EOL;

    $countStars = $countStars + 2;
}

$countStars = $countStars - 4;

for ( $i = round($sizeRhombus/2); $i > 1; $i-- )
{
    $countSpace = round($sizeRhombus/2) - $i + 1;

    for ( $j = 0; $j < $countSpace; $j++ )
    {
        echo $spaceChar;
    }

    for ( $j = 0; $j < $countStars; $j++ )
    {
        echo $rhombusCHar;
    }

    for ( $j = 0; $j < $countSpace; $j++ )
    {
        echo $spaceChar;
    }

    $countStars = $countStars - 2;

    echo PHP_EOL;
}

