<?php

//namespace classes;

abstract class Lesson
{
    protected $duration;
    const     FIXED = 1;
const     TIME = 2;
    private   $costtype;

    function __construct($duration,$costtype = 1)
    {
        $this->duration  =  $duration;
        $this->costtype = $costtype;

    }

    function cost()
    {
        switch ($this->costtype) {
            CASE self::TIME :
                return (5 * $this->duration);
                break;
            CASE self::FIXED :
                return 30;
                break;
            default:
                $this->costtype = self::FIXED;
                return 30;
        }
    }

    function chargeType()
    {
        switch ($this->costtype) {
            CASE self::TIME :
                return "Почасовая оплата";
                break;
            CASE self::FIXED :
                return "Фиксированная оплата";
                break;
            default:
                $this->costtype = self::FIXED;
                return "Фиксированная оплата";

        }
    }

}