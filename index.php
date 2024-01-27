<?php

require_once __DIR__ . '/src/Classes/Garden.php';
require_once __DIR__ . '/src/Classes/Tree.php';
require_once __DIR__ . '/src/Classes/Apple.php';

use Classes\Apple;
use Classes\Garden;
use Classes\Tree;

$garden = new Garden();

$apple1 = new Apple(10);
$apple2 = new Apple(20);


$tree1 = new Tree();
$tree1->addApple($apple1);
$garden->addTree($tree1);

$tree2 = new Tree();
$tree2->addApple($apple2);
$garden->addTree($tree2);

$garden->passDay(); // День 1
$garden->passDay(); // День 2
$garden->passDay(); // День 3

echo "Total apples in the garden: " . $garden->getApplesCount() . "\n";
