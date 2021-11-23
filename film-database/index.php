<?php
// Create database connection using config file
require("./config/db_config.php");

// Fetching data from database
$query = "SELECT * FROM films ORDER BY created_at DESC";
$films = mysqli_query($mysqli, $query);

?>
<!doctype html>
<html lang="en">

<head>

    <?php
    // Navigation Bar
    include('./src/template/header.php');
    ?>
    <title>Film Database</title>

</head>

<body>
    <div class="container row">
        <div class="col-9 mx-auto">
            <!-- Alert for deleting data -->
            <?php if (isset($_GET['delete'])) : ?>
            <div class="alert alert-success" role="alert">
                Data Deleted Successfully
            </div>
            <?php endif ?>

            <table class="table">
                <!-- Displaying Page Title -->
                <h2 style="text-align: center;">Film & TV Show List</h2>
                <hr>
                <a href="./src/crud/create.php" role="button" class="btn btn-dark"><i class='far fa-plus-square'></i>
                    Add New
                    Data</a>
                <!-- Display Table -->
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Country</th>
                        <th scope="col">Year</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Display Data from Database
                    foreach ($films as $key => $film) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?>.</th>
                        <td><?= $film['title'] ?></td>
                        <td><?= $film['typeData'] ?></td>
                        <td><?= $film['genre'] ?></td>
                        <td><?= $film['country'] ?></td>
                        <td><?= $film['yearDate'] ?></td>
                        <td>
                            <!-- Edit Button -->
                            <a class="btn btn-info" href="./src/crud/edit.php?id=<?= $film['id'] ?>" role=" button"><i
                                    class='fas fa-edit'></i></a>
                            <!-- Delete Button-->
                            <a class="btn btn-danger" href="./src/crud/delete.php?id=<?= $film['id'] ?>" role="button"
                                onclick="return confirm('Are you sure you want to delete this data?');"><i
                                    class='fas fa-eraser'></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap Necessary Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>