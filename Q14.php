<?php
//6. Write Program using File handling Function.

$file = fopen("test.txt","r");
$file = fopen("/home/test/test.txt","r");
$file = fopen("/home/test/test.gif","wb");
$file = fopen("http://www.example.com/","r");
$file = fopen("ftp://user:password@example.com/test.txt","w");
?>

<?php
$file = fopen("test.txt","r");
fread($file,"10"); fclose($file);
?>

<?php
$file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!");fclose($file);
?>

<?php
$fp = fopen('data.txt', 'w');//opens file in write-only
modefwrite ($fp,'welcome ');
fwrite($fp, 'to php file write');
fclose($fp);
echo "File written successfully";
?>

<?php
$file = fopen("test.txt","r");
//some code to be executed
fclose($file);
?>

<?php
echo file_exists("test.txt");
?>

<?php
$file = "test.txt";
if(is_readable($file))
{
echo ("$file is readable");
}
else
{
echo ("$file is not readable");
}
?>

<?php
$file = "test.txt";
if(is_writable($file))
{
echo ("$file is writeable");
}
else
{
echo ("$file is not writeable");
}
?>

<?php
$file = fopen("test.txt","r");echo
fgets($file); fclose($file);
?>




?>