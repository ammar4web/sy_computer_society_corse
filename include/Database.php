<?php
class Database {

    public static function getInstance() {
        $con = new mysqli(DBServer,  DBUser, DBPass, DBName);
    // Check connection
    if ($con->connect_errno) 
        die ("Connection failed: " .
        "<br> error code: " . $con->connect_error . 
        "<br> error message: " . $con->connect_error ); 

        return  $con;
    }
}
