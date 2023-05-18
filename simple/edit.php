<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);

    $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: index.php"); // Redirect to index.php after successful update
        exit();
    } else {
        echo 'Failed to update data.';
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        ?>

        <h2>Edit User</h2>
        <form method="post" action="edit.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>

            <input type="submit" value="Update User">
        </form>

        <?php
    } else {
        echo 'User not found.';
    }
} else {
    echo 'Invalid request.';
}
?>
