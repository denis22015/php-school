<?php
const ALLOWED_STUDENT_GENDERS = ['male', 'female'];
const ALLOWED_STUDENT_STATUSES = ['freshman', 'sophomore', 'junior', 'senior'];

class Student
{

    private $firstName;
    private $lastName;
    private $gender;
    private $status;
    private $gpa = 0;


    public function __construct($student)
    {
        $this->firstName = $student['firstName'];
        $this->lastName = $student['lastName'];

        $this->gender = in_array($student['gender'], ALLOWED_STUDENT_GENDERS)
            ? $student['gender']
            : ALLOWED_STUDENT_GENDERS[0];

        $this->status = in_array($student['status'], ALLOWED_STUDENT_STATUSES)
            ? $student['status']
            : ALLOWED_STUDENT_STATUSES[0];

        $this->gpa = $student['gpa'];
    }

    public  function showMySelf() {
        echo PHP_EOL;
        echo 'firstName='.$this->firstName . PHP_EOL;
        echo 'lastName='.$this->lastName . PHP_EOL;
        echo 'gender='.$this->gender . PHP_EOL;
        echo 'status='.$this->status . PHP_EOL;
        echo 'gpa='.$this->gpa . PHP_EOL;
        echo PHP_EOL;

    }

    public function studyTime($studyTime) {
        $newGpa = $this->gpa + log($studyTime);
        $this->gpa = $newGpa <= 4.0 ? $newGpa : 4.0;
    }
}