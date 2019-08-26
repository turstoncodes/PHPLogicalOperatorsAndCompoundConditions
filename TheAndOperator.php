<?php
namespace Codecademy;

function clapYourHands($happiness, $know_it){
  if($happiness === TRUE && $know_it === TRUE){
    return "CLAP!";
  }else{
    return ":("; 
  }
}

echo clapYourHands(TRUE, TRUE);
echo "\n";
echo clapYourHands(TRUE, FALSE);