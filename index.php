<?php

require_once 'Garden.php';
require_once 'Tree.php';
require_once 'Apple.php';

$garden = new Garden();
$tree1 = new Tree();
$tree2 = new Tree();

$garden->addTree($tree1);
$garden->addTree($tree2);

$garden->passDay();
$garden->passDay();
$garden->passDay();

echo "Total apples in the garden: " . $garden->getApplesCount(); // Получить количество яблок в саду