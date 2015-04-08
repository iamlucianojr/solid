<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/04/15
 * Time: 07:17
 */

namespace model;


class AreaCalculator {
    protected $shapes;

    function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum() {
        foreach ($this->shapes as $shape) {
            if (is_a($shape, 'ManageShapeInterface')) {
                $area[] = $shape->calculate();
                continue;
            }

            throw new AreaCalculatorInvalidShapeException();
        }

        return array_sum($area);
    }

}