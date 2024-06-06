<?php 

    // Getters and Setters for security
    class Person {
        public $name;

        public $age;

        public function __construct($name)
        {
            $this->name = $name;
        }

        // Getter always return value!!
        // Getters are methods which helps to access the provate attributes from a class
        public function getAge()
        {
            return $this->age *365;
        }

        // Setters are methods which helps to set the value to private attributes in a class
        public function setAge($age) 
        {
            if ($age < 18) {
                throw new Exception("Person is not old enough.");
            }
            $this->age = $age;
        }
    }


    $john = new Person("John Doe");
   // $john->age = -5; // we do not want to have access to property like this, otuside

    $john->setAge(30);
    var_dump($john->getAge());


?>