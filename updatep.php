<?php
require 'init.php';

// Get the logged-in student's ID from the session or authentication mechanism
$student_id = $_SESSION['student_id']; // Replace with your actual session variable or authentication mechanism

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_id = $_POST['project_id'];

    // Update the student's project ID to match the chosen project
    $update_student = $db->prepare("UPDATE student SET project_id = :project_id WHERE id = :student_id");
    $update_student->bindParam(':project_id', $project_id, PDO::PARAM_INT);
    $update_student->bindParam(':student_id', $student_id, PDO::PARAM_INT);

    if ($update_student->execute()) {
        // Change the allocation number for the chosen project
        $update_project = $db->prepare("UPDATE project SET allocation = 1 WHERE id = :project_id");
        $update_project->bindParam(':project_id', $project_id, PDO::PARAM_INT);

        if ($update_project->execute()) {
            echo 'true';
        } else {
            echo 'false';
        }
    } else {
        echo 'false';
    }
} else {
    echo 'Invalid request';
}
?>
