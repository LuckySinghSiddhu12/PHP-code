<?php
function getFactorialofNumber($number){ 
    if($number <= 1){   
        return 1;   
    }   
    else{   
        return $number * getFactorialofNumber($number - 1);   
    }   
} 

echo "factorial of 6 is = ".getFactorialofNumber(6);
?>