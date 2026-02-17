<?php

declare(strict_types=1);
require_once 'dbh.inc.php';
require_once 'model.inc.php';

$students =  get_all_students($pdo);


function add_student(object $pdo, string $course_id, string $firstname, string $middlename, string $lastname, int $age)
{
    insert_student($pdo, $course_id, $firstname, $middlename, $lastname, $age);
}
