<?php

require __DIR__ . '/../Model/studentRepository.php';

$students = getStudents();

require __DIR__ . '/../View/students.php';
