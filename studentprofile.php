<section>

    <div class="profile_cont">
        <div class="sectionHeader">
            <h1>My Profile</h1>

        </div>
        <div class="profile-inct">
            <div class="prof-Head">
                <h3>My Details</h3>
            </div>
            <form id="profile_form" action="updatestudent.php" method="post">
                <div class="details-my">
                    <div class="student_details">
                        <div class="student_avatar">
                            <div class="avatar_img"><img class="proImg" src="image\User Default_96px.png" /></div>
                            <div class="avatarName">
                                <h2 class="fw-bold"><?php echo $studentName; ?></h2>
                                <p class="fw-bold">Matric No: <?php echo $matric; ?></p>
                            </div>
                        </div>
                        <div class="profile_info">

                            <div class="regForm">

                                <div class="signfcase">

                                    <label class="formdetails">
                                        <h4 class="formlabel">First name</h4>
                                        <input id="sname" type="text" name="std_fname" required placeholder="Enter Your First Name" class="signNn" value="<?php echo $firstname ?>" />
                                    </label>
                                    <label class="formdetails">
                                        <h4 class="formlabel">Last name</h4>
                                        <input id="sname" type="text" name="std_lname" required placeholder="Enter Your Last Name" class="signNn" value="<?php echo $lastname ?>" />
                                    </label>

                                </div>

                                <div class="signfcase">

                                    <label class="formdetails">
                                        <h4 class="formlabel">Matric Number</h4>
                                        <input id="sname" type="text" name="std_no" required placeholder="Enter Your Matric No." class="signNn" value="<?php echo $matric ?>" />
                                    </label>
                                    <div class="formdetails">
                                        <h4><label for="std_dept" class="formlabel">Department</label></h4>
                                        <input id="sname" type="text" name="std_dept" value="<?php echo $department; ?>" class="signNn" required readonly>
                                    </div>
                                </div>

                                <div class="signfArea">

                                    <label class="formArea">
                                        <h4 class="formlabel">Area of Interest</h4>
                                        <select id="field_of_interest" name="field_of_interest" required class="form-control" placeholder="Select your field of interest" style="font-size: 15px;">
                                            <option value="<?php echo $fieldOfInterest; ?>" selected><?php echo $fieldOfInterest; ?></option>
                                            <option value="AI">Artificial Intelligence (AI)</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Software Development">Software Development</option>
                                            <option value="Data Science">Data Science</option>
                                            <option value="Machine Learning">Machine Learning</option>
                                            <option value="ML/DL">Machine Learning / Deep Learning</option>
                                            <option value="Cloud Computing">Cloud Computing</option>
                                            <option value="IoT">Internet of Things (IOT)</option>
                                            <option value="AR/VR">Augmented Reality & Virtual Reality</option>
                                            <option value="Gaming">Game Development</option>
                                            <option value="Robotics">Robotics</option>
                                            <option value="Cybersecurity">Cyber Security</option>
                                            <option value="Big Data">Big Data Analytics</option>
                                            <option value="Data Science">Data Science</option>
                                        </select>
                                    </label>
                                </div>
                                <input type="hidden" name="std_id" value="<?php echo $studentId; ?>">
                                <button type="submit" class="btn btn-primary btntext">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>


<section class="geneSec">

    <div class="profile_cont" id="projectallocate" style="display: none;">
        <div class="profile-inct">
            <div class="gen-Head">
                <h3>Project Allocation</h3>
            </div>
            <div class="projectGenCont">
                <div class="readyImg"><img class="proImg" src="image/get started.jpg"></div>
                <div class="getStartedHd">
                    <h1> Ready to get started on your Project!</h1>
                    <button class="generatBtnp" data-bs-toggle="collapse" data-bs-target="#collapseCard" aria-expanded="false" aria-controls="collapseCard" id="generateBtn"><span class="geneTxt">Generate Project</span></button>
                    <form id="project_form">
                        <div class="collapse mt-4" id="collapseCard">
                            <div class="card" style="max-width: 40rem;">
                                <div class="card-header bg-primary text-white">
                                    Please wait while the system generates a project topic for this student
                                </div>
                                <div class="card-body">
                                    <!-- Updated loading div to include the gif-container -->
                                    <div id="gif_container" style="display: none;">
                                        <img src="image\Double Ring.gif" alt="Loading" style="width: 88px; height: 88px;">
                                    </div>
                                    <div id="project_info" style="display: none;">
                                        <!-- Placeholder for project information -->
                                        <p id="project_title" class="mb-0"></p>
                                        <input type="hidden" name="project_id" value="" id="project_id">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" title="Refresh" id="refresh_button">
                                        <i class="fa fa-refresh"></i> Refresh
                                    </button>
                                </div>
                                <div class="form-group mt-3 text-center">
                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Display the assigned project -->
    <div class="profile_cont" id="project_details" style="display: none;">
        <div class="profile-inct">
            <div class="gen-Head">
                <h3>Project Details</h3>

            </div>
            <div id="assigned_project_info">
                <!-- Placeholder for assigned project information -->
                <div class="card">
                    <p id="assigned_project_title" style="
                    color: #06065c;
                    font-size: 20px;
                    text-align: center;
                    font-weight: 500;
                    font-style: italic;
                 "></p>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Script for edit profile -->
<script>
    $(document).ready(function() {
        $("#profile_form").submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "updatestudent.php",
                data: formData,
                success: function(html) {
                    if (html == 'true') {
                        $.jGrowl("Please Wait......", {
                            sticky: true
                        });
                        $.jGrowl("Student successfully updated", {
                            header: 'Success !!'
                        });
                        var delay = 5000;
                        setTimeout(function() {
                            window.location = '';
                        }, delay);
                    } else {
                        $.jGrowl("Error Saving", {
                            header: 'Check Details for Error'
                        });
                    }
                },
                error: function() {
                    $.jGrowl("Error occurred while submitting the form", {
                        header: 'Error'
                    });
                }
            });
            return false;
        });
    });
</script>

<script>
$(document).ready(function() {
    // Check if the student has an allocated project on profile load
    checkAllocatedProject();

    // Function to check if the student has an allocated project
    function checkAllocatedProject() {
        $.ajax({
            url: 'retrieve_assigned_project.php',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response && response.project_name && response.project_case) {
                    // Student has an allocated project, display the assigned project
                    $('#project_details').show();
                    $('#assigned_project_title').html(response.project_name + '<br>' + response.project_case);
                } else {
                    // No allocated project, show the project generation section
                    $('#projectallocate').show();
                }
            },
            error: function(error) {
                console.error('Error:', error);
                // If there's an error, assume no allocated project
                $('#projectallocate').show();
            }
        });
    }
});
</script>

<!-- Script to generate project with timeout -->
<script>
    $(document).ready(function() {
        function generateProjectTitle() {
            $.ajax({
                url: 'assign.php',
                method: 'POST',
                data: {
                    field_of_interest: $('#field_of_interest').val()
                },
                dataType: 'json',
                success: function(response) {
                    console.log('Response:', response);
                    if (response.error) {
                        console.error('Error:', response.error);
                    } else if (Array.isArray(response) && response.length > 0) {
                        if (Array.isArray(response) && response.length > 0) {
                            setTimeout(function() {
                                // Generate a random index within the range of the response array
                                var randomIndex = Math.floor(Math.random() * response.length);
                                // Display the project details at the random index
                                $('#project_title').html(response[randomIndex].project_name + '<br>' + response[randomIndex].project_case);
                                // Store the project_id of the displayed project
                                $('#project_id').val(response[randomIndex].id);
                                $('#gif_container').hide(); // Hide GIF container
                                $('#project_info').show(); // Show project info
                            }, 10000);
                        }
                        // Show the GIF container for 5 seconds
                        $('#gif_container').show();
                        setTimeout(function() {
                            $('#gif_container').hide();
                        }, 10000);
                    } else {
                        console.log('No projects available or error in response.');
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        // Call the function to generate and display the project title
        generateProjectTitle();
    });
</script>

<!-- script to generate project -->
<script>
    // Example of how to use jQuery to refresh the project title
    $(document).ready(function() {
        $('#refresh_button').on('click', function(e) {
            e.preventDefault();
            // Call the function to generate and display the project title
            generateProjectTitle();
        });

        function generateProjectTitle() {
            $.ajax({
                url: 'assign.php',
                method: 'POST',
                data: {
                    field_of_interest: $('#field_of_interest').val()
                },
                dataType: 'json', // Ensure response is parsed as JSON
                success: function(response) {
                    console.log('Response:', response);
                    if (response.error) {
                        console.error('Error:', response.error);
                    } else if (Array.isArray(response) && response.length > 0) {
                        // Assuming response is an array of projects
                        if (Array.isArray(response) && response.length > 0) {
                            // Generate a random index within the range of the response array
                            var randomIndex = Math.floor(Math.random() * response.length);
                            // Display the project details at the random index
                            $('#project_title').html(response[randomIndex].project_name + '<br>' + response[randomIndex].project_case);
                            // Store the project_id of the displayed project
                            $('#project_id').val(response[randomIndex].id);
                        }
                    } else {
                        console.log('No projects available or error in response.');
                        $('#project_title').html('Error: No projects available or error in response.');
                        $('#project_id').val('');
                    }

                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    });
</script>

<!-- Script to submit assign -->
<script>
    $(document).ready(function() {
        $("#project_form").submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "updatep.php",
                data: formData,
                success: function(html) {
                    if (html == 'true') {


                        $.jGrowl("Student successfully added & assigned", {
                            header: 'Success !!'
                        });
                        var delay = 5000;
                        setTimeout(function() {
                            window.location = '#'
                        }, delay);

                        $('#project_details').show();
                        $('#projectallocate').hide();
                        updateAssignedProjectDetails();
                    } else {
                        $.jGrowl("Error Allocating for Student", {
                            header: 'Allocation Failed'
                        });
                    }
                }
            });
            return false;
        });

        // Function to update the assigned project details
        function updateAssignedProjectDetails() {
            // Perform an AJAX call to retrieve the assigned project details
            $.ajax({
                url: 'retrieve_assigned_project.php',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response && response.project_name && response.project_case) {
                        // Display assigned project name and case
                        $('#assigned_project_title').html(response.project_name + '<br>' + response.project_case);
                    } else {
                        // Handle case when no project is assigned or error in response
                        $('#assigned_project_title').html('Error: No assigned project available');
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                    $('#assigned_project_title').html('Error: Failed to retrieve assigned project details');
                }
            });
        }
    });
</script>