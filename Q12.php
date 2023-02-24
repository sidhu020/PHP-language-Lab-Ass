<?php

//4. Write Program using Date Function


echo "Today is " . date("Y/m/d") ."<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
print_r(getdate()). "<br>";
var_dump(checkdate(12,31,-400)); echo
"<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
echo "<br>";
$t=time(); echo($t.
"<br>");
echo(date("Y-m-d",$t));
echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975));echo "<br>";
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days")); echo
date_format($date,"Y-m-d");
echo "<br>";
$date=date_create("2013-03-15 23:40:00",timezone_open("Europe/Oslo")); echo
date_format($date,"Y/m/d H:iP");
echo "<br>";
echo(strftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,98))."<br>");setlocale(LC_ALL,"hu_HU.UTF8");
echo(strftime("%Y. %B %d. %A. %X %Z"));echo
'<br>';
echo(strtotime("now") . "<br>");
echo(strtotime("3 October 2005")."<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("+1 week") . "<br>");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");echo(strtotime("next
Monday") . "<br>");
echo(strtotime("last Sunday"));
echo "<br>";
print_r(gettimeofday());
echo "<br>";
echo gettimeofday(true);


/*

Output:-


Today is 2023/02/24
Today is 2023.02.24
Today is 2023-02-24
Today is Friday
Array ( [seconds] => 35 [minutes] => 37 [hours] => 13 [mday] => 24 [wday] => 5 [mon] => 2 [year] => 2023 [yday] => 54 [weekday] => Friday [month] => February [0] => 1677242255 ) bool(false)
bool(false)
bool(true)
1677242255
2023-02-24Oct 3, 1975 was on a Friday
2013-04-24
2013/03/15 23:40+01:00
December 31 1998, 20:00:00 India Standard Time
2023. February 24. Friday. 13:37:35 India Standard Time
1677242255
1128290400
1677260255
1677847055
1678131460

1676761200
Array ( [sec] => 1677242255 [usec] => 865489 [minuteswest] => -60 [dsttime] => 0 )
1677242255.8655


*/


?>