<?php
/**
 *Author: Rolando Isaac Climaco
 *Date: 04/2020
 *Purpose: Connection base will be called by files that requires interaction with the database
 */
class connectionBase {
private $host = "localhost";
private $userName = "root";
private $userPassword = "";
private $database = "dbwissystem";

  protected function retrieveConnection() {
    return mysqli_connect($this->host, $this->userName, $this->userPassword, $this->database);
  }
}
?>
