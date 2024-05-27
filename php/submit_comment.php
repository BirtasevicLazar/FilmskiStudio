<?php
include 'dbconnection.php';

$film_id = $_POST['film_id'];
$ime = mysqli_real_escape_string($con, $_POST['ime']);
$komentar = mysqli_real_escape_string($con, $_POST['komentar']);

$query = "INSERT INTO komentari (ime, komentar, film_id) VALUES ('$ime', '$komentar', '$film_id')";
mysqli_query($con, $query);

// Ispravljena putanja za redirekciju
header("Location: ../film_details.php?id=" . $film_id);
?>
```
</rewritten_file><|eot_id|>

