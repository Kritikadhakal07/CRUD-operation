<?php
include('../connection/config.php');

$records = [];

$sql = "SELECT * FROM books ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $records[] = $row; 
    }
} else {
    echo "<p>No records found.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: rgb(70, 43, 226);
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            color: rgb(70, 43, 226);
            text-decoration: none;
            margin-right: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
    
    
</head>
<body>
    <table border="1">
        <tr>
            
            <th>Title</th>
            <th>Author</th>
            <th>Publication Year</th>
            <th>Genre</th>
            <th>Actions</th>
        </tr>

        <!-- Check if records exist before trying to loop through them -->
        <?php if (!empty($records)): ?>
            <?php foreach ($records as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['book_title']); ?></td>
                <td><?php echo htmlspecialchars($row['book_author_name']); ?></td>
                <td><?php echo htmlspecialchars($row['book_published_year']); ?></td>
                <td><?php echo htmlspecialchars($row['genre']); ?></td>
                <td>
                    <a href="../pages/update.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="../database/delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No records found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>

       