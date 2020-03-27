<!DOCTYPE html>
<html>
<head>
	<title> #MasakAja </title>
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
img.position {
	margin-top: 1%;
}

	</style>
</head>
<body>
<header>
<div>
	<center> <ul>
		<li> <a href="beranda.php"> Beranda </a> </li>
		<li> <a href="nonton.php"> Nonton </a> </li>
		<li class="current"> <a href="masak.php"> Memasak </a> </li>
		<li> <a href="olahraga.php"> Olahraga </a></li>
		<li> <a href="Versimu.php"> Versimu? </a> </li>
	</ul> </center>
</div>
<img src="masak-img4.jpg" class="position"> </img>
<center> <h2> Mau lihat apa yang bisa kamu masak dirumah? </h2> </center>
<br> <br>
</body>
</header>
</html>
<html>
<head>
<script type="text/javascript" src="jquery-3.4.1.min.js"> </script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".sembunyi").click(function(){
		$("#foto").hide("slow")});
		$(".tampil").click(function(){
		$("#foto").show("slow")}); 
				$(".sembunyi2").click(function(){
				$("#foto2").hide("slow")});
				$(".tampil2").click(function(){
				$("#foto2").show("slow")});
					$(".sembunyi3").click(function(){
					$("#foto3").hide("slow")});
					$(".tampil3").click(function(){
					$("#foto3").show("slow")});
	});
</script>
</head>
<body>
<center>
<button class="sembunyi"> Sembunyikan </button>
<button class="tampil"> Tampilkan </button> <br>
<br> Paling mudah dan murah, ya Nasi Goreng! <br>
<br> <p> <img id="foto" src="satu.jpg"> </p>

<br> <br> <button class="sembunyi2"> Sembunyikan </button>
<button class="tampil2"> Tampilkan </button> <br>
<br> Ngga pengen yang berat? Pisang Nugget yang lagi trend nih! <br>
<br> <p> <img id="foto2" src="dua.jpg"> </p>

<br> <br> <button class="sembunyi3"> Sembunyikan </button>
<button class="tampil3"> Tampilkan </button> <br>
<br> Es Kopi Susu yang seger dan lagi booming, pas buat dicoba! <br>
<br> <p> <img id="foto3" src="tiga.jpg"> </p>
</center>
</body>
</html>