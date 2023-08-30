<?php
$string="ErraSoft";
$splitString=chunk_split($string,2,"/");
$newSplit=substr_replace($splitString,"",-1);
echo $newSplit;