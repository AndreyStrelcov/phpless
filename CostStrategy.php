<?php

include_once "Lesson.php";

abstract class CostStrategy
{
    abstract function cost(Lesson $lesson);
    abstract function chargeType();
}

class TimedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return ($lesson->getDuration() * 5);
    }
    function chargeType()
    {
        return "Почасовая оплата";
    }
}

class FixedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return 30;
    }
    function chargeType()
    {
        return "Фиксированная оплата";
    }
}