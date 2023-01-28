<!-- 9. Two numbers can be swapped or interchanged. It means first
number will become second and second number will become first.
For example
a = 20, b = 30
After swapping,
a = 30, b = 20 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$firstNumber = 20;
$secondNumber = 30;
echo "Original Numbers: " . $firstNumber . " " . $secondNumber . "\n";
swapNumbers($firstNumber, $secondNumber);
echo "Swapped Numbers: " . $firstNumber . " " . $secondNumber;
?>

</body>
</html>