<?php
// task 12 concatenate two strings
$string_one = "Eraa";
$string_two = "Soft";
$Full_string= $string_one.$string_two;
echo $Full_string;
echo '<br>';
// another way to concatenate two strings or more
$new=array($string_one,$string_two);
echo join($new);
echo '<br>';
// task 13 compare the fullstring in task 12 with string "EraaSoft"
$compare=strcmp($Full_string,"EraaSoft");
echo "Result of comparing the two strings is ". $compare;
