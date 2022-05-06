#!/bin/bash
#
# Run unit tests.
#

docker run -v "$(pwd)":/app dcycle/phpunit:1 \
  --group myproject
