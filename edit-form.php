<div class="row">
    <div class="col-md-4">
        <form method="post" action="" id="login_form1">
            <div class="form-group">
                <label for="project_name" class="form-label">Project Name</label>
                <input type="text" name="project_name" value="<?php echo $project_name; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="project_case" class="form-label">Project Case Study</label>
                <input type="text" name="project_case" value="<?php echo $project_case ?>" class="form-control" required>
            </div>

			<div class="mb-3">
				<label for="field_of_interest" class="form-label">Field of Interest</label>
				<select name="field_of_interest" id="field_of_interest" class="form-select" required>
					<option value="<?php echo $field_of_interest; ?>" selected><?php echo $field_of_interest; ?></option>
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
            <div class="form-group">
                <label for="project_level" class="form-label">Project Level</label>
                <select name="project_level" class="form-control" required>
                    <option value="<?php echo $project_level; ?>" selected><?php echo $project_level; ?></option>
                    <option value="BSc">BSc</option>
                </select>
            </div>
            <input type="hidden" name="project_id" value="<?php echo $_GET['id']; ?>">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>

    <div class="col-md-8">
        <?php include 'all_project.php'; ?>
    </div>
</div>

<script>
$(document).ready(function(){
    $("#login_form1").submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "updateproject.php",
            data: formData,
            success: function(response){
                console.log(response); // Log the response to the console for debugging
                if(response.success) {
                    $.jGrowl("Please Wait......", { sticky: true });
                    $.jGrowl("Successfully updated", { header: 'Success !!' });
                    // Assuming you have a function to update the table, call it here
                    updateProjectTable();
					var delay = 5000;
					setTimeout(function(){ window.location = 'create-project.php'  }, delay);  
                } else {
                    $.jGrowl("Error updating project", { header: 'Project update failed' });
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX request failed. Error: ' + error);
            }
        });
        return false;
    });

    // Function to update the project table (replace this with the actual function)
    function updateProjectTable() {
        // Assuming you have a function or logic to update the project table,
        // replace the following line with the appropriate code
        console.log("Update project table logic here");
    }
});


</script>