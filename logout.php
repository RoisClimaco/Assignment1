<?php
require_once 'class/urlDirector.php';
/**
 *Author: Rolando Isaac Climaco
 *Date: 04/2020
 *Purpose: Logout Logic
 */
session_start();
session_unset();
header("Location: ".urlDirector::$homeURL);
 ?>
