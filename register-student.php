<?php
require 'init.php';

// Fetch the list of lecturers using PDO
$query = "SELECT id, name FROM lecturer";
$statement = $db->prepare($query);
$statement->execute();

// Fetch all lecturer details
$lecturers = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include 'head.php'; ?>

<body background="image/underg lasu.png">
    <div class="login-card">
        <!-- <div class="row"> -->
        <div class="title-text">
            <img src="image/lasu logo.png" class="img-rounded img-responsive" width="100" height="100">
            <h1 fw-bold text-center>Computer Science Department</h1>
            <!-- <h1>STUDENTS' PROJECT ALLOCATION & MANAGEMENT SYSTEM</h1> -->
        </div>


        <div class="container">
            <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center">
                <div class="col-sm-12 col-lg-10 col-xl-9 col-xxl-7 bg-white shadow-lg" style="border-radius: 5px;">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="fw-bold mb-4">Student Registration Portal</h4>
                        </div>
                        <form id="registration_form" class="user">
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" placeholder="First Name" name="first_name" required /></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="text" placeholder="Last Name" name="last_name" required /></div>
                            </div>

                            <div class="mb-3"><input class="form-control form-control-user" type="text" placeholder="Username (Use your Matric Number)" name="matric" required /></div>



                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input id="password" class="form-control form-control-user" type="password" placeholder="Password" name="password" required /></div>
                                <div class="col-sm-6"><input id="verifyPassword" class="form-control form-control-user" name="verifyPassword" type="password" placeholder="Repeat Password" required /></div>
                            </div>
                            <!-- For lecturer -->
                            <div class="row mb-3">
                                <label for="lecturer_id" class="col-sm-3 col-form-label">Select Lecturer:</label>
                                <div class="col-sm-9">
                                    <select class="form-select" id="lecturer_id" name="lecturer_id" required>
                                        <option value="">Select a Lecturer</option>
                                        <?php foreach ($lecturers as $lecturer) : ?>
                                            <option value="<?= $lecturer['id']; ?>"><?= $lecturer['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <p id="emailErrorMsg" class="text-danger" style="display: none;">Paragraph</p>
                                    <p id="passwordErrorMsg" class="text-danger" style="display: none;">Password doesn't match.</p>

                                </div><button id="submitBtn" class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                                <hr />
                        </form>
                        <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                        <div class="text-center"><a class="small" href="index.php">Already have an account? Login!</a></div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>


    </div>

    <script>
        $(document).ready(function() {
            $("#registration_form").submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "register_process.php",
                    data: formData,
                    success: function(response) {
                        if (response.trim() === 'success') {
                            // Handle successful registration
                            // Your success handling logic here
                            $.jGrowl("Registration Successful", {
                                sticky: true
                            });
                            $.jGrowl("Login in as a student to access the App", {
                                header: 'Successful'
                            });
                            var delay = 5000;
                            setTimeout(function() {
                                window.location = 'index.php'
                            }, delay);
                        } else {
                            // Handle other responses or errors
                            $.jGrowl("Please Check your form Input", {
                                header: 'Registration Failed'
                            });
                            console.log("Registration failed. Response:", response);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX request failed:", error);
                    }
                });

            });
        });
    </script>

    <script>
        // JavaScript code to check if passwords match
        document.getElementById('registration_form').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var verifyPassword = document.getElementById('verifyPassword').value;

            if (password !== verifyPassword) {
                // Display error message and prevent form submission
                document.getElementById('passwordErrorMsg').style.display = 'block';
                event.preventDefault();
            } else {
                // Hide error message if passwords match
                document.getElementById('passwordErrorMsg').style.display = 'none';
            }
        });
    </script>
    <?php include 'footer.php'; ?>