<?php 

/*
Problem 27 - Reduce file path

A file path in a Unix OS looks like this - /home/radorado/code/hackbulgaria/week0

We start from the root - / and we navigate to the destination fodler.

But there is a problem - if we have .. and . in our file path, it's not clear where we are going to end up.

.. means to go back one directory
. means to stay in the same directory
we can have more then one / between the directories - /home//code
So for example : /home//radorado/code/./hackbulgaria/week0/../ reduces to /home/radorado/code/hackbulgaria

Implement a function, called reduce_file_path(path) which takes a string and returns the reduced version of the path.

Every .. means that we have to go one directory back
Every . means that we are staying in the same directory
Every extra / is unnecessary
Always remove the last /
*/

function reduce_file_path($path){

  //Every .. means that we have to go one directory back 
   $path = preg_replace("/\/[a-zA-Z0-9_-]*\/\.\./","",$path);
  
  //Every . means that we are staying in the same directory
  $path = preg_replace("/\/\./","",$path);
  
  //Every extra / is unnecessary
  $path = preg_replace("/\/\/+/","/",$path);
  
  //Always remove the last /
  $path = preg_replace("/\/$/","",$path);
  
  //If the path is empty add the root
  $path = preg_replace("/^$/","/",$path);
  
  return $path;
}

?>
