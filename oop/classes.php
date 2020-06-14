<?php

class Task {
    public $description;

    public $title;

    public $completed = false;

    public function __construct($description, $title)
    {
        $this->description = $description;
        $this->title = $title;
        // $description = $this->description; wrong way
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'Mathematics');

// var_dump($task->description);
$task->complete();

var_dump($task);