#!/bin/bash
if [$# -ne 1];
then
  echo "Usage: $0 test.txt";
  exit -1
fi

filename=$1
egrep -o "\b[[:alpha:]]+\b $filename | \

awk '{ count[$0]++ }
END {printf("%-14s%s\n","word","count") ;
for(ind in count)
{printf("%14-s%d\n",ind,count[ind]); }}'
