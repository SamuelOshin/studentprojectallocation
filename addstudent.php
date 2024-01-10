<?php
 require 'init.php';
	$std_name = $_POST['std_name'];
	$std_dept = $_POST['std_dept'];
	$std_no = $_POST['std_no'];
	$std_class = $_POST['std_class'];
	$date = date('Y-m-d');
	$project_id = $_POST['project_id'];

	$query = $db->prepare("INSERT INTO student(name, department, level, matric, date, project_id) VALUES(:std_name, :std_dept, :std_class, :std_no, :date, :project_id)");
	$query->bindParam(':std_name', $std_name, PDO::PARAM_STR);
	$query->bindParam(':std_dept', $std_dept, PDO::PARAM_STR);
	$query->bindParam(':std_class', $std_class, PDO::PARAM_STR);
	$query->bindParam(':std_no', $std_no, PDO::PARAM_STR);
	$query->bindParam(':date', $date, PDO::PARAM_STR);
	$query->bindParam(':project_id', $project_id, PDO::PARAM_INT);

	if ($query->execute()) {
		$update = $db->prepare("UPDATE project SET allocation = 1 WHERE id = :project_id");
		$update->bindParam(':project_id', $project_id, PDO::PARAM_INT);
		if ($update->execute()) {
			echo 'true';
		} else {
			echo 'false';
		}
	} else {
		echo 'false';
	}

?>