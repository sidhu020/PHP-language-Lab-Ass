
<!-- A palindrome number is a number which remains same when its
digits are reversed. -->

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

function isPalindrome($num) {
    $original = (string) $num;
    $reverse = strrev($original);
    return $original == $reverse;
}


$num = 157;
if (isPalindrome($num)) {
    echo $num . " is a palindrome";
} else {
    echo $num . " is not a palindrome";
}

?>


</body>
</html>