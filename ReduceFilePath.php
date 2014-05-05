<?php 

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
