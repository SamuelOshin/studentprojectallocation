<?php
require 'init.php';

$project_name = $_POST['project_name'];
$project_level = $_POST['project_level'];
$project_case = $_POST['project_case'];
$field_of_interest = $_POST['field_of_interest'];
$project_id = $_POST['project_id']; // Define and retrieve project_id

// Prepare the SQL statement using a prepared statement
$stmt = $db->prepare("UPDATE project SET project_name = ?, project_level = ?, project_case = ?, field_of_interest = ? WHERE id = ?");
$stmt->bindParam(1, $project_name);
$stmt->bindParam(2, $project_level);
$stmt->bindParam(3, $project_case);
$stmt->bindParam(4, $field_of_interest);
$stmt->bindParam(5, $project_id);

// Execute the query
$query = $stmt->execute();

if ($query) {
    $response = ['success' => true];
} else {
    $response = ['success' => false];
}

header('Content-Type: application/json');
echo json_encode($response);
?>
