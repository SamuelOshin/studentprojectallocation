<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body>

<?php 

if (isset($_SESSION['student_id'])) {
    $studentId = $_SESSION['student_id'];
    $studentName = $_SESSION['student_name'];

    $query = "SELECT id, name, department, level, field_of_interest, matric FROM student WHERE id = :student_id";
    $stmt = $db->prepare($query);
    if (!$stmt) {
        echo "\nPDO::errorInfo():\n";
        print_r($db->errorInfo());
        exit;
    }

    $stmt->bindParam(':student_id', $studentId, PDO::PARAM_INT);
    $result = $stmt->execute();
    if (!$result) {
        echo "\nPDO::errorInfo():\n";
        print_r($stmt->errorInfo());
        exit;
    }

    $studentDetails = $stmt->fetch(PDO::FETCH_ASSOC);

    //Split fullname into FirstName and LastName
    $nameArray = explode(" ", $studentName);

    $firstname = $nameArray[0];
    $lastname = isset($nameArray[1]) ? $nameArray[1] : ""; 

    $profile_fname = strtoupper(substr($firstname, 0, 1));
    $profile_lname = strtoupper(substr($lastname, 0, 1));

    if ($studentDetails) {
        $studentId = $studentDetails['id'];
        $department = $studentDetails['department'];
        $level = $studentDetails['level'];
        $fieldOfInterest = $studentDetails['field_of_interest'];
        $matric = $studentDetails['matric'];
    } else {
        echo "Error: No student details found.";
        exit;
    }
} else {
    echo "Error: Student session details not set.";
    exit;
}

?>
<?php include 'stdDashNav.php'; ?>
<?php include 'studentprofile.php'; ?>
<?php include 'footer.php'; ?>

   