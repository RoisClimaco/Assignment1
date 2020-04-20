<?php
/**
 *Author: Rolando Isaac Climaco
 *Date: 04/2020
 *Purpose: User class is to be used by the application for data handling
 */
  class User {
    private $userId;
    private $username;
    private $password;
    private $emailAddress;
    private $firstName;
    private $lastName;

    public function __construct(){

    }

    public function setUserId($userId){
      $this->userId = $userId;
    }

    public function getUserId(){
      return $this->userId;
    }

    public function setUsername($username){
      $this->username = $username;
    }

    public function getUsername(){
      return $this->username;
    }

    public function setPassword($password){
      $this->password = $password;
    }

    public function getPassword(){
      return $this->password;
    }

    public function setEmailAddress($emailAddress){
      $this->emailAddress = $emailAddress;
    }

    public function getEmailAddress(){
      return $this->emailAddress;
    }

    public function setFirstName($firstName){
      $this->firstName = $firstName;
    }

    public function getFirstName(){
      return $this->firstName;
    }

    public function setLastName($lastName){
      $this->lastName = $lastName;
    }

    public function getLastName(){
      return $this->lastName;
    }
}
 ?>
