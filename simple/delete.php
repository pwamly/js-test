<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: index.php"); // Redirect to index.php after successful deletion
        exit();
    } else {
        echo 'Failed to delete user.';
    }
} else {
    echo 'Invalid request.';
}
?>
