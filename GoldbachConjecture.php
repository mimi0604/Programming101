<?php 

function goldbach($n){
$result = "";
for($i = 1; $i <= $n/2; $i++) {
  $j = $n - $i; 
  if(isPrime($i) && isPrime($j)){
      $result = $result . ", (" . $i . ", " . $j . ")";  
  }
 }
 $result = "[" . substr($result,2) . "]";
 
 return $result;
}


function isPrime($n) {

    if($n == 1)
        return false;
    if($n == 2)
        return true; 
    for($i = 2; $i <= ceil(sqrt($n)); $i++) {
        if($n % $i == 0)
            return false;
    }

    return true;
}
?>
