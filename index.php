<?php 
 function checkNumber(int $var = null)
 {
     switch ($var) {
         case $var > 0:
             echo "Positive";
             break;

         case $var < 0:
             echo "Negative";
             break;

         default:
             echo "Neither positive nor negative";
     }
 }

?>