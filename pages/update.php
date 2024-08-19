<?php
include('../connection/config.php');
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM books WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $book = $result->fetch_assoc();
    } else {
        echo "<p>Book not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid request.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 80px;
        }
        .container {
            max-width: 600px;
           margin: auto;
            padding: 100px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-bottom: 10px;
            font-weight: bold;
        }
        form input {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            box-sizing: border-box;
        }
        form input:focus {
            border-color: rgb(70, 43, 226);
            outline: none;
            box-shadow: 0 0 5px rgba(70, 43, 226, 0.3);
        }
        button {
            padding: 12px;
            background-color: rgb(70, 43, 226);
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        button:hover {
            background-color: rgb(50, 30, 180);
            transform: scale(1.05);
        }
        button:active {
            background-color: rgb(40, 20, 140);
            transform: scale(1);
        }
    </style>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="../database/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($book['id']); ?>">

        <label for="title">Title:</label>
        <input type="text" id="title" name="book_title" value="<?php echo htmlspecialchars($book['book_title']); ?>" required><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="book_author_name" value="<?php echo htmlspecialchars($book['book_author_name']); ?>" required><br>

        <label for="year">Publication Year:</label>
        <input type="number" id="year" name="book_published_year" value="<?php echo htmlspecialchars($book['book_published_year']); ?>" required><br>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="<?php echo htmlspecialchars($book['genre']); ?>" required><br>
        <input type="text" id="genre" name="genre" value="dhscjdsh" required>
        

        <button type="submit">Update Book</button>
    </form>
</body>
</html>