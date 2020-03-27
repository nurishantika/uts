<?php
	include "versimu-koneksi.php";
		$versiku = $_POST['versiku'];
			//condition
			if(!empty($versiku)) {
				$sql = "INSERT INTO versiku (versiku)
				VALUES ('$versiku')";
				/*$result = mysqli_query($conn, $mysqli);*/

			if(mysqli_query($conn, $sql)) {
				header("Location: versimu-hasil.php");
			} else {
				echo "Input Gagal: " .$sql. "<br>" .mysqli_error($conn);
			}

			} else {
			if (empty($versiku)) {
				header("Location: alert.php");
					}
			}
mysqli_close($conn);
?>