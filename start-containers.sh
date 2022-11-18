#!/bin/bash

COLOUR_RED=`tput setaf 1`
COLOUR_GREEN=`tput setaf 2`
COLOUR_DEFAULT=`tput sgr0`

echo "${COLOUR_GREEN}Starting containers, should take about ${COLOUR_RED}8 mins${COLOUR_DEFAULT}"
dc build --no-cache \
  && dc up -d \
  && dc ps
echo "${COLOUR_RED}================================================${COLOUR_DEFAULT}"