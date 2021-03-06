<?php

/**
 * @file
 * Test Environment.
 */

use myproject\traits\Environment;
use PHPUnit\Framework\TestCase;

/**
 * Dummy object using Environment for testing.
 */
// @codingStandardsIgnoreStart
class EnvironmentObject {
  use Environment;

}
// @codingStandardsIgnoreEnd

/**
 * Test Environment.
 *
 * @group myproject
 */
class EnvironmentTest extends TestCase {

  /**
   * Smoke test for the environment trait.
   *
   * We cannot test the methods because they are wrappers for environment
   * functions. However, just making sure creating an object of the class
   * which uses Environment will confirm that it does not break anything.
   */
  public function testSmokeTest() {
    $this->assertTrue(is_object(new EnvironmentObject()));
  }

}
