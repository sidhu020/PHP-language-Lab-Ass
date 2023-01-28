<!-- 7. Write program is Fibonacci series is the one in which you will get
your next term by adding previous two numbers.
 -->



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
function fibonacci($n) {
    $first = 0;
    $second = 1;
    echo "Fibonacci series: ";
    echo $first.' '.$second.' ';
    for ($i = 2; $i < $n; $i++) {
        $third = $first + $second;
        echo $third.' ';
        $first = $second;
        $second = $third;
    }
}

$n = 10;
fibonacci($n);
?>

</body>
</html>