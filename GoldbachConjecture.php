<?php 

/*
Problem 32 - Goldbach Conjecture

Implement a function, called goldbach(n) which returns a list of tupples, that is the goldbach conjecture for the given number n

The Goldbach Conjecture states:

Every even integer greater than 2 can be expressed as the sum of two primes.
Keep in mind that there can be more than one combination of two primes, that sums up to the given number.

The result should be sorted by the first item in the tuple.
*/

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
