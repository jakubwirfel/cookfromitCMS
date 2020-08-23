<?php
// Start Session
session_start();
//Errors empty
$errors = [];
//Config file
require_once 'config.php';

//Include Helpers
require_once 'helpers/system_helper.php';

//Autoloader
function __autoload($class_name) {
    require_once 'lib/'.$class_name. '.php';
}

//GetIP
$u_info = new UserInfo;
$ip = new IP;
$logs = new Logs;

$ip -> IpValidation($u_info -> get_ip());

if ($ip_exist == false) {
    $ip -> addIpAddr($u_info -> get_ip());
    $logs -> addLog(1, 1, "IP address: ".  $_SESSION['ip'] . " added to DB");
    unset($_SESSION['ip']);
}