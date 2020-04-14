<?php
require_once 'class/connectionBase.php';
require_once 'class/user.php';

class userDataAccessObject extends connectionBase {

public function __construct(){
}

/**
 *Function: addUser()
 *Input:	User
 *Output:	String
 *
 *Example:
 *1. $userDataAccessObject->addUser();
 *		- calls the addUser method of the object userDataAccessObject.
 *    - requires for the User Object to be populated with data
 *    - returns empty when successful
 */
public function addUser(User $newUser) {
   $connection = $this->retrieveConnection();
   $query = "INSERT INTO `tbluser` (`Username`, `Password`,`EmailAddress`,`FirstName`,`LastName`) VALUES ('"
                                    . $newUser->getUsername() . "', '"
                                    . $newUser->getPassword() . "', '"
                                    . $newUser->getEmailAddress() . "', '"
                                    . $newUser->getFirstName() . "', '"
                                    . $newUser->getLastName() . "') ";
  $result = mysqli_query($connection, $query);
  echo $query;
  $error = (mysqli_error($connection));
  mysqli_close($connection);
  return $error;
}

/**
 *Function: searchUser()
 *Input:	User
 *Output:	String
 *
 *Example:
 *1. $userDataAccessObject->searchUser();
 *		- calls the searchUser method of the object userDataAccessObject.
 *    - requires for the User Object to be populated with data
 *    - returns userId when successful
 *    - returns -9 as string when error occured
 */
public function searchUser(User $oldUser) {
   $connection = $this->retrieveConnection();
   $query = "SELECT `password` FROM `tbluser` WHERE `username` = '" . $oldUser->getUsername() . "'" ;
   $result = mysqli_query($connection, $query);
   while($row = mysqli_fetch_row($result)){
     if ( password_verify($oldUser->getPassword().strtolower($oldUser->getUsername()),$row[0]) == 1){
       $query2 = "SELECT `id` FROM `tbluser` WHERE `username` = '" . $oldUser->getUsername() . "'" ;
       $result = mysqli_query($connection, $query2);
       while($row2 = mysqli_fetch_row($result)){
         return $row2[0].":".$row2[1];
       }
     }
   }
  return -9;
  mysqli_close($connection);
  }
}
?>
