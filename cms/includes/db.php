<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_host'] = '';
$db['db_host'] = 'cms';

foreach ($db as $key => $value){

    define(strtoupper($key), $value);

}

$connection = mysqli_connect('localhost','root','','cms');



?>