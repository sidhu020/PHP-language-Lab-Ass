<?php


//3. Write Program using Math Function


echo (abs(-7)."<br/>"); //7
echo (ceil(3.3)."<br/>"); //4
echo (floor(3.3)."<br/>"); //3
echo (sqrt(16)."<br/>"); //4 echo
(decbin(2)."<br/>");//10 echo
(dechex(10)."<br/>");//a echo
(bindec(10)."<br/>");// 2
$n1=10;
echo (base_convert($n1,10,2)."<br/>");// 1010
echo(round(1.6) ."<br/>");//2
$x = 7;
$y = 2;
echo(fmod($x,$y)."<br>");//1
echo min(4,14,3,5,14.2)."<br>";
echo max(4,14,3,5,14.2)."<br>";echo
pow (3, 2).'<br>';
echo rand()."<br>";
echo cos(3)."<br>";
echo acos(3)."<br>";
echo tan(3)."<br>";
echo atan(3)."<br>";
echo sin(1)."<br>";
echo asin(0)."<br>";
$nos=2;
echo "<br>"."By using 'is_finite()' Function :".is_finite($nos) ."<br>"; echo
"<br>"."By using 'is_infinite()' Function :".is_finite($nos) ."<br>";echo log(2)."<br>";
$degree=15;
echo "By using 'deg2rad()' function, your radian equivalent is :".deg2rad($degree);




/*

Output:-

7
4
3
4
1010
2
1
3
14.2
9
1810629514
-0.98999249660045
NAN
-0.14254654307428
1.2490457723983
0.8414709848079
0

By using 'is_finite()' Function :1

By using 'is_infinite()' Function :1
0.69314718055995
By using 'deg2rad()' function, your radian equivalent is :0.26179938779915


*/







?>