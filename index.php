<?php

//include_once "Lesson.php";
include_once "Lecture.php";
include_once "Seminar.php";
include_once "CostStrategy.php";



$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "Плата за занятие {$lesson->cost() }.";
    print "Тип оплаты: {$lesson->chargeType()}\n";
}




  