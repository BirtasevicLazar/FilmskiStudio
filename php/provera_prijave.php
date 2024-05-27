<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filmovi";

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Konekcija nije uspela: " . $conn->connect_error);
}

// Provera da li su postavljeni korisničko ime i lozinka
if (isset($_POST['korisnicko_ime']) && isset($_POST['lozinka'])) {
    $korisnicko_ime = $conn->real_escape_string($_POST['korisnicko_ime']);
    $lozinka = $conn->real_escape_string($_POST['lozinka']);

    // Kreiranje SQL upita
    $sql = "SELECT * FROM korisnici WHERE korisnicko_ime='$korisnicko_ime' AND lozinka='$lozinka'";
    $result = $conn->query($sql);

    // Provera da li postoji korisnik sa unetim kredencijalima
    if ($result->num_rows > 0) {
        // Ako korisnik postoji, preusmeri na admin.html
        header('Location: ../upload.php');
        exit();
    } else {
        // Ako korisnik ne postoji, vrati na login stranu sa porukom o grešci
        echo "Neispravno korisničko ime ili lozinka!";
    }
} else {
    // Ako podaci nisu poslati, vrati na login stranu
    echo "Molimo unesite korisničko ime i lozinku!";
}

$conn->close();
?>

