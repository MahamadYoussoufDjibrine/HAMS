<?php

$database= new mysqli("localhost","root","","appointmentsdb");
if ($database->connect_error){
    die("Connection failed:  ".$database->connect_error);
}

?>