<?php

//namespace classes;

abstract class Lesson
{
    private $duration;
    private $costtype;

    function __construct($duration, CostStrategy $strategy)
    {
        $this->duration  =  $duration;
        $this->costStrategy = $strategy;

    }

    function cost()
    {
       return $this->costStrategy->cost($this);
    }

    function chargeType()
    {
        return $this->costStrategy->chargeType();
    }
    function getDuration()
    {
        return $this->duration;
    }

}