<?php


$studentName = isset($_SESSION['student_name']) ? $_SESSION['student_name'] : "admin";

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="dashboard.php"><img src="image/lasu logo.png" class="img-rounded img-responsive" width="40" height="40"> Student Project Allocation &amp; Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?> d-flex align-items-center" href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'create-project.php') ? 'active' : ''; ?> d-flex align-items-center" href="create-project.php"><i class="fa fa-book"></i> Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'create-student.php') ? 'active' : ''; ?> d-flex align-items-center" href="create-student.php"><i class="fa fa-users"></i> Student</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i> Manage
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="user.php">Add User</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item" id="logout ">
                    <a class="nav-link d-flex align-items-center" href="logout.php"><span class="fa fa-user"></span> Logout[admin]</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
