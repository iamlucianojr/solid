<?php
use model\AreaCalculator;
use model\Circle;
use model\Square;
use model\SumCalculatorOutputter;

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6)
];

$areas = new AreaCalculator($shapes);
$output = new SumCalculatorOutputter($areas);
$output->HAML();
$output->HTML();
$output->JADE();
$output->JSON();