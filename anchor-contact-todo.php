<?php
include('inc/header.php');
?>


<?php
include('connection.php');
$sql = "SELECT * FROM users"; 
$result = $conn->query($sql); 
?>



<h3 class="text-center mt-2">All Todos</h3>
<div class="border p-4 rounded shadow-lg">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_object()) {
                    ?>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->Name ?></td>
                        <td><?= $row->Email ?></td>
                        <td><?= $row->Subject ?></td>
                        <td><?= $row->Message ?></td>
                        <!-- <td>
                            <form action="view_todo.php" method="POST">
                                <button type="submit" class="btn btn-sm btn-danger">View</button>
                            </form>
                        </td> -->
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='4'>No tasks found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include('inc/footer.php');
?>
