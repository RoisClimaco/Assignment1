<?php

class connectionBase {
private $host = "localhost";
private $userName  = "root";
private $userPassword  ="";
private $database = "dbwissystem";

  protected function retrieveConnection(){
    return mysqli_connect($this->host, $this->userName, $this->userPassword, $this->database);
  }
}
?>
