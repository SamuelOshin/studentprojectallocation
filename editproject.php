<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];

    $query = $db->prepare("SELECT * FROM project WHERE id = ?");
$query->execute([$id]);

$row = $query->fetchAll(PDO::FETCH_OBJ);
foreach ($row as $r) {
    $project_name = $r->project_name;
    $project_case = $r->project_case;
    $project_level = $r->project_level;
    $field_of_interest = $r->field_of_interest; // Add this line
}

}else{
	header('location: create-project.php');
}
?>

<body>
<?php include 'dashboard_navbar.php'; ?>
<div class="dashboard-content">
<h3>Edit Students' Project</h3>
<?php include 'edit-form.php'; ?>
</div>
<?php include 'footer.php'; ?>
