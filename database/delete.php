<?php
include('../connection/config.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM books WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Book deleted successfully.</p>";
        header("Location: ../pages/display.php");
        exit;
    } else {
        echo "<p>Error deleting book: " . $conn->error . "</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
    exit;
}
?>