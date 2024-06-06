<?php
    
    class Task {
        public $title;
        public $description;

        public $completed = false;

        // methods on an objects
        // __constructor() will call imediately when you instantiate that class
        public function __construct($title, $description)
        {
            // this object (this = means instance of this class)
            $this->title = $title;
            $this->description = $description;
        }

        public function complete()
        {
            $this->completed = true;
        }
    }

    $task = new Task("Learn OOP", "The teacher teach us Object Oriented Programing");

    var_dump($task->title, $task->description);
    echo "<br>" . $task->title . ": " . $task->description . "<br>";

    $task->complete();

    var_dump($task->completed);
 
?>