<?php
include('../connection/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $id = intval($_POST['id']);
    $book_title = $conn->real_escape_string($_POST['book_title']);
    $book_author_name = $conn->real_escape_string($_POST['book_author_name']);
    $book_published_year = intval($_POST['book_published_year']);
    $genre = $conn->real_escape_string($_POST['genre']);

    // Update the book in the database
    $sql = "UPDATE books SET 
            book_title = '$book_title', 
            book_author_name = '$book_author_name', 
            book_published_year = $book_published_year, 
            genre = '$genre'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Book updated successfully.</p>";
       
        header("Location: ../pages/display.php");
        exit;
    } else {
        echo "<p>Error updating book: " . $conn->error . "</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
    exit;
}
?>
   





