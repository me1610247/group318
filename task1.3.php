<?php
// convert hours into seconds
function ConvertToSeconds($hours){
    $Seconds=$hours*60*60;
    return $Seconds;
}
$sec=ConvertToSeconds(24);
echo "total number of seconds is ".$sec;