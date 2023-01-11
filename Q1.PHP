<!-- 1. Write program to list the first 15 prime numbers.Ouput: 2,3,5,7.......47 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?PHP

static $count;

for($i=1; $i<=50; $i++)
    {
        for($j=2; $j<$i; $j++)
        {
           if($i%$j==0)
           {
               $count++;
               break;
           }
        }
    if ($count == 0 && $i != 1) {
        echo ("$i\n");
    }
        $count = 0;
    }

?>


</body>
</html>