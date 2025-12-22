<?php
 function e($value){
    return htmlspecialchars($value, ENT_QUOTES,'UTF-8');
 }

 function gen_alphabet(){
   $A = ord('A');
   $Z = ord('Z');
   $letters= [];

   for($i = $A; $i <= $Z; $i++){
      $letters[] = chr($i);
   }
   return $letters;
 }
?>