<?php

if($_SERVER['SERVER_NAME'] == "localhost") {
    //za lokalni server
    define("ROOT", "http://localhost/hajrudinahmetovic.com/public");

    define ("DBDRIVER", "mysql");
    define ("DBHOST", "localhost");
    define ("DBUSER", "root");
    define ("DBPASS", "");
    define ("DBNAME", "hajrudinahmetovic_db");
} else{

    //za online server
    define("ROOT", "https://hajrudinahmetovic.com");

    define ("DBDRIVER", "mysql");
    define ("DBHOST", "localhost");
    define ("DBUSER", "root");
    define ("DBPASS", "");
    define ("DBNAME", "hajrudinahmetovic_db");
}


