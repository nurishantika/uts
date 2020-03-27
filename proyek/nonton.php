<!DOCTYPE html>
<html>
<head>
	<title> #NontonAja </title>
	<style type="text/css">
		*{
	margin: 0px;
	padding: 0px;
	font-family: montserrat;
	background-color: #ebebeb;
}
header{
	height: 100vh;
	background-size: cover;

}
ul{
	padding-top: 10%;
}
ul li{
	display: inline-block;
}
ul li.current a{
	color: #ffff;
	background-color: #ffc03f;
}
ul li a{
	color: #ffc03f;
	padding: 5px 20px;
}
ul li a:hover{
	background-color: #fff;
	color: #ffc03f;
	padding: 5px 20px;
	margin-top: 10px;
}
ul li.button a{
	background-color: #fff;
	color: #ffc03f;
	margin-top: 10px;
}
img.position {
	margin-top: 1%
}
table.tabel {
	text-align: center;
  	border: 1px transparent;
}
table th {
  padding: 15px 35px;
  background: #ffc03f;
  color: #fff;
}
table tr {
  text-align: center;
  padding-left: 20px;
}
table td {
  padding: 15px 35px;
  background: #fafafa;
}

	</style>
</head>
<body>
<header>
<div>
	<center> <ul>
		<li> <a href="beranda.php"> Beranda </a> </li>
		<li class="current"> <a href="nonton.php"> Nonton </a> </li>
		<li> <a href="masak.php"> Memasak </a> </li>
		<li> <a href="olahraga.php"> Olahraga </a> </li>
		<li> <a href="versimu.php"> Versimu? </a> </li>
	</ul> </center>
</div>
	<img src="nonton-img9.jpg" class="position"> </img>
<center> <h2> Yuk, lihat film apa yang layak kamu tonton! </h2> </center>
<br> <br> 
<?php
include 'nonton-koneksi.php';
$sql = "SELECT 	*  FROM nonton";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
	<title></title>
</head>
<body>
<center> <table class="tabel">
	<tr>
		<th width="100"> NO </th>
		<th width="400"> JUDUL FILM </th>
		<th width="200"> GENRE FILM </th>
	</tr>
	<?php
	while($hasil = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$hasil['NO']."</td>";
		echo "<td>".$hasil['JUDUL_FILM']."</td>";
		echo "<td>".$hasil['GENRE_FILM']."</td>";
		echo "</tr>";
	}
	?>
</table>
</center>
<br> <br> <br>
</body>
</html>