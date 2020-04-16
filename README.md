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

Uses the [phpunit](https://hub.docker.com/r/phpunit/phpunit) image to run automated tests. To run automated tests, call `./scripts/unit-tests.sh`.  

### The singleton trait

In `./code/src/traits/Singleton.php`, you will find.

### App singleton

The App class uses the singleton trait, and is meant to be used like this:

    use myproject\App;
    ...
    App::instance()->doSomething();

### Environment trait

Classes that wish to interact with their environment yet remain testable can use the `Environment` trait. Code and test examples are provided.

### Entrypoint

We are providing an entrypoint in the form of a procedural code file; you can use this as a starting point for what to insert in your own code. We have added very simple, useless functionality to demonstrate how this works. The code below will output the square root of the number of files in a given directory which is an environment variable:

    docker run -v "$(pwd)":/app \
      -e DIRECTORY=/var php:7 /bin/bash -c 'php /app/run.php'
    # 3.605551275464

### Linting

`./scripts/test.sh` calls `./scripts/lint-php.sh` and `./scripts/lint-sh.sh` which lints shell and php files.
