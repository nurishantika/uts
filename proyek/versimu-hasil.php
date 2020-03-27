<?php
	include "versimu-koneksi.php";
	$sql = "SELECT * FROM versiku";
	$result = mysqli_query($conn, $sql);
?>
<html>
<head>
	<title> #DirumahAja Versimu! </title>
	<style type="text/css">
	*{
	margin: 0px;
	padding: 0px;
	font-family: montserrat;
	background-color: #ebebeb;
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
img.img{
	margin-top: 1%
}
	</style>
<body>
	<div>
	<center> <ul>
		<li> <a href="beranda.php"> Beranda </a> </li>
		<li> <a href="nonton.php"> Nonton </a> </li>
		<li> <a href="masak.php"> Memasak </a> </li>
		<li> <a href="olahraga.php"> Olahraga </a></li>
		<li class="current"> <a href="versimu.php"> Versimu? </a> </li>
	</ul> <center>
</div>
<img src="versimu-img.jpg" class="img"> </img>
<center> 
	<table width="700" border="1" class="tabel">
		<tr>
			<th width="100"> No </th>
			<th width="600"> Versiku </th>
		</tr>
	<?php
	while ($hasil = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$hasil['no']."</td>";
		echo "<td>".$hasil['versiku']."</td>";
		echo "</tr>";
	}
	?>
	</table> <br>
	<?php
	date_default_timezone_set("Asia/Jakarta");
	echo date ("l, d F Y / g:i:s a");
	?>
	<br> <br>
</center>
</body>
</html>