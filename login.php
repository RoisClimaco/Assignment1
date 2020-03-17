<?php
require_once 'class/validator.php';
require_once 'class/user.php';
require_once 'class/userDataAccessingObject.php';

session_start();
$fields = $_POST;
if (!empty($_POST['log_username'])) {
  //$validator = new Validator($_POST);
  //$validationErrors = $validator->validateLogin();

  if (empty($validationErrors)) {
    $user = new User();
    $user->setUsername($fields['log_username']);
    $user->setPassword($fields['log_password']);
    $dao = new userDataAccessObject();
    $temp = explode(":", $dao->searchUser($user));
    $id = $temp[0];
    if ($id != -9){
      $user->setPassword("");
      $user->setUserId($id);
      $_SESSION['user'] = $user;
      header('Location: index.php');
    } else {
      echo '<div class="alert alert-dismissible alert-danger">';
      echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      echo '<strong>Oh snap!</strong> Incorrect Credentials inputted.';
      echo '</div>';
    }
  }
}

include 'default/headerbase.php';
if (!empty($_SESSION['user'])){
  include 'default/navbar_logged_in.php';
} else {
include 'default/navbar_default.php';
}
include 'ui/loginui.php';
include 'default/footer.php';
 ?>
