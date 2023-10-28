<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <h2>Add User</h2>
    <form method="post" action="save.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Add User">
    </form>

    <h2>User List</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php
        require_once 'db.php';

        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>". $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> | ";
                echo "<a href='delete.php?id=" . $row['id'] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No users found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
