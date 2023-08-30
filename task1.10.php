<?php
// get word Eraasoft from the sentence and print it
$string="EraaSoft Learn by practice";
// explode used in split the string into arrays of words 
$str=explode(" ",$string);
$words=$str[0];
echo $words;
echo '<br>';
echo '<hr>';
// another way to print EraaSoft 
$wordstofind="EraaSoft";
if(strpos($string,$wordstofind)!==false){
    echo $wordstofind;
}
