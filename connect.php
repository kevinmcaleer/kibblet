<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$username = 'postgres';
$password = 'postgres';
$db = 'kibblet';
$server = 'localhost';

$connection = "username='$username', password='$password',database='$db',host='$server'" ;

pg_connect($connection);
?>
