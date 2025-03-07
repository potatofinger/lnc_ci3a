<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
</head>
<body>
    <h2>Library Management System</h2>
    <h3>Book List</h3>
    <table>
        <table border = "1">
            <thhead><tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th>YEAR</th>
                <th>STATUS</th>
            </tr></thead>

<tbody>
<?php foreach ($books as $book) { ?>
    <tr>
        <td><?= $book['id']; ?></td>
        <td><?= $book['title']; ?></td>
        <td><?= $book['author']; ?></td>
        <td><?= $book['published_year']; ?></td>
        <td><?= $book['status']; ?></td>
</tr>
<?php }?>
</table>
</body>
</html>
