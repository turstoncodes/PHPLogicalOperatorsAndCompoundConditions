<?php
namespace Codecademy;

function both($first, $second)
{
  if ($first){
    if ($second){
      return "both";
    } else {
      return "not both";
    }
  } else {
    return "not both";
  }
}

echo both(TRUE, TRUE);
echo "\n";
echo both(TRUE, FALSE);