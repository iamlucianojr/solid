<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/04/15
 * Time: 07:21
 */

namespace model;


class SumCalculatorOutputter {
    protected $calculator;

    function __construct(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function JSON() {
        $data = array(
            'sum' => $this->calculator->sum()
        );

        return json_encode($data);
    }

    public function HTML() {
        return implode('', array(
            '<h1>',
                'Sum of the areas of provided shapes: ',
                $this->calculator->sum(),
            '</h1>'
        ));
    }

    public function HAML() {}

    public function JADE() {}
}