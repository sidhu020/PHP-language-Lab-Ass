<?php
/*
// 5. Write Program using Array Function

$cars=array("Volvo","BMW","Toyota");
echo count($cars);

$my_array = array("Dog","Cat","Horse");
list($a,$b,$c) = $my_array;
echo "i have several animals,a $a,a $b and a $c.";

$people = array("Peter", "Joe", "Glenn", "Cleveland");
/*if(in_array("Glenn".$people))
{
    echo "Match found";
}
else
{
    echo "Match not Found";
}*//*
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";

current($people) . "<br>";
echo next($people) ."<br>";
echo prev($people)."<br>";
echo end($people)."<br>";
print_r(echo($people));
$numbers=array(4,6,2,22,11);
sort($numbers);
$cars=array("Volvo","BMW","Toyota");
rsort($cars);
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43"); asort($age);
arsort($age);
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota"); print_r(array_reverse($a));
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$result=array_diff($a1,$a2); print_r($result);
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow"); print_r(array_merge_recursive($a1,$a2));
$a=array("a"=>"red","b"=>"green","c"=>"blue"); echo
array_shift($a);
print_r ($a);
$a=array("red","green","blue","yellow","brown"); print_r(array_slice($a,2));
$a=array("a"=>"red","b"=>"green","c"=>"red"); print_r(array_unique($a));
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue"); print_r($a);
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
{
echo "Key exists!";
}
else
{
echo "Key does not exist!";
}
$a=array("red","green");
array_push($a,"blue","yellow"); print_r($a);
$a=array("red","green","blue");
array_pop($a);
print_r($a);
$a=array("Dog","Cat","Horse","Bear","Zebra"); array_multisort($a);
print_r($a);
$a=array("a"=>"red","b"=>"green","c"=>"blue"); echo
array_search("red",$a);
*/

?>

<?php
$numbers = array(4, 2, 6, 1, 3, 5);

// Sort the array in ascending order
sort($numbers);

// Add an element to the end of the array
array_push($numbers, 7);

// Remove the last element from the array
array_pop($numbers);

// Find the index of the value '3' in the array
$index = array_search(3, $numbers);

// Create a new array with the values from index 2 to 4 of the original array
$slice = array_slice($numbers, 2, 3);

// Check if the value '2' exists in the array
$exists = in_array(2, $numbers);

// Reverse the order of the elements in the array
$reversed = array_reverse($numbers);

// Output the results
print_r($numbers);
print_r($slice);
echo "The index of '3' is $index.\n";
echo $exists ? "The value '2' exists in the array.\n" : "The value '2' does not exist in the array.\n";
print_r($reversed);
?>