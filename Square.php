<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/04/15
 * Time: 07:15
 */

namespace model;


class Square implements ShapeInterface, ManageShapeInterface {
    public $length;

    function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }

    public function calculate()
    {
        return $this->area();
    }

}