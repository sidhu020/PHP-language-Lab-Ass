<!-- 4. Write program an armstrong number is the one whose value is equal
to the sum of the cubes of its digits.
Hit:0, 1, 153, 371, 407, 471, etc are Armstrong numbers.
407 = (4*4*4) + (0*0*0) + (7*7*7)
= 64 + 0 + 343
407 = 407 -->

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
$armnum2=253;
$total3=0;
for($x3=$armnum2;$x3!=0;$x3=$x3/10)
{
$rem3=$x3%10;
$total3=$total3+$rem3*$rem3*$rem3;
}
if($armnum2==$total3)
{
echo "Yes, Number $armnum2 is an Armstrong number";
}
else
{
echo "No, Number $armnum2 it is not an armstrong number";
}
?>

</body>
</html>


<!-- OUTPUT


Yes, Number 407 is an Armstrong number

Yes, Number 153 is an Armstrong number

No, Number 253 it is not an armstrong number


-->