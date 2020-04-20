<?php
require_once 'class/validator.php';
require_once 'class/user.php';
require_once 'class/userDataAccessingObject.php';
require_once 'class/urlDirector.php';

/**
 *Author: Rolando Isaac Climaco
 *Date: 04/2020
 *Purpose: Registration Logic
 */
session_start();
$fields = $_POST;
if (!empty($_POST['lastname'])) {
  $validator = new Validator($_POST);
  $validationErrors = $validator->validateRegister();
  if (empty($validationErrors)) {
    $user = new User();
    $user->setUsername($fields['txtUsername']);
    $user->setEmailAddress($fields['txtEmail']);
    $user->setPassword(password_hash($fields['txtPassword'].strtolower($fields['txtUsername']),PASSWORD_DEFAULT));
    $user->setFirstName($fields['txtFirstname']);
    $user->setLastName($fields['txtLastname']);
    $dao = new userDataAccessObject();
    if (empty($dao->addUser($user))){
      header("Location: ".urlDirector::$loginURL);
    } else {
      $validationErrors['Register'] = 'Email Address already Taken.';
    }
  }
}

include 'default/headerbase.php';
if (!empty($_SESSION['user'])){
  include 'default/navbar_logged_in.php';
} else {
include 'default/navbar_default.php';
}
include 'ui/registerui.php';
include 'default/footer.php';
 ?>
