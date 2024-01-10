<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="std-dashboard.php"><img src="image/lasu logo.png" class="img-rounded img-responsive" width="40" height="40"> Student Project Allocation &amp; Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'std-dashboard.php') ? 'active' : ''; ?> d-flex align-items-center" href="std-dashboard.php"><i class="fa fa-home me-1 "></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php echo (basename($_SERVER['PHP_SELF']) == 'std-profile.php') ? 'active' : ''; ?> d-flex align-items-center" href="std-profile.php"><i class="fa-regular fa-address-card me-1 "></i></i>  Profile</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item" id="logout ">
                    <a class="nav-link d-flex align-items-center" href="logout.php"><span class="fa fa-user"></span> <strong>Logout  <strong>[<?php echo $profile_lname . $profile_fname ?>]</strong></strong></a>
                </li>
            </ul>
        </div>
    </div>
</nav>