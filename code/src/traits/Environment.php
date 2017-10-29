<?php

namespace myproject\traits;

/**
 * Wrapper around elements external to the application logic.
 */
trait Environment {

  /**
   * Mockable wrapper around getenv().
   */
  public function getEnv($name) {
    return getenv($name);
  }

  /**
   * Mockable wrapper around scandir().
   */
  public function scanDir($directory) {
    $return = @scandir($directory);
    if (!is_array($return)) {
      throw new \Exception('Could not scan directory ' . $directory);
    }
    return $return;
  }

  /**
   * Mockable wrapper around print().
   */
  public function print($string) {
    print($string);
  }

}
