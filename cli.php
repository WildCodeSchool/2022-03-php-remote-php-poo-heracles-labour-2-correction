<?php

require 'src/Fighter.php';

$hercules = new Fighter('đ§ Hercules', 20, 6);
$lion = new Fighter('đĻ Lion de NÃŠmÃŠe', 11, 13);

$i = 1;

while ($hercules->isAlive() && $lion->isAlive()) {
    echo 'đ Round #' . $i . PHP_EOL;

    $hercules->fight($lion);
    echo $hercules->getName() . ' đĄī¸  ' . $lion->getName();
    echo ' đ ' . $lion->getName() . ': ' .  $lion->getLife() . PHP_EOL;
    $lion->fight($hercules);
    echo $lion->getName() . ' đĄī¸  ' . $hercules->getName();
    echo ' đ ' . $hercules->getName() . ': ' .  $hercules->getLife() . PHP_EOL;
    $i++;
}

if (!$hercules->isAlive()) {
    $winner = $lion;
    $loser = $hercules;
} else {
    $winner = $hercules;
    $loser = $lion;
}

echo PHP_EOL;
echo 'đ ' . $loser->getName() . ' is dead' . PHP_EOL;
echo 'đ ' . $winner->getName() . ' wins (đ ' . $winner->getLife() . ')' .  PHP_EOL;
