<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$db['default']['hostname'] =$cleardb_server;
$db['default']['username'] =$cleardb_username;
$db['default']['password'] =$cleardb_password;
$db['default']['database'] =$cleardb_db;




$con = mysqli_connect("127.0.0.1:50264","azure","6#vWHD_$","ikingdom"); ?>
