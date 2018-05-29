<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["us-cdbr-iron-east-04.cleardb.net"];
$username = $url["bb7e611f8b5400"];
$password = $url["6dde10b4"];
$db = substr($url["ikingdom"], 1);

$db['default']['hostname'] =$cleardb_server;
$db['default']['username'] =$cleardb_username;
$db['default']['password'] =$cleardb_password;
$db['default']['database'] =$cleardb_db;




$con = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bb7e611f8b5400","6dde10b4","ikingdom"); ?>
