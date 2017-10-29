<?php

/**
 * @file
 * Test App.
 */

use PHPUnit\Framework\TestCase;
use myproject\App;

/**
 * Test App.
 *
 * @group myproject
 */
class AppTest extends TestCase {

  /**
   * Test for squareRoot().
   *
   * @param string $message
   *   The test message.
   * @param float $input
   *   The input.
   * @param string $exception
   *   The exception class expected or an empty string if no exception is
   *   expected.
   * @param float $expected
   *   The expected result; ignored if an exception is expected.
   *
   * @cover ::squareRoot
   * @dataProvider providerSquareRoot
   */
  public function testSquareRoot(string $message, float $input, string $exception, float $expected = 0) {
    $object = $this->getMockBuilder(App::class)
      // NULL = no methods are mocked.
      ->setMethods(NULL)
      ->disableOriginalConstructor()
      ->getMock();

    if ($exception) {
      $this->expectException($exception);
    }
    $output = $object->squareRoot($input);
    $this->assertTrue(round($output, 5) == round($expected, 5), $message);
  }

  /**
   * Provider for testSquareRoot().
   */
  public function providerSquareRoot() {
    return [
      [
        'Negative number throws exception',
        -1,
        '\Exception',
      ],
      [
        'Square root of zero is zero',
        0,
        '',
        0,
      ],
      [
        'Positive int works as expected',
        9,
        '',
        3,
      ],
      [
        'Non-int result works as expected',
        10,
        '',
        3.1622776601684,
      ],
    ];
  }

}
