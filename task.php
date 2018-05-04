<?php

 class Task {
     public $description;


     public $completed = false;

     public function __construct($desc)
     {
         $this->description = $desc;

     }

     public function completed()
     {
        $this->completed = true;
     }
 }

 $task = new Task('Learn OOP');

 $task->completed();

 var_dump($task->completed);
