<?php
//EraaSoft Learn by practice
// get the length without spaces 
$sentence="EraaSoft Learn by practice";
$sentenceWithoutSpace=strlen(str_replace(' ','',$sentence));
echo "Length of ' EraaSoft Learn by practice ' without spaces is " . $sentenceWithoutSpace;