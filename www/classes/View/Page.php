<?php

namespace View;

class Page
{
  public function __construct($title)
  {
    include __DIR__ . DIRECTORY_SEPARATOR . "headers.php";
  }

  public function __destruct()
  {
    include __DIR__ . DIRECTORY_SEPARATOR . "footers.php";
  }

  public static function redirect($url)
  {
    http_response_code(302);
    header('Location: ' . $url);
    exit(0);
  }
}
