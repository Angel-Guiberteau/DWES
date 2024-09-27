
<?php 
    function factorial($z)
    {
        $total = 1;
        for ($j = 1; $j <= $z; $j++) {
            $total *= $j;
        }
        return $total;
    }

?>