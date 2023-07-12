<!DOCTYPE html>
<html>
    <body>
        <h2>Construct & destruct methods using own concept</h2>
        <?php
        class name {
            function __construct() {
            echo "I'm a Teacher , ";
            $this->name = "Keerthi ";
        }
        function __destruct() {
            echo "I'm a Student " ;
            $this->name ="Vino";
        }
    }
$obj = new name();
?>
</body>
</html>