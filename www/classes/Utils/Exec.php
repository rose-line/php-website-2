<?php

namespace Utils;

class Exec
{
  public static function cmd($cmd, ...$args)
  {
    $cmdline = $cmd . " " . implode(" ", $args);
    $escaped = escapeshellcmd($cmdline);
    error_log($escaped);

    return shell_exec($escaped);
  }
}
