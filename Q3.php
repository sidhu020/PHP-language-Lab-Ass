<!-- 3. Write program the simplest way to find the factorial of a number is by using a loop. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <?php

$fact = 4;

 for($i=1;$i<=4;++$i)

 {
    $fact*= $i;
 }
        echo"$fact";

?> -->

<?php
$num = 5;
$factorial = 1;
for ($x=$num; $x>=1; $x--)
{
  $factorial = $factorial * $x;
}
echo "Factorial of $num is $factorial";
?>

</body>
</html>