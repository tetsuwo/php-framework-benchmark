#!/bin/sh

php symfony cc
chmod o+w cache/ log/
chmod -R o+w cache/*
