#!/bin/bash
#
# Run all tests and linting.
#

set -e

./scripts/lint-php.sh
./scripts/lint-sh.sh
./scripts/unit-tests.sh

docker run -v "$(pwd)":/app \
  -e DIRECTORY=/var php:8-alpine /bin/sh -c 'php /app/run.php'
