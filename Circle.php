<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/04/15
 * Time: 07:11
 */

namespace model;


class Circle implements ShapeInterface {

    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}