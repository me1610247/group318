<?php
// calculate size of the box
function CalcBoxSize($length,$width){
    $size=$length*$width;
    return $size;
}
$height=20;
$result=CalcBoxSize($length=5,$width=10);
echo "size of the box is ". $result*$height;
echo '<br>';
echo '<hr>';
echo "or same solution by another way of code";
echo '<hr>';
echo '<br>';
/* 
or another solution if i can
*/
define("Length",5);
define("Width",10);
$Size=Length*Width*$height;
echo "size of the box is ". $Size;
// variable $height is common in the two way solutions

