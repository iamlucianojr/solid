<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/04/15
 * Time: 14:11
 */

namespace model;


interface DBConnectionInterface {
    public function connect();
}