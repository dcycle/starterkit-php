<?php

namespace myproject;

use myproject\traits\Singleton;

/**
 * Encapsulated code for the application.
 */
class App {

  use Singleton;

  /**
   * Returns the square root of a number.
   *
   * This is added to show an example of how the associated test code
   * (see ./code/test/AppTest.php) works.
   *
   * @param float $a
   *   The number whose square root we want to get.
   *
   * @return float
   *   The square root.
   *
   * @throws \Exception
   */
  public function squareRoot(float $a) : float {
    if ($a < 0) {
      throw new \Exception('No square root for negative numbers.');
    }
    return sqrt($a);
  }

}
