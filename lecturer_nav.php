<?php

$lecturer_id = !isset($_SESSION['lecturer_id']);

$lecturer_name = ""; // Initialize the variable

$lecturer_id = $_SESSION['lecturer_id'];

$stmt = $db->prepare("SELECT name FROM lecturer WHERE id = :lecturer_id");
$stmt->bindParam(':lecturer_id', $lecturer_id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    $lecturer_name = $result['name'];
}
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="lecturer_dashboard.php"><img src="image/lasu logo.png" class="img-rounded img-responsive" width="40" height="40"> Student Project Allocation &amp; Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'lecturer_dashboard.php') ? 'active' : ''; ?> d-flex align-items-center" href="lecturer_dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'createprojectL.php') ? 'active' : ''; ?> d-flex align-items-center" href="createprojectL.php"><i class="fa fa-book"></i> Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'studentsL.php') ? 'active' : ''; ?> d-flex align-items-center" href="studentsL.php"><i class="fa fa-users"></i> Student</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="disabled nav-link dropdown-toggle d-flex align-items-center" href="#" id="manageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        <i class="fa fa-cog"></i> Manage
                    </a>
                    <div class="dropdown-menu" aria-labelledby="manageDropdown">
                        <a class="dropdown-item" href="user.php">Add User</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item" id="logout ">
                    <a class="nav-link d-flex align-items-center" href="logout.php"><span class="fa fa-user"></span> Logout[<?php echo $lecturer_name; ?>]</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
