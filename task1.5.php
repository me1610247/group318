<?php
// convert age in days
function ConvertAgeinDays($years){
    $days=$years*365;
    return $days;
}
$years=22;
$result=ConvertAgeinDays($years);
echo "my age in days is ".$result;