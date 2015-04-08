<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/04/15
 * Time: 13:52
 */

namespace model;


class Cuboid implements SolidShapeInterface, ShapeInterface, ManageShapeInterface {

    public function area()
    {
        // TODO: Implement area() method.
    }

    public function volume()
    {
        // TODO: Implement volume() method.
    }

    public function calculate()
    {
        return $this->area() + $this->volume();
    }

}