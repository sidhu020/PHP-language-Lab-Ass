2. Write Program using Variable Function

<?php

//gettype()

echo '<br>';
echo '<br>';
echo gettype(102) . '<br>';
echo
    gettype(true) . '<br>';
echo
    gettype(' ') . '<br>';
echo
    gettype(null) . '<br>';
echo
    gettype(array()) . '<br>';
echo gettype(new stdclass());


/*
output:-
integer
boolean
string
NULL
array
object
*/
?>


<?php

//settype()

$var1 = '98';
$var2 = '01';
settype($var1, "integer");
settype($var2, "integer");
echo '<br>';
echo '<br>';
echo ($var1 . '<br>');
echo ($var2 . '<br>');
echo ($var1 + $var2 . '<br>');
echo '<br>';


/*
Output:-
98
1
99
*/
?>

<?php

//Isset()

$var1 = 'test';
var_dump(isset($var1));
echo '<br>';
echo '<br>';

/*
output:-
bool(true)
*/

?>

<?php

//Unset()

$xyz = 'w3resource.com';
echo 'befor using unset() the value of $xyz is :' . $xyz . '<br>';
unset($xyz);
echo 'After using unset() the value of $xyz is :' . $xyz . '<br>';

echo '<br>';

/*
Output:-
befor using unset() the value of $xyz is :w3resource.com
After using unset() the value of $xyz is :
*/
?>


<?php
//strval()
$var_name = 22.110;
echo strval($var_name);
echo '<br>';
echo '<br>';

/*Output:
22.11*/
?>


<?php

//floatval()


$var_name1 = "122.00,50";
$var_name2 = "122.00";
$var_name3 = "122.50";
$var_name4 = "122,50";
$var_name5 = "122 50";
$var_name6 = "0.50";
$var_name7 = "0,50";
$var_name8 = "-122.50";
$var_name9 = "-122,50";
$var_name10 = "-122 50";
echo floatval($var_name1) . "<br>";
echo
    floatval($var_name2) . "<br>";
echo
    floatval($var_name3) . "<br>";
echo
    floatval($var_name4) . "<br>";
echo
    floatval($var_name5) . "<br>";
echo
    floatval($var_name6) . "<br>";
echo
    floatval($var_name7) . "<br>";
echo
    floatval($var_name8) . "<br>";
echo
    floatval($var_name9) . "<br>";
echo
    floatval($var_name10) . "<br><br><br>";



/*
Output:
122
122
122.5
122
122
0.5
0
-122.5
-122
-122
*/

?>



<?php

// floatval()

echo intval(102) . '<br>';
echo
    intval(102.22) . '<br>';
echo
    intval('102') . '<br>';
echo
    intval(+102) . '<br>';
echo
    intval(-102) . '<br>';
echo
    intval(0102) . '<br>';
echo
    intval('0002') . '<br>';
echo
    intval(1e20) . '<br>';
echo
    intval(0x1B) . '<br>';
echo intval(10200000) . '<br>';
echo intval(10200000000000000000) . '<br>';
echo intval(10, 2) . '<br>';
echo intval('10', 2) . '<br><br><br><br>';



/*
Output:-
102
102
102
102
-102
66
2
7766279631452241920
27
10200000
-8246744073709551616
10
2
*/
?>



<?php

//print_r()

$var1 = 'abc';
$var2 = 123.33;
print_r($var1);
echo '<br>';
print_r($var2);
echo '<br>';
$abc =
    array('Subj1' => 'Physics', 'Subj2' => 'Chemistry', 'Subj3' => 'Mathematics', 'Class' => array(5, 6, 7, 8));
print_r($abc);



/*
Output:-
abc
123.33
Array ( [Subj1] => Physics [Subj2] => Chemistry [Subj3] => Mathematics [Class] => Array ( [0] => 5 [1] => 6 [2] => 7 [3] => 8 ) )
*/
?>