<?php
require_once 'Ship.php';

$myShip = new Ship();

$myShip->setName( 'TIE FIGHTER');

echo '<hr  />';
echo 'Ship Description: ' . $myShip->getNameAndSpecs();
