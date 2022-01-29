<?php

abstract class Employee
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function fire();
}

class Minion extends Employee
{
    function fire()
    {
        print "{$this->name}: убери со стола \n";
    }
}

class NastyBoss 
{
    private $employee = array();

    function addEmployee($employee)
    {
        $this->employee[] = new Minion($employee);
    }
    function projectFails()
    {
        if (count($this->employee) > 0) {
            $emp = array_pop($this->employee);
            $emp->fire();
        }
    }
}