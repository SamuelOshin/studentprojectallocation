<?php require 'init.php'; ?>

<?php include 'head.php'; ?>

<body>
    <?php include 'lecturer_nav.php'; ?>

    <div class="profile-inct m-2">
        <div class="prof-Head " >
            <h3>Students</h3>
        </div>

        <table class="table table-bordered table-hover project_table">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Matric</th>
                    <th>Level</th>
                    <th>Department</th>
                    <th>Date Joined</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $lecturerId = $_SESSION['lecturer_id'];

                $query = "SELECT * FROM student WHERE lecturer_id = :lecturerId";
                $statement = $db->prepare($query);
                $statement->bindParam(':lecturerId', $lecturerId);
                $statement->execute();
                $students = $statement->fetchAll(PDO::FETCH_OBJ);

                foreach ($students as $student) {
                    $name = $student->name;
                    $department = $student->department;
                    $level = $student->level;
                    $matric = $student->matric;
                    $date = $student->date;
                ?>
                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $matric; ?></td>
                        <td><?php echo $level ?></td>
                        <td><?php echo $department ?></td>
                        <td><?php echo $date; ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="edit_std_data.php?id=<?php echo $student->id; ?>"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="delete_std_data.php?id=<?php echo $student->id; ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
    <?php include 'footer.php'; ?>