<!-- 8. A number can be written in reverse order.
For example
12345 = 54321 -->


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
function reverseNumber($num) {
    $reverse = 0;
    while ($num > 0) {
        $remainder = $num % 10;
        $reverse = ($reverse * 10) + $remainder;
        $num = (int)($num / 10);
    }
    return $reverse;
}

$num = 45678;
echo "Original number: ".$num."\n";
echo "Reversed number: ".reverseNumber($num);
?>
</body>
</html>
