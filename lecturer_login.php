<div class="card" style="width: 40%;">
<h3 class="text-center">Lecturer Login</h3>
    <form method="post" autocomplete="off" action="login.php" id="lecturer_login">
        <!-- Include a hidden input to signify the login as a lecturer -->
        <input type="hidden" name="login_as_lecturer" value="true">

        <div class="form-group">
            <label class="control-label">Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="control-label">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-sm btn-primary d-flex" style="margin: 20px auto">Log in as Lecturer</button>
    </form>
    <div class="text-center"><a class="small" href="password.php">Forgot Password?</a></div>
</div> 

<script>
$(document).ready(function(){
$("#lecturer_login").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "login.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Loading Project Files Please Wait......", { sticky: true });
				$.jGrowl("Welcome to Student's Project Management System", { header: 'Access Granted' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'lecturer_dashboard.php'  }, delay);  
			}else
			{
			    $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
			}
			}
		});
		return false;
	});
});
</script>
