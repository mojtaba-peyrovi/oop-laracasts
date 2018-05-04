<?php

class Person {

    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }
    // setter
    public function setAge($age)
    {
        $this->age = $age;
    }
    //getter
    public function getAge()
    {
        return $this->age;
    }
}
$john = new Person('John Doe');
$john->setAge(31);

var_dump($john->getAge());
