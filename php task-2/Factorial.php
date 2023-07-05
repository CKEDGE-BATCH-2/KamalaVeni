<!DOCTYPE html>
<html>
    <body>
        <h2>Factorial program using for loop</h2>
<?php  
$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>  
</body>
</html>