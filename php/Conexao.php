<?php

class DBConect
{
  protected $host = "localhost";
  protected $dbName = "controleportaria";
  protected $user = "root";
  protected $password = "";

  function conectDB(){
    return $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->password);
  }
}
?>
