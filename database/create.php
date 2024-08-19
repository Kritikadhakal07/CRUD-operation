<?php
include('../connection/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_title = $_POST['book_title'];
    $book_author_name = $_POST['book_author_name'];
    $book_published_year = $_POST['book_published_year'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO books (book_title, book_author_name, book_published_year, genre) 
            VALUES ('$book_title', '$book_author_name', '$book_published_year', '$genre')";

    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        header("Location: ../pages/display.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
