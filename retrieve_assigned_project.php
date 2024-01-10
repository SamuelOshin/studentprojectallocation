<?php
// Assuming you have a database connection established
require 'init.php';

// Get the logged-in student's ID from the session or authentication mechanism
$student_id = $_SESSION['student_id']; // Replace with your actual session variable or authentication mechanism

// Your database query to retrieve the assigned project details for the student
// Replace the placeholders with your actual database table and column names
$stmt = $db->prepare("SELECT project_name, project_case FROM project WHERE id = (SELECT project_id FROM student WHERE id = :student_id)");
$stmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
$stmt->execute();
$assigned_project = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if a project was found for the student
if ($assigned_project) {
    // Return the assigned project details as JSON
    header('Content-Type: application/json');
    echo json_encode($assigned_project);
} else {
    // No project found or error, return an empty JSON object or error message
    echo json_encode(['error' => 'No assigned project found']);
}
?>
