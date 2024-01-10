<div class="card" style="width: 40%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);">
        <div class="container">
            <h2 class="text-center">Student Login</h2>
            <form method="POST" action="login_process.php">
                <div class="form-group">
                    <label for="matric_number">Username:</label>
                    <input type="text" class="form-control" id="matric_number" placeholder="Input your Matric No" name="matric" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                
                <button type="submit" class="btn btn-sm btn-primary d-flex" style="margin: 20px auto">Log in</button>
            </form>
            <div class="text-center"><a class="small" href="#">Forgot Password?</a></div>
            <div class="text-center"><a class="small" href="register-student.php">Register As a Student</a></div>
        </div>
