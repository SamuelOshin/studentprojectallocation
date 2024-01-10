<?php
// login_process.php
require 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize form data
    $matric = isset($_POST['matric']) ? $_POST['matric'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Check credentials against the 'student' table
    $stmt = $db->prepare("SELECT  name, student_id, password FROM student_registration WHERE matric = :matric");
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
    $stmt->execute();
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    

    if ($student) {
        // Verify the password
        $hashedPassword = $student['password'];
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, set session variables
            $_SESSION['student_id'] = $student['student_id'];
            $_SESSION['student_name'] = $student['name'];

            // Redirect to the dashboard or other pages
            header('Location: std-dashboard.php');
            exit();
        } else {
            // Incorrect password
            echo 'Incorrect password';
        }
    } else {
        // No student found with the provided matric number
        echo 'Student not found';
    }
}
?>
