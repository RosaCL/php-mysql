<?php
    declare(strict_types=1);


    function is_text($text, int $min = 0, int $max =1000):bool{
        $length =mb_strlen($text);
        return($length>=$min and $length<=$max);
    }




function is_number($number, int $min=0, int $max=100):bool{
    return ($number>=$min and $number <=$max);
}

?>