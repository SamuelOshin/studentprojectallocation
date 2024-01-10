<?php
require 'init.php';
if (!isset($_SESSION['lecturer_id'])) {
    // Redirect to the login page or display an error message
    header("Location: login.php");
    exit;
}
?>

<?php include 'head.php'; ?>

<body>
    <?php include 'lecturer_nav.php'; ?>
    <div class="dashboard-content">
        <h1 class="text-center">Welcome, <?php echo $lecturer_name; ?>!</h1>
        <div class="profile-inct">
            <div class="prof-Head">
                <h3>Recent Project Allocations</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover project_table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Field of Interest</th>
                            <th>Project Title</th>
                            <th>Case Study</th>
                            <th>Level</th>
                            <th>Department</th>
                            <th>Matric. NO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Assuming the logged-in lecturer's ID is stored in the session
                        $lecturer_id = $_SESSION['lecturer_id'];

                        $stmt = $db->prepare("SELECT s.id, s.name, s.matric, s.level, s.department, s.field_of_interest, s.project_id, s.date, p.project_name, p.project_case 
                                        FROM student s
                                        JOIN project p ON s.project_id = p.id
                                        WHERE s.lecturer_id = :lecturer_id");
                        $stmt->bindParam(':lecturer_id', $lecturer_id, PDO::PARAM_INT);
                        $stmt->execute();
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($rows as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['field_of_interest']; ?></td>
                                <td class="fw-bold"><?php echo $row['project_name']; ?></td>
                                <td class="fw-bold"><?php echo $row['project_case']; ?></td>
                                <td><?php echo $row['level']; ?></td>
                                <td><?php echo $row['department']; ?></td>
                                <td><?php echo $row['matric']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>