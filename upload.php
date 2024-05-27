<?php
include('php/dbconnection.php');

if (!file_exists('../Images/')) {
    mkdir('../Images/', 0755, true); // Kreira direktorijum ako ne postoji
}

if(isset($_POST['submit'])){
    $naziv = $_POST['naziv'];
    $reziser = $_POST['reziser'];
    $zanr = $_POST['zanr'];
    $godina = $_POST['godina'];
    $opis = $_POST['opis'];
    $budzet = $_POST['budzet'];

    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '../Images/'.$file_name;

    // SQL upit za unos podataka o filmu
    $query = mysqli_query($con, "INSERT INTO filmovi (naziv, reziser, zanr, godina, opis, budzet, image_path) VALUES ('$naziv', '$reziser', '$zanr', '$godina', '$opis', '$budzet', '$folder')");

    if(move_uploaded_file($tempname, $folder)){
        echo "<h2>Film i slika su uspešno dodati.</h2>";
    } else {
        echo "<h2>Došlo je do greške pri uploadu slike.</h2>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unos Filma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>
<style>
    .navbar-transparent {
        background-color: rgba(0, 0, 0, 0.9); /* Transparent background */
    }
    .form-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #f8f8f8;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-label {
        display: block;
        margin-bottom: 5px;
    }
    .form-control {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(0,123,255,0.6);
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-transparent">
    <a class="navbar-brand" href="index.php">
        <img src="Images/FilmskiStudio2.png" alt="Filmski Studio" height="30">
    </a>
</nav>
<div class="form-container">
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="form-label" for="naziv">Naziv filma:</label>
            <input type="text" class="form-control" id="naziv" name="naziv" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="reziser">Režiser:</label>
            <input type="text" class="form-control" id="reziser" name="reziser" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="zanr">Žanr:</label>
            <input type="text" class="form-control" id="zanr" name="zanr">
        </div>
        <div class="form-group">
            <label class="form-label" for="godina">Godina:</label>
            <input type="number" class="form-control" id="godina" name="godina">
        </div>
        <div class="form-group">
            <label class="form-label" for="opis">Opis filma:</label>
            <textarea class="form-control" id="opis" name="opis" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="budzet">Budžet:</label>
            <input type="number" class="form-control" id="budzet" name="budzet">
        </div>
        <div class="form-group">
            <label class="form-label" for="image">Slika:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Dodaj film</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

