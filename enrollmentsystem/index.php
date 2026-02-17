<?php
include("templates/header.php");
require_once 'includes/control.inc.php';
?>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Student ID</th>
            <th>Course</th>
            <th>First Name</th>
            <th>M.I</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Date Enrolled</th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($students as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars($student['student_id']); ?></td>
                <td><?php echo htmlspecialchars($student['course_name']); ?></td>
                <td><?php echo htmlspecialchars($student['f_name']); ?></td>
                <td><?php echo htmlspecialchars($student['m_name']); ?></td>
                <td><?php echo htmlspecialchars($student['l_name']); ?></td>
                <td><?php echo htmlspecialchars($student['age']); ?></td>
                <td><?php echo htmlspecialchars($student['date_enrolled']); ?></td>
            </tr>
        <?php endforeach;
        ?>
    </tbody>
</table>
<form action="includes/student.inc.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add students</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="course_id">Course</label>
                        <select name="course_id" class="form-control" required>
                            <option value="">Select Course</option>
                            <option value="1">BSIS</option>
                            <option value="2">CPE</option>
                            <option value="3">PSYCHOLOGY</option>
                            <option value="4">TOURISM</option>
                            <?php foreach ($courses as $course): ?>
                                <option value="<?php echo htmlspecialchars($course['id']); ?>">
                                    <?php echo htmlspecialchars($course['course_name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="f_name">First name</label>
                        <input type="text" name="f_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="m_name">Middle initial</label>
                        <input type="text" name="m_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="l_name">Last name</label>
                        <input type="text" name="l_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" class="form-control">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
include("templates/footer.php");
?>