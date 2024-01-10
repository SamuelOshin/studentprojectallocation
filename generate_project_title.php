<?php
require 'init.php';

// Check if the field of interest is provided in the POST request
if (isset($_POST['field_of_interest'])) {
    $fieldOfInterest = $_POST['field_of_interest'];

    // Query to fetch project title based on field of interest
    $queryTitle = $db->prepare("SELECT project_name FROM project WHERE field_of_interest = ?");
    $queryTitle->execute([$fieldOfInterest]);
    $projectTitle = $queryTitle->fetch(PDO::FETCH_COLUMN);

    // Query to fetch project case based on field of interest
    $queryCase = $db->prepare("SELECT project_case FROM project WHERE field_of_interest = ?");
    $queryCase->execute([$fieldOfInterest]);
    $projectCase = $queryCase->fetch(PDO::FETCH_COLUMN);

    

    // Return the generated project title and case as a JSON response
    header('Content-Type: application/json');
    echo json_encode(['project_title' => $projectTitle, 'project_case' => $projectCase]);
    
} else {
    // Return an error message if the field of interest is not provided
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Field of interest not provided.']);
}

?>
