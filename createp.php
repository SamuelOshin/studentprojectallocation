<div class="row">
    <div class="col-md-4">
        <form method="post" action="" id="login_form1">

			<input type="hidden" name="project_id" value="" id="project_id">

            <div class="mb-3">
                <label for="project_name" class="form-label">Project Name</label>
                <input type="text" name="project_name" id="project_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="project_case" class="form-label">Project Case Study</label>
                <input type="text" name="project_case" id="project_case" class="form-control" required>
            </div>

			<div class="mb-3">
				<label for="field_of_interest" class="form-label">Field of Interest</label>
				<select name="field_of_interest" id="field_of_interest" class="form-select" required>
					<option value="AI">Artificial Intelligence (AI)</option>
					<option value="Web Dev">Web Development</option>
					<option value="Software Dev">Software Development</option>
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
			</div>



            <div class="mb-3">
                <label for="project_level" class="form-label">Project Level</label>
                <select name="project_level" id="project_level" class="form-select" required>
                    
				<option value="BSc">BSc</option>
                </select>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="col-md-8">
        <?php include 'all_project.php'; ?>
    </div>
</div>

<script>
$(document).ready(function () {
    $("#login_form1").submit(function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "addproject.php",
            data: formData,
            success: function(response){
                console.log(response); // Log the response to the console for debugging
                if(response.success) {
                    $.jGrowl("Adding Project Details Please Wait......", { sticky: true });
                    $.jGrowl("Successfully added", { header: 'Success !!' });
                    var delay = 5000;
                    setTimeout(function () {
                        window.location = 'create-project.php'
                    }, delay);
                } else {
                    $.jGrowl("Error creating project", { header: 'Project creation failed' });
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

