<?php

class Connection
{

    public function get_connection()
    {
        $connection = new mysqli("localhost", "root", "", "laundry");
        return $connection;
    }
}
