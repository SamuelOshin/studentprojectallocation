<?php
session_start();
include 'db.php';

if (isset($_POST['field_of_interest'])) {
    $fieldOfInterest = $_POST['field_of_interest'];

    // Query to fetch project title based on field of interest
    $queryTitle = $db->prepare("SELECT project_name, project_case, id FROM project WHERE field_of_interest = ?");
    $queryTitle->execute([$fieldOfInterest]);
    $projects = $queryTitle->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($projects)) {
        // If projects are found, return the project details
        header('Content-Type: application/json');
        echo json_encode($projects);
    } else {
        // No projects found for the given field of interest
        $message = ['error' => 'No projects available for the selected field of interest.'];
        echo json_encode($message);
    }
} elseif (isset($_POST['action']) && $_POST['action'] === 'yes') {
    $query = $db->query("SELECT * FROM `project` WHERE allocation = 0 ORDER BY RAND() LIMIT 1");
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // If a project is found, return its details
        header('Content-Type: application/json');
        echo json_encode($result);
    } else {
        // No project found with allocation = 0
        $message = ['error' => 'No project available. Please create more projects.'];
        echo json_encode($message);
    }
} else {
    // Return an error message if the request is not properly formatted
    $message = ['error' => 'Invalid request.'];
    echo json_encode($message);
}
?>
