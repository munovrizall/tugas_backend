<html>

<head>
    <?php
    // Create database connection using config file
    require('../../config/db_config.php');

    // Navigation Bar
    include('../template/header.php');

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['submit'])) {

        $title = $_POST['title'];
        $typeData = $_POST['typeData'];
        $genre = $_POST['genre'];
        $country = $_POST['country'];
        $yearDate = $_POST['yearDate'];
        $role_id = 2;

        $query = "INSERT INTO films(title, typeData, genre, country, yearDate, role_id) VALUES('$title', '$typeData', '$genre', '$country', '$yearDate', '$role_id')";

        // Insert user data into table
        $result = mysqli_query($mysqli, $query);
    }
    ?>

    <title>Add Data</title>
</head>

<body>
    <div class="container row">
        <div class="col-6 mx-auto">
            <!-- Displaying Page Title -->
            <h2 style="text-align: center;">Add New Data</h2>
            <hr>
            <!-- Home Button -->
            <a class="btn btn-dark mb-2 btn-lg" href="../../index.php" role="button"> <i class="fas fa-home"></i></a>

            <form action="" method="POST">
                <!-- Displaying alert if successfully adding data -->
                <?php if (isset($result) && $result === true) : ?>
                <div class="alert alert-success" role="alert">
                    Data Added Successfully
                </div>
                <?php endif ?>

                <div class="form-group mb-2">
                    <label for="title">
                        <h5>Title</h5>
                    </label>
                    <input type="text" name="title" class="form-control mb-2" id="title" placeholder="Movie Title"
                        required>
                </div>
                <div>
                    <h5>Type</h5>
                    <select for="typeData" name="typeData" id="typeData" placeholder="Select Movie Type"
                        class="selectpicker mb-2">
                        <option>Film</option>
                        <option>Tv Shows</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="genre">
                        <h5>Genre</h5>
                    </label>
                    <input type="text" name="genre" class="form-control" id="genre" placeholder="Movie Genre" required>
                </div>
                <div class="form-group mb-2">
                    <label for="country">
                        <h5>Country</h5>
                    </label>
                    <input type="text" name="country" class="form-control" id="country" placeholder="Production Place"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="yearDate">
                        <h5>Year</h5>
                    </label>
                    <input type="number" name="yearDate" class="form-control" id="yearDate"
                        placeholder="Production time" required>
                </div>
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