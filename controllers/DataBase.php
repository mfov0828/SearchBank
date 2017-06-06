<?php

    // datos para la coneccion a mysql
    define('DB_SERVER','localhost');
    define('DB_NAME','SearchBanck');
    define('DB_USER','root');
    define('DB_PASS','');
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con);
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

