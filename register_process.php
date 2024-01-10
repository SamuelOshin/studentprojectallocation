<?php
require 'init.php'; // Ensure this includes your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $matric = isset($_POST['matric']) ? $_POST['matric'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $verifyPassword = isset($_POST['verifyPassword']) ? $_POST['verifyPassword'] : '';
    $lecturer = isset($_POST['lecturer_id']) ? $_POST['lecturer_id'] : '';

    // Additional validation logic (e.g., checking if passwords match)
    if ($password !== $verifyPassword) {
        echo 'Passwords do not match!';
        exit;
    }

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($first_name) && !empty($last_name)) {
        // Combine first and last names
        $fullName = $first_name . ' ' . $last_name;
    }
    try {
        // Insert data into the 'student' table
        $insertStudent = $db->prepare("INSERT INTO student (name, matric, date, lecturer_id) VALUES (:name, :matric, :registration_date, :lecturer_id)");
        $registrationDate = date('Y-m-d'); // Get the current date
        $insertStudent->bindParam(':name', $fullName, PDO::PARAM_STR);
        $insertStudent->bindParam(':matric', $matric, PDO::PARAM_STR);
        $insertStudent->bindParam(':registration_date', $registrationDate, PDO::PARAM_STR);
        $insertStudent->bindParam(':lecturer_id', $lecturer, PDO::PARAM_INT);
        $insertStudent->execute();

        // Get the ID of the newly inserted student record
        $studentId = $db->lastInsertId();

        // Get the current date and time
        $registrationDate = date('Y-m-d'); // Format the date

        $insertRegistration = $db->prepare("INSERT INTO student_registration (student_id, registration_date, name, matric, password, lecturer_id) VALUES (:student_id, :registration_date, :name, :matric, :password, :lecturer_id)");
        $insertRegistration->bindParam(':student_id', $studentId, PDO::PARAM_INT);
        $insertRegistration->bindParam(':registration_date', $registrationDate, PDO::PARAM_STR);
        $insertRegistration->bindParam(':name', $fullName, PDO::PARAM_STR);
        $insertRegistration->bindParam(':matric', $matric, PDO::PARAM_STR);
        $insertRegistration->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $insertRegistration->bindParam(':lecturer_id', $lecturer, PDO::PARAM_INT);
        $insertRegistration->execute();

        // If the registration process is successful, echo 'success'
        echo 'success';
    } catch (PDOException $e) {
        // Handle any database errors during registration
        echo 'Error: ' . $e->getMessage();
    }
}
?>



















