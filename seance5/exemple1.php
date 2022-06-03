<?php

require "classCircle.php";
require "classRectangle.php";

$circle = new Circle(2);
echo $circle->calcArea();

echo "<br>";

$rectangle = new Rectangle(10, 20);
echo $rectangle->calcArea();