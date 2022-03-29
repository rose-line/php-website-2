<?php

namespace Dal;

use \PDO;

class Dao
{

  /* Database credentials */
  private static $hostname = "localhost";
  private static $username = "dev";
  private static $password = "azerty321";
  private static $database = "blog";

  /* Global PDO Instance */
  private static $instance;

  public static function getInstance()
  {

    if (!isset(self::$instance)) {
      self::$instance = new PDO(
        "mysql" .
          ":dbname=" . self::$database .
          ";host="   . self::$hostname,
        self::$username,
        self::$password,
        [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
      );
    }

    return self::$instance;
  }

  /* Helpers */
  public static function execute($request, $params = [])
  {
    $pdo = self::getInstance();
    $st = $pdo->prepare($request);
    $st->execute($params);
    return $st;
  }

  public static function lastInsertId()
  {
    $pdo = self::getInstance();
    return $pdo->lastInsertId();
  }
}
