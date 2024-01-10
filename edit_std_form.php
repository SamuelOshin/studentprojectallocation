<div class="row">
    <div class="col-md-4">
        <form method="post" action="" id="login_form1">
            <div class="form-group">
                <label for="std_name" class="form-label">Student Name</label>
                <input type="text" name="std_name" value="<?php echo $name ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="std_no" class="form-label">Student Reg. No</label>
                <input type="text" name="std_no" value="<?php echo $matric; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="std_dept" class="form-label">Department</label>
                <input type="text" name="std_dept" value="<?php echo $department; ?>" class="form-control" required>
            </div>

			<div class="mb-3 form-group">
				<label for="field_of_interest" class="form-label">Field of Interest</label>
				<select name="field_of_interest" id="field_of_interest" class="form-select" required>
					<option value="<?php echo $field_of_interest; ?>" selected><?php echo $field_of_interest; ?></option>
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
		</div>

            <div class="form-group">
                <label for="std_class" class="form-label"></label>
                <select name="std_class" class="form-control" required>
                    <option value="<?php echo $level; ?>" selected><?php echo $level; ?></option>
                    <!-- Add other options as needed -->
                    <option value="BSc">BSc</option>
                </select>
            </div>
            <input type="hidden" name="std_id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>

    <div class="col-md-8">
        <?php include 'all_student.php'; ?>
    </div>

</div>

<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "updatestudent.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl("Student successfully updated", { header: 'Success !!' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'create-student.php'  }, delay);  
			}else
			{
			    $.jGrowl("Error creating project", { header: 'Project creation failed' });
			}
			}
		});
		return false;
	});
});
</script>