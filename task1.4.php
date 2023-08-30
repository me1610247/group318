<?php
// area of triangle
function calcAreaofTriangle($base,$height){
    $area=0.5*$base*$height;
    return $area;
}

$base=5;
$height=10;
$result=calcAreaofTriangle($base,$height);
echo "Area of Triangle is ". $result;
