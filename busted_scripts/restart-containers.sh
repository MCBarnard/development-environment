#!/bin/bash

COLOUR_RED=`tput setaf 1`
COLOUR_GREEN=`tput setaf 2`
COLOUR_DEFAULT=`tput sgr0`

echo "${COLOUR_GREEN}Restarting containers, should take about ${COLOUR_RED}8 mins${COLOUR_DEFAULT}"
docker-compose -v \
  && docker-compose build --no-cache \
  && docker-compose up -d \
  && docker-compose ps
echo "${COLOUR_RED}================================================${COLOUR_DEFAULT}"