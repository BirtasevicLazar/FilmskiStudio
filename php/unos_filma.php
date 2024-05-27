<?php
// Povezivanje sa bazom podataka
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filmovi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Konekcija nije uspela: " . $conn->connect_error);
}

// Provera da li su podaci poslati iz forme
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prihvatanje podataka iz forme
    $naziv = $_POST['naziv'];
    $reziser = $_POST['reziser'];
    $zanr = $_POST['zanr'];
    $godina = $_POST['godina'];
    $opis = $_POST['opis'];
    $budzet = $_POST['budzet'];

    // Priprema SQL upita za unos novog filma
    $sql = "INSERT INTO filmovi (naziv, reziser, zanr, godina, opis, budzet) VALUES ('$naziv', '$reziser', '$zanr', $godina, '$opis', $budzet)";

    if ($conn->query($sql) === TRUE) {
        echo "Novi film je uspešno dodat!";
    } else {
        echo "Greška prilikom dodavanja filma: " . $conn->error;
    }
}

// Zatvaranje konekcije sa bazom podataka
$conn->close();
?>
