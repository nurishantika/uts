<!DOCTYPE html>
<html>
<head>
	<title> #DirumahAja </title>
	<style type="text/css">
		*{
	margin: 0px;
	padding: 0px;
	font-family: montserrat;
	background-color: #ebebeb;
}
ul{
	float: left;
	margin-top: 90px;
	padding-left: 25%;
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

	</style>
</head>
<body>
<header>
<div>
	<ul>
		<li> <a href="beranda.php"> Beranda </a> </li>
		<li> <a href="nonton.php"> Nonton </a> </li>
		<li> <a href="main.php"> Main </a> </li>
		<li> <a href="masak.php"> Memasak </a> </li>
		<li> <a href="olahraga.php"> Olahraga </a></li>
		<li class="current"> <a href="versimu.php"> Versimu? </a> </li>
	</ul>
</div>
</body>
</header>
</html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body { color: #18191e;
		background: #947d85;
		font-family: calibri; }
</style> </head>
<body>
	<br> <center> <H1> Kalau #DirumahAja Versi Kamu? </H1> </center> <br>
<form method="POST" action="versimu-input.php"> 
	<center> <font size="3"> Nama: <input type="text" name="nama"> <br> <br>
		Jenis Kelamin: <input type="radio" name="man" value="Laki-laki"> Laki-laki
		<input type="radio" name="woman" value="Perempuan"> Perempuan <br> <br>
		#DirumahAja Versiku <textarea name="versiku" cols="45" rows="5"> </textarea>
		<input type="button" name="kirim"> 
	</font> </center>
</form>
</body>
</html>