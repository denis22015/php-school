<?php
include './task2.php';
$studentsStudyTimes = [60, 100, 40, 300, 1000];

echo 'task3' . PHP_EOL;

for ($i = 0; $i < $studCount; $i++) {
    $studyTime = $studentsStudyTimes[$i];
    $studentObjects[$i]->studyTime($studyTime);
}

for ($i = 0; $i < $studCount; $i++) {
    $studentObjects[$i]->showMySelf();
}
