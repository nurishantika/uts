<?php
//menu nonton
include 'nonton-koneksi.php';
$sql = "CREATE TABLE nonton(
NO INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
JUDUL_FILM VARCHAR(30) NOT NULL,
GENRE_FILM VARCHAR(30) NOT NULL)";

/*include "nonton-koneksi.php";
$sql = "INSERT INTO nonton (JUDUL_FILM, GENRE_FILM)
VALUES ('Harry Potter Series', 'Fantasy/Adventure')";

//menu versimu
/*include 'versimu-koneksi.php';
$sql = "CREATE TABLE versiku(
no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
versiku VARCHAR(100) NOT NULL)";*/

if (mysqli_query($conn, $sql)) {
	echo "New RECORD Created";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>