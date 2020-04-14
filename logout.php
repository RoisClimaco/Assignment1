<?php
require_once 'class/urlDirector.php';
session_start();
session_unset();
header("Location: ".urlDirector::$homeURL);
 ?>
