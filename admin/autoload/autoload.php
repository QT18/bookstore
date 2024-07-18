<?php
session_start();
// require_once __DIR__. "/../../libraries/session.php";
require_once __DIR__. "/../../libraries/Database.php";
require_once __DIR__. "/../../libraries/Function.php";
require_once __DIR__. "/../../libraries/config_vnpay.php";
require_once __DIR__. "/../format/format.php";

$db = new Database;
define("ROOT", $_SERVER['DOCUMENT_ROOT'] ."/bookstore/public/uploads/"); 
?>