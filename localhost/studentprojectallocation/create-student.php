<!DOCTYPE html>
<html>
<head>
	<title>Student Project Allocation & Management System</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
	<script src="js/jquery.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php"><i class="fa fa-graduation-cap"></i> Student Project Allocation &amp; Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" title="Student Project Allocation &amp; Management System">
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  d-flex align-items-center" href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  d-flex align-items-center" href="create-project.php"><i class="fa fa-book"></i> Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active d-flex align-items-center" href="create-student.php"><i class="fa fa-users"></i> Student</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="manageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i> Manage
                    </a>
                    <div class="dropdown-menu" aria-labelledby="manageDropdown">
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
<div class="dashboard-content">
<h3>Add Student</h3>
<div class="row">
    <div class="col-md-4">
        <form method="post" action="" id="login_form1">
            <div class="form-group">
                <label class="control-label">Student Name</label>
                <input type="text" name="std_name" class="form-control input-sm" required>
            </div>

            <div class="form-group">
                <label class="control-label">Student Reg. No</label>
                <input type="text" name="std_no" class="form-control input-sm" required>
            </div>

            <div class="form-group">
                <label class="control-label">Department</label>
                <select name="std_dept" class="form-control input-sm" required readonly>
                    <option value="Computer Science">Computer Science</option>
                </select>
            </div>

            
            <div class="form-group">
                <label for="field_of_interest">Field of Interest:</label>
                <select name="field_of_interest" id="field_of_interest" class="form-control" required>
                    <option value="" disabled selected>Select your field of interest</option>
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
                <label class="control-label">Class</label>
                <select name="std_class" class="form-control input-sm" required>
                <option value="400 L">400 L</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="form-group mt-3 d-flex justify-content-center align-items-center">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Please wait while the system generates a project topic for this student
                    </div>
                    <div class="card-body">
                        <p id="project_title" class="mb-0">
                            <img src="image/Double Ring.gif" alt="Loading">
                        </p>
                        <input type="hidden" name="project_id" value="" id="project_id">
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" title="Refresh" id="refresh_button">
                            <i class="fa fa-refresh"></i> Refresh
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3 text-center">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="col-md-8">
        <!-- <table class="table table-bordered table-hover project_table">
	<thead>
		<tr>
			<th>Student Name</th>
			<th>Matric</th>
			<th>Level</th>
			<th>Department</th>
      <th>Date Added</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		             <tr>
             	<td>Oshin Samuel</td>
             	<td>190591248</td>
             	<td>100 L</td>
              <td>Computer Science</td>
              <td>2023-10-17</td>
             	<td>
             	    <a class="btn btn-sm btn-primary" href="edit_std_data.php?id=8"><i class="fa fa-edit"></i></a>
             		  <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="delete_std_data.php?id=8"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
                     <tr>
             	<td>Oshin Samuel</td>
             	<td>190591248</td>
             	<td>400 L</td>
              <td>Computer Science</td>
              <td>2023-10-17</td>
             	<td>
             	    <a class="btn btn-sm btn-primary" href="edit_std_data.php?id=9"><i class="fa fa-edit"></i></a>
             		  <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="delete_std_data.php?id=9"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
                     <tr>
             	<td>James</td>
             	<td>1234567</td>
             	<td>400l</td>
              <td>zoo</td>
              <td>2023-11-10</td>
             	<td>
             	    <a class="btn btn-sm btn-primary" href="edit_std_data.php?id=10"><i class="fa fa-edit"></i></a>
             		  <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="delete_std_data.php?id=10"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
                     <tr>
             	<td>James</td>
             	<td>1234567</td>
             	<td>400l</td>
              <td>zoo</td>
              <td>2023-11-10</td>
             	<td>
             	    <a class="btn btn-sm btn-primary" href="edit_std_data.php?id=11"><i class="fa fa-edit"></i></a>
             		  <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="delete_std_data.php?id=11"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
                     <tr>
             	<td>Bryan</td>
             	<td>21211122</td>
             	<td>400l</td>
              <td>edu</td>
              <td>2023-11-10</td>
             	<td>
             	    <a class="btn btn-sm btn-primary" href="edit_std_data.php?id=12"><i class="fa fa-edit"></i></a>
             		  <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="delete_std_data.php?id=12"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
        	</tbody>
</table> -->
        <table class="table table-bordered table-hover project_table">
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Project Case</th>
            <th>Project Level</th>
            <th>Field of Interest</th> <!-- Add this line -->
            <th>Allocation Status</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
                    <tr>
                <td>Project Allocation System</td>
                <td>Project Allocation System</td>
                <td>400L</td>
                <td>Web Dev</td> <!-- Add this line -->
                <td><label class="text-success">Available</label></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editproject.php?id=11"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="deleteproject.php?id=11"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                    <tr>
                <td>Sample</td>
                <td>Sample</td>
                <td>400L</td>
                <td>AI</td> <!-- Add this line -->
                <td><label class="text-success">Available</label></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editproject.php?id=12"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="deleteproject.php?id=12"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                    <tr>
                <td>Sample</td>
                <td>Sample</td>
                <td>400L</td>
                <td>Cybersecurity</td> <!-- Add this line -->
                <td><label class="text-success">Available</label></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editproject.php?id=13"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="deleteproject.php?id=13"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                    <tr>
                <td>Sample</td>
                <td>Sample</td>
                <td>400L</td>
                <td>Data Science</td> <!-- Add this line -->
                <td><label class="text-success">Available</label></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editproject.php?id=14"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="deleteproject.php?id=14"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                    <tr>
                <td>Sample</td>
                <td>Sample</td>
                <td>400L</td>
                <td>Software Dev</td> <!-- Add this line -->
                <td><label class="text-success">Available</label></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editproject.php?id=15"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="deleteproject.php?id=15"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                    <tr>
                <td>Sample</td>
                <td>Sample</td>
                <td>400L</td>
                <td>Data Science</td> <!-- Add this line -->
                <td><label class="text-success">Available</label></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editproject.php?id=45"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="deleteproject.php?id=45"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                    <tr>
                <td>Sample</td>
                <td>Sample</td>
                <td>400L</td>
                <td>AI</td> <!-- Add this line -->
                <td><label class="text-success">Available</label></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editproject.php?id=44"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="deleteproject.php?id=44"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
                    <tr>
                <td>Sample</td>
                <td>Sample</td>
                <td>400L</td>
                <td>Cloud Computing</td> <!-- Add this line -->
                <td><label class="text-success">Available</label></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editproject.php?id=43"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="deleteproject.php?id=43"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            </tbody>
</table>
    </div>
</div>

<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "addstudent.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl("Student successfully added & assigned", { header: 'Success !!' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
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
<script>
  $.ajax({
    type: 'POST',
    url: 'assign.php',
    data: 'action=yes',
    cache: false,
    dataType: 'json',
    success: function (data) {
        if (data.length === 0) {
            // Handle the case where no suitable project is found
            console.error('No suitable project found.');
        } else {
            setTimeout(function () {
                var project = data[0]['project_name'];
                var case_ = data[0]['project_case'];
                var id = data[0]['id'];

                $("#project_title").html("");
                $("#project_title").append(project + "<br>" + case_);
                $("#project_id").val(id);
            }, 500);
        }
    }
});
</script>

<script>
    // Example of how to use jQuery to refresh the project title
    $(document).ready(function () {
    $('#refresh_button').on('click', function (e) {
        e.preventDefault();
        // Call the function to generate and display the project title
        generateProjectTitle();
    });

    function generateProjectTitle() {
        // Replace this with your actual AJAX call to the server-side script
        // to generate the project title based on the selected field of interest
        $.ajax({
            url: 'generate_project_title.php',
            method: 'POST',
            data: { field_of_interest: $('#field_of_interest').val() },
            success: function (response) {
                // Update the project title element with the generated title
                $('#project_title').html(response.project_title);
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    }
});

</script>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>



<script>
$(document).ready(function(){
    $('.project_table').DataTable();
});

</script>
</body>
</html>
