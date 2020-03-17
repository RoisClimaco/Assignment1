<?php
require_once 'class/validator.php';
require_once 'class/user.php';
require_once 'class/userDataAccessingObject.php';

session_start();
$fields = $_POST;
if (!empty($_POST['lastname'])) {
  $validator = new Validator($_POST);
  $validationErrors = $validator->validateRegister();
  if (empty($validationErrors)) {
    $user = new User();
    $user->setUsername($fields['username']);
    $user->setEmailAddress($fields['email']);
    $user->setPassword(password_hash($fields['password'].strtolower($fields['username']),PASSWORD_DEFAULT));
    $user->setFirstName($fields['firstname']);
    $user->setLastName($fields['lastname']);
    $dao = new userDataAccessObject();
    if (empty($dao->addUser($user))){
      header("Location: index.php");
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
