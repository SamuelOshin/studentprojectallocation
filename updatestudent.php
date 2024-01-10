<?php
require 'init.php';

// to check the post details
// var_dump($_POST);
$std_fname = $_POST['std_fname'] ?? '';
$std_lname = $_POST['std_lname'] ?? '';
$std_dept = $_POST['std_dept'] ?? '';
$std_no = $_POST['std_no'] ?? '';
$std_id = $_POST['std_id'] ?? '';
$field_of_interest = $_POST['field_of_interest'] ?? '';

$std_name = $std_fname . ' ' . $std_lname;

$query = $db->prepare("UPDATE student SET name = ?, department = ?, matric = ?, field_of_interest = ? WHERE id = ?");
$query->bindParam(1, $std_name);
$query->bindParam(2, $std_dept);
$query->bindParam(3, $std_no);
$query->bindParam(4, $field_of_interest);
$query->bindParam(5, $std_id);

if ($query->execute()) {
    if ($query->rowCount() > 0) {
        echo 'true';
    } else {
        echo 'false';
    }
} else {
    $errorInfo = $query->errorInfo();
    echo 'Error: ' . $errorInfo[2];
}
?>
