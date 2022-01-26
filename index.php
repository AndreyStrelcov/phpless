<?php

//include_once "Lesson.php";
include_once "Lecture.php";
include_once "Seminar.php";


$lecture = new Lecture(5, Lesson::FIXED);
print "{$lecture->cost()} ({$lecture->chargeType() })\n";

$seminar = new Seminar(3, Lesson::TIME);
print "{$seminar->cost()} ({$seminar->chargeType()})\n";


  