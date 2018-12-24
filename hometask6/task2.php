<?php
include './Student.php';

echo 'task2' . PHP_EOL;
$students = [
    [
        'firstName' => 'Mike',
        'lastName' => 'Barnes',
        'gender' => 'male',
        'status' => 'freshman',
        'gpa' => 4
    ],
    [
        'firstName' => 'Jim',
        'lastName' => 'Nickerson',
        'gender' => 'male',
        'status' => 'sophomore',
        'gpa' => 3
    ],
    [
        'firstName' => 'Jack',
        'lastName' => 'Indabox',
        'gender' => 'male',
        'status' => 'junior',
        'gpa' => 2.5
    ],
    [
        'firstName' => 'Jane',
        'lastName' => 'Miller',
        'gender' => 'female',
        'status' => 'senior',
        'gpa' => 3.6
    ],
    [
        'firstName' => 'Mary',
        'lastName' => 'Scott',
        'gender' => 'female',
        'status' => 'senior',
        'gpa' => 2.7
    ]
];

$studentObjects = [];

$studCount = count($students);

for ($i = 0; $i < $studCount; $i++) {
    $studentObjects[$i] = new Student($students[$i]);
}

// use of __get
// for task 4
echo 'Student names are' . PHP_EOL;
for ($i = 0; $i < $studCount; $i++) {
    echo $studentObjects[$i]->fullname . PHP_EOL;
}

// for task 4
$studentObjects[1]->status = 'junior';
echo 'now ' . $studentObjects[1]->fullname . ' become a junior' .PHP_EOL;


for ($i = 0; $i < $studCount; $i++) {
//    $studentObjects[$i]->showMySelf();

    echo $studentObjects[$i];
}

