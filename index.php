<?php
/**
 *Author: Rolando Isaac Climaco
 *Date: 04/2020
 *Purpose: Homepage Logic
 */
require_once 'class/urlDirector.php';
session_start();

include 'default/headerbase.php';
if (!empty($_SESSION['user'])){
  include 'default/navbar_logged_in.php';
} else {
  include 'default/navbar_default.php';
}
include 'ui/homepageui.php';
include 'default/footer.php';
 ?>
