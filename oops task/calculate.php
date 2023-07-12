<!DOCTYPE html>
<html>
    <body>
        <h2>Calculator and perform all the functions using access modifier</h2>
        <?php
        class Calculator{
            private $_kavi,$_abi;
            public function __construct( $kavi, $abi ) {
                $this->_kavi=$kavi;
                $this->_abi=$abi;
            }
            public function add(){
                return $this->_kavi+$this->_abi;
            }
            public function subtract() {
                return $this->_kavi- $this->_abi;
            }
            public function multiply() {
                return $this->_kavi* $this->_abi;
            }
            public function divide() {
                return $this->_kavi/ $this->_abi;
            }
        }
        $calc = new Calculator(15, 50); 
        echo $calc-> add()."<br>"; 
        echo $calc-> multiply()."<br>"; 
        echo $calc-> subtract()."<br>"; 
        echo $calc-> divide()."<br>"; 
        ?>
        </body>
    </html>