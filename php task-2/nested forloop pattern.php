<!DOCTYPE html>
<html>
    <body>
        <h2>Using nested for loop pattern</h2>
        <?php
        $n=5;
        for($i=1; $i<=$n; $i++)
        {
            for($j=1; $j<=$i; $j++)
            {
                echo ' * ';
            }
            echo '<br>';
        }
        for($i=$n; $i>=1; $i--)
        {
            for($j=1; $j<=$i; $j++)
            {
                echo ' * ';
            }
            echo '<br>';
        }
        ?>
        </body>
        </html>