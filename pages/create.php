<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 40px;
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            color: #333;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        form input {
            width: calc(100%); 
            padding: 12px;
            margin-top: 5px;
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
            width: 100%;
            color: #fff;
            border: none;
            margin-top: 20px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            background-color: rgb(70, 43, 226);
            border-radius: 5px;
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
    <div class="container">
        <h1>Book Details</h1>
        <form action="../database/create.php" method="post">
            <label for="Title">Book Title:
                <input type="text" placeholder="Title" id="book_title" name="book_title" required>
            </label>
            <label for="author">Author Name:
                <input type="text" placeholder="Name" id="book_author_name" name="book_author_name" required>
            </label>
            <label for="published_year">Published Year:
                <input type="number" placeholder="Year" id="book_published_year" name="book_published_year" required>
            </label>
            <label for="genre">Genre:
                <input type="text" placeholder="Genre" id="genre" name="genre" required>
            </label>
            <button type="submit">Add book</button>
        </form>
    </div>
</body>
</html>
