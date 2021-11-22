<?php
// Create database connection using config file
require("./config/db_config.php");

// Getting data from database
$query = "SELECT * FROM films ORDER BY created_at DESC";
$films = mysqli_query($mysqli, $query);

?>
<!doctype html>
<html lang="en">

<head>

    <?php
    include('./src/template/header.php');
    ?>
    <title>Film Database</title>

</head>

<body>
    <div class="container row">
        <div class="col-9 mx-auto">
            <table class="table">
                <h2 style="text-align: center;">Film & TV Show List</h2>
                <hr>
                <a href="./src/crud/create.php" role="button" class="btn btn-dark">Add New Data</a>
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
                    <?php foreach ($films as $key => $film) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?>.</th>
                        <td><?= $film['title'] ?></td>
                        <td><?= $film['type'] ?></td>
                        <td><?= $film['genre'] ?></td>
                        <td><?= $film['country'] ?></td>
                        <td><?= $film['year'] ?></td>
                        <td>
                            <a class="btn btn-info" href="./src/crud/edit.php?id=<?= $film['id'] ?>" role=" button"
                                <img><i class='fas fa-edit'></i></a>
                            <a class="btn btn-danger" href="./src/crud/delete.php?id=<?= $film['id'] ?>" role="button"
                                onclick="return confirm('Are you sure you want to delete this user?');"><i
                                    class='fas fa-eraser'></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>