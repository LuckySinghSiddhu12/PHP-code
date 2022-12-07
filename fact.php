
<?php
function factorial($x) {
  if ($x == 0 || $x == 1)
    return 1;
  else 
    return $x*factorial($x-1);    
}

echo "18=  ".factorial(18)."\n";
echo "8 =  ".factorial(8)."\n";
?>

