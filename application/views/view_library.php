<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/dataTables.min.css') ?>">
    <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/js/dataTables.min.js') ?>"></script>
</head>
<body>
<div class="container mt-4">
    <h2>Library Management System</h2>

    <!-- Logout Button -->
    <div class="d-flex justify-content-end">
        <a href="<?= site_url('auth/logout') ?>" class="btn btn-danger mb-3">Logout</a>
    </div>

    <!-- Add Book Button (Trigger for Modal) -->
    <div class="d-flex justify-content-start">
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addBookModal">+ Add Book</button>
    </div>

    <!-- Book List Section -->
    <div class="card mt-3">
        <div class="card-header">
            <a class="btn btn-link" data-bs-toggle="collapse" href="#bookListPanel">Book List</a>
        </div>
        <div id="bookListPanel" class="collapse show">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="bookTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Year</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($books as $book): ?>
                                <tr>
                                    <td><?= $book['id']; ?></td>
                                    <td><?= $book['title']; ?></td>
                                    <td><?= $book['author']; ?></td>
                                    <td><?= $book['published_year']; ?></td>
                                    <td><?= $book['status']; ?></td>
                                    <td>
                                        <?php if ($book['status'] == 'Available'): ?>
                                            <a href="<?= site_url('library/borrow/' . $book['id']) ?>" class="btn btn-success btn-sm">Borrow</a>
                                        <?php else: ?>
                                            <a href="<?= site_url('library/return_book/' . $book['id']) ?>" class="btn btn-warning btn-sm">Return</a>
                                        <?php endif; ?>
                                        <a href="<?= site_url('library/delete/' . $book['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions Section -->
    <div class="card mt-3">
        <div class="card-header">
            <a class="btn btn-link" data-bs-toggle="collapse" href="#transactionsPanel">Transactions</a>
        </div>
        <div id="transactionsPanel" class="collapse">
            <div class="card-body">
                <?php if (!empty($book_records)): ?>  
                    <table id="transactionsTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name of Borrower</th>
                                <th>Book Borrowed</th>
                                <th>Borrow Date</th>
                                <th>Return Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($book_records as $record): ?> 
                                <tr>
                                    <td><?= $record['borrower_name']; ?></td>
                                    <td><?= $record['book_title']; ?></td>
                                    <td><?= $record['borrow_date']; ?></td>
                                    <td><?= $record['return_date'] ? $record['return_date'] : 'Not Returned'; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>  <!-- If no records are found -->
                    <p>No records found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Add Book -->
<div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBookModalLabel">Add Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('library/add') ?>" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="Author" required>
                    </div>
                    <div class="mb-3">
                        <label for="published_year" class="form-label">Published Year</label>
                        <input type="number" name="published_year" class="form-control" id="published_year" placeholder="Year" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Book</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#bookTable').DataTable();
        $('#transactionsTable').DataTable();
    });
</script>

</body>
</html>
