<?php
//find if word "by" found in the sentence or not
$string="EraaSoft Learn by practice";
$search="by";
if(strpos($string,$search)==true){
    echo "Word Found in the string";
}else{
    echo "Word can not be found";
}
