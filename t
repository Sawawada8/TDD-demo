#!/bin/bash
docker run --rm -it -v $(PWD):/app --workdir /app php:latest ./vendor/bin/phpunit $@