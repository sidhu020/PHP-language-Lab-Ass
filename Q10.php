
//PHP Lab Ass. 2 18/02/23

//2. Write Program using String Function




<?php
echo chr(52) . "<br>"; // Decimal valueecho
chr(052) . "<br>"; // Octal value echo
chr(0x52) . "<br>"; // Hex value echo
ord("h") . "<br>";
echo ord("hello") . "<br>";
echo strtolower("Hello WORLD.") . "<br>";
echo
    strtoupper("Hello WORLD.") . "<br>";
echo
    strlen("Hello World") . "<br>";
echo ltrim(" \n Hello World") . "<br>";
echo
    rtrim("Hello World \n ") . "<br>";
echo
    trim("Hello World") . "<br>";
echo
    substr("Hello world", 6) . "<br>";
echo
    substr("Hello world", 6, 3) . "<br>";
echo strcmp("Hello world!", "Hello world!") . "<br>";
echo
    strcmp("Hello world!", "Hello!") . "<br>";
echo strcasecmp("Hello world!", "Hello WORLD!") . "<br>";
$mystring = 'Hello PHP';
$findme = 'PHP';
$pos = strpos($mystring, $findme);
if
($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo
        "<br>";
    echo " and exists at position $pos" . "<br>";
}
echo strrpos("I love php, I love php too!", "php") . "<br>";
echo
    strstr("Hello world!", "WORLD") . "<br>";
echo stristr("Hello world!", "WORLD") . "<br>";
echo str_replace("world", "Mummy", "Hello world!") . "<br>";
echo strrev("hello") . "<br>";
print
    "Hello" . "<br>";
$str = "Hello world. It's a beautiful day.";
print_r(explode(" ", $str)) . "<br>";
echo "Befor using implode() function: array('Hello','PHP','Javatpoint')" . "<br>";
$arr = array('Hello', 'PHP', 'Javatpoint');
echo "After using 'implode()' function: " . implode("", $arr) . "<br>";
echo
    join("", $arr) . "<br>";
echo md5("bca") . "<br>";
$str = "Hello";
print_r(str_split($str, 3)) . "<br>";
$str = "Good morning";
echo "<br>" . str_shuffle($str) . "<br>";
echo
    strcspn($str, "m") . "<br>";
echo strpbrk($str, "m") . "<br>";
echo substr_compare("Hello world!", "Hello world!", 0) . "<br>"; // the two strings are equal echo
substr_compare("Hello world!", "Hello", 0) . "<br>"; // string1 is greater than string2 echo
substr_compare("Hello world!", "Hello world! Hello!", 0) . "<br>"; // str1 is less than str2 echo
substr_count("Hello world. The world is nice", "world") . "<br>";
echo ucfirst("good morning") . "<br>";
echo
    ucwords("good morning") . "<br>";
    
    ?>