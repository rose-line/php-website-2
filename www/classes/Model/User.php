<?php

namespace Model;

class User
{
  public static function get()
  {
    return @$_SESSION["user"];
  }

  public static function register($login, $password)
  {
    \Dal\Dao::execute(
      "insert into User (login, pass) values (:login, :pass)",
      [
        "login" => $login,
        "pass" => \Utils\Crypto::hash($password)
      ]
    );
    $_SESSION["user"] = $login;
  }

  public static function login($login, $password)
  {
    $st = \Dal\Dao::execute(
      "select * from User where login = :login and pass = :pass",
      [
        "login" => $login,
        "pass" => \Utils\Crypto::hash($password)
      ]
    );

    if ($st->fetch() !== false) {
      $_SESSION["user"] = $login;
    }
  }

  public static function logout()
  {
    $_SESSION["user"] = null;
  }
}

session_start();
