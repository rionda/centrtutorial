#! /bin/sh

UPLOADHOST=rionda.to
UPLOADDIR=rionda.to/centrtutorial

rsync --rsh=ssh --verbose --compress --delete --recursive --copy-links --perms --no-o --no-g --chmod=F664 --chmod=D2775 website/ ${UPLOADHOST}:${UPLOADDIR}
