<?php
require 'init.php';

$project_name = $_POST['project_name'];
$project_level = $_POST['project_level'];
$project_case = $_POST['project_case'];
$field_of_interest = $_POST['field_of_interest']; // Add this line

$query = $db->query("INSERT INTO project (project_name, project_level, project_case, field_of_interest, allocation) VALUES ('$project_name', '$project_level', '$project_case', '$field_of_interest', 0)");

if ($query) {
    $response = ['success' => true];
} else {
    $response = ['success' => false];
}

header('Content-Type: application/json');
echo json_encode($response);
?>
