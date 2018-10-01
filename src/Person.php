<?php

class Person
{
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}
