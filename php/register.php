<?php
// register.php
$host = 'localhost'; // ili IP adresa servera
$dbname = 'filmovi';
$user = 'root';
$password = '';
$conn = new mysqli($host, $user, $password, $dbname);

if (isset($_POST['korisnicko_ime'], $_POST['email'], $_POST['lozinka'])) {
    $korisnicko_ime = $_POST['korisnicko_ime'];
    $email = $_POST['email'];
    $lozinka = $_POST['lozinka']; // Lozinka nije hashovana

    $stmt = $conn->prepare("SELECT * FROM korisnici WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Email već postoji!";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO korisnici (korisnicko_ime, email, lozinka, verifikovan) VALUES (?, ?, ?, 0)");
    $stmt->bind_param("sss", $korisnicko_ime, $email, $lozinka);
    $stmt->execute();

    $to = $email;
    $subject = "Verifikacija emaila";
    $message = "Molimo kliknite na ovaj link da verifikujete vaš email: http://yourdomain.com/verify.php?email=" . urlencode($email);
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: no-reply@yourdomain.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    echo "Registracija uspešna! Molimo proverite vaš email za verifikaciju.";
    ?>
    <script>
        setTimeout(function() { window.location.href = '../admin_login.html'; }, 3000);
    </script>
    <?php
} else {
    echo "Molimo popunite sva polja.";
}
?>


