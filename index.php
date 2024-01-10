<?php
require 'init.php';
?>
<?php include 'head.php'; ?>

<body background="image/underg lasu.png">
    <div class="login-card">
        <!-- <div class="row"> -->
        <div class="title-text">
            <img src="image/lasu logo.png" class="img-rounded img-responsive" width="100" height="100">
            <h1 fw-bold text-center>Computer Science Department</h1>

        </div>
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#adminLogin" aria-selected="true" role="tab">Admin Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#lecturerLogin" aria-selected="false" role="tab">Lecturer Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#studentLogin" aria-selected="false" role="tab">Student Login</a>
                </li>
            </ul>
        </div>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade show active" id="adminLogin" role="tabpanel">
                <?php include 'login_form.php'; ?>
            </div>
            <div class="tab-pane fade" id="lecturerLogin" role="tabpanel">
                <?php include 'lecturer_login.php'; ?>
            </div>
            <div class="tab-pane fade" id="studentLogin" role="tabpanel">
                <?php include 'student_login.php'; ?>
            </div>
        </div>

    </div>



    </div>
    </div>
    <?php include 'footer.php'; ?>