<?php
include 'dbconnection.php';
$queryText = $_GET['query'] ?? '';
$query = mysqli_query($con, "SELECT id, naziv, image_path FROM filmovi WHERE naziv LIKE '%" . mysqli_real_escape_string($con, $queryText) . "%'");
$result = [];
while ($row = mysqli_fetch_assoc($query)) {
    $result[] = ['id' => $row['id'], 'naziv' => $row['naziv'], 'image_path' => $row['image_path']];
}
echo json_encode($result);
?>

