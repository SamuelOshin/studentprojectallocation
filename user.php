<?php require 'init.php'; ?>
<?php include 'head.php'; ?>

<body>
	<?php include 'dashboard_navbar.php'; ?>
	<div class="content">
		<section class="profile inct m-3">
			<div class="gen-Head">
				<h3>Add Admin</h3>
			</div>
			<div class="row">
				<div class="col-md-4">
					<form method="post">
						<div class="form-group">
							<label class="control-label">Username:</label>
							<input type="text" name="username" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label">Password:</label>
							<input type="text" name="password" class="form-control" required>
						</div>

						<button name="submit" class="btn btn-outline-primary mt-1">Submit</button>
					</form>
				</div>
				<?php
				if (isset($_POST['submit'])) {
					$username = $_POST['username'];
					$password = $_POST['password'];

					$query = $db->query("INSERT INTO auth(username,password)VALUES('$username','$password') ");

					if ($query) { ?>
						<script>
							alert("User added !");
							window.location = 'user.php';
						</script>
				<?php

					}
				}
				?>
				<div class="col-md-8">
					<table class="table table-bordered table-hover project_table">
						<thead>
							<tr>
								<th>S/N</th>
								<th>Username</th>
								<th>Password</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$query = $db->query("SELECT * FROM auth");
							$rows = $query->fetchAll(PDO::FETCH_OBJ);
							foreach ($rows as $row) {
								$name = $row->username;
								$id = $row->id;
								$passkey = $row->password;
							?>
								<tr>
									<td><?php echo $id; ?></td>
									<td><?php echo $name; ?></td>
									<td><?php echo $passkey; ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</section>

		<section class="profile inct m-3">
			<div class="gen-Head">
				<h3>Add Lecturer</h3>
			</div>
			<div class="row">
				<div class="col-md-4">
					<form method="post">
						<div class="form-group">
							<label class="control-label">Lecturer Name:</label>
							<input type="text" name="name" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label">Lecturer Username:</label>
							<input type="text" name="username" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label">Lecturer Password:</label>
							<input type="text" name="password" class="form-control" required>
						</div>

						<button name="submitL" class="btn btn-outline-primary mt-1">Submit</button>
					</form>
				</div>
				<?php
				if (isset($_POST['submitL'])) {
					$name = $_POST['name'];
					$username = $_POST['username'];
					$password = $_POST['password'];

					$query = $db->query("INSERT INTO lecturer(name, username, password)VALUES('$name','$username','$password') ");

					if ($query) { ?>
						<script>
							alert("Lecturer added !");
							window.location = 'user.php';
						</script>
				<?php

					}
				}
				?>
				<div class="col-md-8">
					<table class="table table-bordered table-hover project_table">
						<thead>
							<tr>
								<th>S/N</th>
								<th>Lecturer Name</th>
								<th>Lecturer Username</th>
								<th>Lecturer Password</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$query = $db->query("SELECT * FROM lecturer");
							$rows = $query->fetchAll(PDO::FETCH_OBJ);
							foreach ($rows as $row) {
								$name = $row->name;
								$id = $row->id;
								$username = $row->username;
								$passkey = $row->password;
							?>
								<tr>
									<td><?php echo $id; ?></td>
									<td><?php echo $name; ?></td>
									<td><?php echo $username; ?></td>
									<td><?php echo $passkey; ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
<?php include 'footer.php'; ?>