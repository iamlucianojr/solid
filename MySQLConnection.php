<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/04/15
 * Time: 14:12
 */

namespace model;


class MySQLConnection implements DBConnectionInterface{

    public function connect()
    {
        return 'Database connection';
    }
}