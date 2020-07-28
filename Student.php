<?php

class Student extends User
{
    public $course = 1;

    // public function __construct($name) 
    // {
    //     $this->name = $name;
    //     $this->course = 1;
    // }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function transferToNextCourse() 
    {
        if($this->isCorrectCourse()) {
            $this->course++;
            return 'Студент переведен на ' . $this->course . ' курс!';
        } else {
            return 'Студент закончил вышее учебное заведение!';
        }
    }

    private function isCorrectCourse() 
    {
        if($this->course > 0 && $this->course < 5) {
            return true;
        } else {
            return false;
        } 
    }
}