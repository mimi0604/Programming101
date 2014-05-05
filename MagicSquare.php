<?php 

/*
Problem 33 - Magic Square

Implement a function, called magic_square(matrix) that checks if the given array of arrays matrix is a magic square.

A magic square is a square matrix, where the numbers in each row, and in each column, and the numbers in the forward and backward main diagonals, all add up to the same number.
*/

function magic_square($matrix){

 //get matrix size
 $n = count($matrix);
 
 // check if square matrix
 if ($n != count($matrix[0])){
  return false;
 }
 
 // initialize the array sum
 for ($i = 0; $i <= 2 * $n + 1; $i++) {
    $sum[$i] = 0;
 }
 
 for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {

        // sum of rows    
    	$sum[$i] = $sum[$i] + $matrix[$i][$j];
        
		// sum of cols
		$sum[$n+$j] = $sum[$n+$j] + $matrix[$i][$j]; 
        
		// sum of 1st diagonal 	  
	    if ($i == $j) $sum[2*$n] = $sum[2*$n] + $matrix[$i][$j];
	    
		// sum of 2nd diagonal
		if (count($matrix) == $i+$j) $sum[2*$n+1] = $sum[2*$n+1] + $matrix[$i][$j];
    }
  }
  
  // compare sum values
  for ($i = 0; $i < 2 * $n; $i++) {
    if($sum[$i] != $sum[$i+1]) 
	  return false;
  }
  return true;
}
?>
