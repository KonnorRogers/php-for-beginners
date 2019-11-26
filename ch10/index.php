<?php

require 'functions.php';

// multiple dumps
function dumper($one, $two, $three){
  var_dump($one, $two, $three);
}

dumper('hello', 'big', 'world');

// Die and dump
function dd($val){
  echo '<pre>';
  die(var_dump($val));
  echo '</pre>';
}

// Will stop anything after this function
/* dd('hello world'); */

// Imported from functions
// if >= 21, return true, else, return false
echoOldEnough(20);
echoOldEnough(21);




