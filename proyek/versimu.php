<!DOCTYPE html>
<html>
<head>
	<title> #Versiku? </title>
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
tr td input.kirim{
	padding: 10px 15px;
	text-align: center;
	display: inline-block;
	margin: 4px 2px;
	top: 88%;
	position: absolute;
	left: 43%;
}
tr td input.hapus{
	padding: 10px 15px;
	text-align: center;
	display: inline-block;
	margin: 4px 2px;
	top: 88%;
	position: absolute;
	left: 53%;
}
tr td input.input{
	padding: 20px 32px;
}
img.position {
	margin-top: 1%
}

	</style>
</head>
<body>
<header>
<div>
	<center> <ul>
		<li> <a href="beranda.php"> Beranda </a> </li>
		<li> <a href="nonton.php"> Nonton </a> </li>
		<li> <a href="masak.php"> Memasak </a> </li>
		<li> <a href="olahraga.php"> Olahraga </a></li>
		<li class="current"> <a href="versimu.php"> Versimu? </a> </li>
	</ul> </center>
</div>
<center> <img src="versimu-img4.jpg" class="position"> </img> </center>
<center>
<form method="POST" action="versimu-input.php"> 
	<table width="500" cellpadding="2" cellspacing="2">
				<tr>
					<td width="500" height="50"> #DirumahAja Versiku </td>
					<td> <input type="text" name="versiku" class="input"> </td>
				</tr>
						<tr>
							<td> <input type="submit" name="kirim" value="kirim" class="kirim">
								<input type="reset" name="hapus" value="hapus" class="hapus">
							</td>
						</tr>
	</table>
</form>
</center> 
</body>
</header>
</html>