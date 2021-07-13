<?php
//time
$time = time();
echo date("Y/m/d/h:i:s",$time);
echo "\n";

//mktime
$time2 = mktime(12,16,0,3,23,2008);
echo date("Y/m/d/h:i:s",$time2);