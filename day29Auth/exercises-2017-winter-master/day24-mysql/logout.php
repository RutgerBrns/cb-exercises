<?php
session_start();
require_once './shared/database.php';
$_SESSION = array();
header('Location: index.php');
