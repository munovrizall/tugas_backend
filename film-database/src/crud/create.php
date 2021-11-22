<html>

<head>
    <?php
    require('../../config/config_db.php');
    include('../templates/header.php');

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['submit'])) {

        $title = $_POST['title'];
        $typeData = $_POST['typeData'];  //Harus dibikin Dropdown
        $genre = $_POST['genre'];
        $country = $_POST['country'];
        $yearDate = $_POST['yearDate'];
        $role_id = 2;

        $query = "INSERT INTO users(title, typeData, genre, country, yearDate, role_id) VALUES('$title', '$typeData', '$genre', '$country', '$yearDate', '$role_id')";

        // Insert user data into table
        $result = mysqli_query($mysqli, $query);
    }
    ?>

    <title>Add User</title>
</head>
</head>

<body>
    <div class="container row">
        <div class="col-6 mx-auto">
            <a class="btn btn-primary mb-4" href="../../index.php" role="button">Go to Home</a>
            <h3>Add Film</h3>
            <hr>

            <form action="" method="POST">
                <?php if (isset($result) && $result === true) : ?>
                <div class="alert alert-success" role="alert">
                    successfully created Database of Film/TvShows
                </div>
                <?php endif ?>

                <div class="form-group">
                    <label for="title">Title of Film/TvShows</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Fiil in the title"
                        required>
                </div>
                <!-- PR buat DropDown, mulai sini-->
                <!-- link nya taruh di atas -->
                <!-- ini link bootstrap untuk select picker <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
                <!-- ini link css bootstrap untuk select picker <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> -->
                <select for="typeData" name="typeData" id="typeData" placeholder="Choose the type of data"
                    class="selectpicker">
                    <option>Film</option>
                    <option>Tv Shows</option>
                </select>

                <!-- <div class="form-group">
          <label for="typeData">Type</label>
          <input type="dropdown" name="typeData" class="form-control" id="typeData" placeholder="Choose the type of data" required>
        </div> -->

                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" name="genre" class="form-control" id="genre" placeholder="genre" required>
                </div>
                <div class="form-group">
                    <label for="country">Country from</label>
                    <input type="text" name="country" class="form-control" id="country" placeholder="Production Place"
                        required>
                </div>
                <div class="form-group">
                    <label for="yearDate">Year</label>
                    <input type="number" name="yearDate" class="form-control" id="yearDate"
                        placeholder="Production time" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
<!-- script buat select/dropdown -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
$('.my-selectpicker').selectpicker();
</script>

</html>