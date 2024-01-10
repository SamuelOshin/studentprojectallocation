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
        <?php
        $query = $db->query("SELECT * FROM project");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        foreach ($rows as $row) {
            $project_name = $row->project_name;
            $project_case = $row->project_case;
            $project_level = $row->project_level;
            $field_of_interest = $row->field_of_interest; // Add this line
            $allocation = $row->allocation;
        ?>
            <tr>
                <td><?php echo $project_name; ?></td>
                <td><?php echo $project_case; ?></td>
                <td><?php echo $project_level ?></td>
                <td><?php echo $field_of_interest ?></td> <!-- Add this line -->
                <td><?php echo ($allocation == 0) ? '<label class="text-success">Available</label>' : '<label class="text-danger">Unavailable</label>' ?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editproject.php?id=<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="deleteproject.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
