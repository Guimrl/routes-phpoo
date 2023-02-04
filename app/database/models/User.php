<?php

namespace app\database\models;

use app\database\Connection;

class User
{
    public function fetch()
    {
        $connection = Connection::connect();


        dd($connection);
    }
}