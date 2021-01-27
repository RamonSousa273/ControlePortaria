<?php
require_once("Conexao.php");

class Login extends DBConect
{

  protected $userName;
  protected $userPassword;
  protected $conect;

  function __construct($userNameReceived, $passwordReceived)
  {
    $this->userName = $userNameReceived;
    $this->userPassword = $passwordReceived;
    $this->conect = new DBConect;
    $this->conect = $this->conect->conectDB();
  }

  function validateUser(){

    $query = $this->conect->prepare('SELECT * FROM usuarios WHERE login=:login AND senha=:senha');
    $query->bindValue(':login', $this->userName);
    $query->bindValue(':senha', md5($this->userPassword));
    $query->execute();

    $linha = $query->fetch(PDO::FETCH_ASSOC);
    if ($linha['login'] == $this->userName && $linha['senha'] == md5($this->userPassword)) {
      return true;
    }else{
      return false;
    }
  }

}

 ?>
