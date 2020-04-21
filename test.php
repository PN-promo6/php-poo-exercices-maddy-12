<?php

require_once("autoload.php");
//Import des classes
use exo\Point;
use exo\AdvancedString;

//AdvancedString.php
$internalString = new AdvancedString("Maddy is me");

echo $internalString->bold();
echo $internalString->italic();
echo $internalString->underline();
echo $internalString->upperCase();

// Point.php
$p1 = new Point(0, 0);
$p2 = new Point(0, 5);

echo "P1:" . $p1;
echo "\n==============\n";
echo "P2:" . $p2;
echo "\n Distance p1 à p2: " . $p1->distance($p2);
