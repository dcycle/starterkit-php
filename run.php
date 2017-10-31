<?php

/**
 * @file
 * Example entrypoint for our application.
 */

require_once 'autoload.php';

use myproject\App;

App::instance()->printSquareRootOfNumberOfFilesInDirectory();
