<?php

// associative array
$person = [
  'age' => 23,
  'hair' => 'blonde',
  'career' => 'web developer'
];

// push to $person
$person['name'] = 'Bob';


// Non associative arrays
$animals = ['dog', 'cat'];

// push to $animals
$animals[] = 'zebra';

require 'index.view.php';
