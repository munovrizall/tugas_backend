<html>

<head>
    <?php
    // Create database connection using config file
    require('../../config/db_config.php');
    // Navigation Bar
    include('../template/header.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM films WHERE id = $id";
    $films = mysqli_query($mysqli, $query);

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $typeData = $_POST['typeData'];
        $genre = $_POST['genre'];
        $country = $_POST['country'];
        $yearDate = $_POST['yearDate'];

        $query = "UPDATE films SET title='$title', typeData = '$typeData', genre = '$genre', country  = '$country', yearDate  = '$yearDate'  WHERE id = '$id'";

        $result = mysqli_query($mysqli, $query);
    }
    ?>

    <title>Edit Data</title>
</head>
</head>

<body>
    <div class="container row">
        <div class="col-6 mx-auto">
            <!-- Displaying page title -->
            <h2 style="text-align: center;">Edit Data</h2>
            <hr>
            <!-- Home Button -->
            <a class="btn btn-dark mb-2 btn-lg" href="../../index.php" role="button"> <i class="fas fa-home"></i></a>
            <form action="" method="POST">
                <!-- Displaying alert if successfully editing data -->
                <?php if (isset($result) && $result === true) : ?>
                <div class="alert alert-success" role="alert">
                    Data Edited Successfully
                </div>
                <?php endif ?>

                <?php foreach ($films as $film) : ?>
                <div class="form-group mb-2">
                    <label for="title">
                        <h5>Title</h5>
                    </label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Movie Title"
                        value="<?= $film['title'] ?>" required>
                </div>
                <h5>Type</h5>
                <select for="typeData" name="typeData" id="typeData" placeholder="Choose the type of data"
                    class="selectpicker mb-2">
                    <option>Film</option>
                    <option>Tv Shows</option>
                </select>
                <div class="form-group mb-2">
                    <label for="genre">
                        <h5>Genre</h5>
                    </label>
                    <input type="text" name="genre" class="form-control" id="genre" placeholder="Genre"
                        value="<?= $film['genre'] ?>" required>
                </div>
                <div class="form-group mb-2">
                    <label for="country">
                        <h5>Country</h5>
                    </label>
                    <input type="text" name="country" class="form-control" id="country" placeholder="Production Place"
                        value="<?= $film['country'] ?>" required>
                </div>
                <div class="form-group mb-2">
                    <label for="yearDate">
                        <h5>Year</h5>
                    </label>
                    <input type="number" name="yearDate" class="form-control" id="yearDate"
                        placeholder="Production Time" value="<?= $film['yearDate'] ?>" required>
                </div>

                <?php endforeach ?>
                <!-- Submit Button -->
                <div class="d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-info btn-lg"><i
                            class="fas fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- Dropdown Script -->
<?php
include('../template/dropdown.html')
?>

</html>