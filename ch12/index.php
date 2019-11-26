<?php

/* require 'functions.php'; */

class Task {
  protected $description;
  protected $completed = false;

  public function __construct($description){
    $this->description = $description;
  }

  public function getDescription(){
    return $this->description;
  }

  public function setDescription($description){
    $this->description = $description;
  }
}

/* $task = new Task('I am a new task'); */

$tasks = [
  new Task("Go to store"),
  new Task("Go to grandma's house"),
  new Task("Go home")
];


require 'index.view.php';
