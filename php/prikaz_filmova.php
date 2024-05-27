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

// SQL upit za selektovanje svih filmova
$sql = "SELECT * FROM filmovi";
$result = $conn->query($sql);

// Prikazivanje rezultata
if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Naziv</th>";
    echo "<th>Režiser</th>";
    echo "<th>Žanr</th>";
    echo "<th>Godina</th>";
    echo "<th>Opis</th>";
    echo "<th>Budžet</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["naziv"]."</td>";
        echo "<td>".$row["reziser"]."</td>";
        echo "<td>".$row["zanr"]."</td>";
        echo "<td>".$row["godina"]."</td>";
        echo "<td>".$row["opis"]."</td>";
        echo "<td>".$row["budzet"]."</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "Nema dostupnih filmova";
}
$conn->close();
?>
