<?php
include'QuadraticEquation.php';
$quadraticEquation = new QuadraticEquation(5,10,2);
echo 'He so thu nhat la : '. $quadraticEquation->geta(). '<br>';
echo 'He so thu hai la : '. $quadraticEquation->getb(). '<br>';
echo 'He so thu ba la : '. $quadraticEquation->getc(). '<br>';
echo 'Delta la : '. $quadraticEquation->getDiscriminant(). '<br>';
$quadraticEquation->calculate();

