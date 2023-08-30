<?php
// total of the two digits and mutliply by the thid
function Sumof3Digits($num1,$num2,$num3){
    $result=($num1+$num2)*$num3;
    return $result;
}
$total=Sumof3Digits(10,15,20);
echo "total sum is ".$total;