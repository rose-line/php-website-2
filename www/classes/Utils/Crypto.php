<?php

namespace Utils;

class Crypto
{
  public static function hash($password, $salt = "A1D0C6E83F027327D8461063F4AC58A6")
  {
    return \Utils\Exec::cmd("/www/vernam", $password, $salt);
  }
}
