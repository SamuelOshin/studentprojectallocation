<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];

    $query = $db->query("SELECT * FROM student WHERE id = '$id' ");
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($row as $r){
      $name = $r->name;
      $level = $r->level;
      $department = $r->department;
      $field_of_interest = $r->field_of_interest; 
      $matric = $r->matric;
      $id = $r->id;
    }
}else{
	header('location: create-project.php');
}
?>

<body>
<?php include 'dashboard_navbar.php'; ?>
<div class="dashboard-content">
<h3>Edit Students' Project</h3>
<?php include 'edit_std_form.php'; ?>
</div>
<?php include 'footer.php'; ?>