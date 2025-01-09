<?php

include_once "../utils/autoloader.php";


$myFormule1 = new Formule1();

echo $myFormule1->drive();
$myFormule1->shiftGear(10);
echo "<br>";
echo $myFormule1->drive();
$myFormule1->shiftGear(14);
echo "<br>";
echo $myFormule1->drive();
$myFormule1->shiftGear(1000);
echo "<br>";
echo $myFormule1->drive();
$myFormule1->shiftGear(20);
echo "<br>";
echo $myFormule1->drive();
