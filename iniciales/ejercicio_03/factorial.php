
<?php 
    function factorial($i)
    {
        $total = 1;
        for ($j = 1; $j <= $i; $j++) {
            $total *= $j;
        }
        return $total;
    }

?>