<!DOCTYPE html>
<html>
    <body>
        <h2>Using If and Foreach</h2>
<?php
function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
$name = "mam";
if (palindrome($name)) {
    echo "It is a Palindrome<br>";
}
else {
    echo "It is not a palindrome";
}
$palindrome = array('tenet','car','racecar','mother','level'); 
foreach($palindrome as $val){
    if (strrev($val) == $val){   
		echo $val." is a Palindrome.<br>";   
	}  
	else {   
		echo $val." is not a Palindrome.<br>";   
	} 
}
?>
</body>
</html>