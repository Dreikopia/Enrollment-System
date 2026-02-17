<?php

declare(strict_types=1);

function get_all_students(object $pdo)
{
    $query = "SELECT students.*, courses.course_name FROM students 
    LEFT JOIN courses ON students.course_id = courses.id 
    ORDER BY students.id;";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


function insert_student(object $pdo, string $course_id, string $firstname, string $middlename, string $lastname, int $age)
{
    $query = "INSERT INTO students (course_id, f_name, m_name, l_name, age) VALUES (:c_id, :f_name, :m_name, :l_name, :age);";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":c_id", $course_id);
    $stmt->bindParam(":f_name", $firstname);
    $stmt->bindParam(":m_name", $middlename);
    $stmt->bindParam(":l_name", $lastname);
    $stmt->bindParam(":age", $age);
    $stmt->execute();

    return $pdo->lastInsertId();
}

function student_search(object $pdo, bool|array $searchStudent)
{
    $query = "SELECT students.*, courses.*
    FROM students
    LEFT JOIN courses ON students.course_id = courses.course_name
    WHERE students.student_id = :searchStudent;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":searchStudent", $searchStudent);
    $stmt->execute();

    $searchStudent = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $searchStudent;
}
