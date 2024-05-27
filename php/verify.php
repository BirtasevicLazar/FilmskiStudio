<?php
// verify.php
$host = 'localhost'; // ili IP adresa servera
$dbname = 'filmovi';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $dbname);
$email = $_GET['email'];

$stmt = $conn->prepare("UPDATE korisnici SET verifikovan = 1 WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

echo "Vaš email je verifikovan! Možete se prijaviti.";
?>


