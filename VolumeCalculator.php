<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/04/15
 * Time: 13:43
 */

namespace model;


class VolumeCalculator extends AreaCalculator {
    function __construct($shapes = array())
    {
        parent::__construct($shapes);
    }

    function sum() {
        return array($summedData);
    }

}