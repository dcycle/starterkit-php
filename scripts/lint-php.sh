#!/bin/bash
#
# Lint php files.
#

echo 'Linting php. To ignore certain lines, use'
echo '// @codingStandardsIgnoreStart'
echo '...'
echo '// @codingStandardsIgnoreEnd'

docker run --rm -v "$(pwd)":/code dcycle/php-lint:2 \
  --standard=DrupalPractice /code
docker run --rm -v "$(pwd)":/code dcycle/php-lint:2 \
  --standard=Drupal /code
