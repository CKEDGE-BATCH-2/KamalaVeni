<!DOCTYPE html>
<html>
    <body>
        <h2>PHP program to calculate area of rectangle</h2>
        <?php
function rect_area($length =  9, $width =  8) 
{
    $area = $length * $width;
    echo "Area Of Rectangle with length " . $length . " & width" . $width . " is " . $area ;
}
rect_area(); 
?>
</body>
</html>