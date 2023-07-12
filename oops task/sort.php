<!DOCTYPE html>
<html>
    <body>
        <h2>Sorts an ordered integer array with the help of sort() function</h2>
        <?php
class array_sort
{
    protected $_asort;
    
    public function __construct(array $asort)
     {
        $this->_asort = $asort;
     }
    public function alhsort()
     {
        $sorted = $this->_asort;
        sort($sorted);
        return $sorted;
      }
}
$sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
print_r($sortarray->alhsort())."\n";
?>
</body>
</html>