<?php require 'init.php'; ?>
<?php include 'head.php'; ?>

<body>

    <?php
    $studentName = isset($_SESSION['student_name']) ? $_SESSION['student_name'] : "Unknown";

    $studentName = explode(" ", $studentName);
    $firstname = $studentName[0];
    $lastname = $studentName[1];


    $profile_fname = strtoupper(substr($firstname, 0, 1));
    $profile_lname = strtoupper(substr($lastname, 0, 1));

    ?>

    <?php include 'stdDashNav.php'; ?>

    <div class="container mt-5">
    <h1 class="text-center">Welcome, <?php echo $lastname . ' ' . $profile_fname .'.'; ?></h1>
        <div class="row">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">View Profile</h5>
                        <div class="d-grid gap-2">
                            <a class="btn btn-lg btn-primary" type="button" href="std-profile.php">Click here to view!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="image/book.png" alt="Profile Image" class="img-fluid">
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>