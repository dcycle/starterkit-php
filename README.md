PHP Starterkit
=====

Meant to be used as a base for PHP projects.

Usage
-----

* Make sure the latest version of Docker is installed and running.
* Copy all of this code to your repo.
* Rename `myproject` to your project name everywhere if you want.

Running the test script, which lints files and runs unit tests, should result in no errors:

    ./scripts/test.sh

Features
-----

### Docker-based

You should be able to run this with only Docker, no other dependencies.

### Continuous integration

Uses CircleCI 2.0 integration: `./.circleci/config.yml` tells Circle CI to run `./scripts/test.sh` on every commit, resulting in the following badge which can be placed on the project homepage:

[![CircleCI](https://circleci.com/gh/dcycle/starterkit-php.svg?style=svg)](https://circleci.com/gh/dcycle/starterkit-php)

### Automated testing

Uses the [phpunit] image to run automated tests. To run automated tests, call `./scripts/unit-tests.sh`.  

### The singleton trait

In `./code/src/traits/Singleton.php`, you will find.

### App singleton

The App class uses the singleton trait, and is meant to be used like this:

    use myproject\App;
    ...
    App::instance()->doSomething();

### Linting

`./scripts/test.sh` calls `./scripts/lint-php.sh` and `./scripts/lint-sh.sh` which lints shell and php files.
