<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/04/15
 * Time: 14:13
 */

namespace model;


class PasswordReminder {
    private $dbConnection;

    function __construct(DBConnectionInterface $connection)
    {
        $this->dbConnection = $connection;
    }


}