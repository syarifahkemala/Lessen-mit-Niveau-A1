<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
<style>

.container {
  position: relative;
  width: 70%;
}
.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
  width:200px;
}

.text {
  white-space: break-word; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
table{
	margin-top: 0%;
	margin-left: 0%;
	border-spacing: 50px;
	padding: 15px;
	position: fixed;
}
.user{
	margin-top: 25px;
	margin-left: 20px;

}
.welcome{
	margin-top: -49px;
	margin-left:100px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 20px;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   height: 30%;
   width: 100%;
   background-color: #666699;
   color: white;
   text-align: center;
}
.img-footer{
	margin-top:28px;
}
.cp{
	margin-left:70%;
	margin-top: -9%;
	text-align: left;
	font-size: 19px;
}
.desc{
	text-align: left;
	margin-left: 10%;
	margin-top: -9%;
	overflow-wrap: break-word;
	width:320px;
	font-size: 19px;
}
</style>
</head>
<body>
	<?php
	session_start();

		include 'koneksi.php';
		if(!isset($_SESSION['username']))
		{
			header('location:login.php');
		}

		if(isset($_SESSION['username']))
		{
			$queri=mysql_query('select nama from Benutzer');
			while($row=mysql_fetch_array($queri))
			{
				$nama=$row['nama'];
			}

		}
	?>
	<div class="user">
		<a href="user.php"><img src='images/user.png' width='70' height='70'></a></div>
		<div class='welcome'> Willkommen, <?php echo $nama ?>! </div>
	
	<table>
		<tr>
			<td>
				<div class="container">
  				<img src="images/choice.png" alt="Avatar" width="200" height="200">
  				<a href='pil-ganda.php'><div class="overlay">
    			<div class="text">Die Vervielfachtige Auswahl</div>
  				</div>
  				</a>                                 
				</div>
			</td>
			<td>
				<div class="container">
  				<img src="images/response.png" width="200" height="198">
  				<a href='multipleresponse.php'><div class="overlay">
    			<div class="text">Die Vervielfachtige Antwort</div>
  				</div>
  				</a>                                 
				</div>
			</td>
			<td><div class="container">
  				<img src="images/fill.png" width="200" height="198">
  				<a href='filltheblank.php'><div class="overlay">
    			<div class="text">Lückentexte</div>
  				</div>
  				</a>                                 
				</div></td>
			<td><div class="container">
  				<img src="images/true.png" width="200" height="198">
  				<a href ='tof.php'><div class="overlay">
    			<div class="text">Die richtig/falsch Formen</div>
  				</div>
  				</a>                                 
				</div></td>
			<td><div class="container">
  				<img src="images/matching.png" width="200" height="198">
  				<a href='matching.php'><div class="overlay">
    			<div class="text">Die Anpassung</div>
  				</div>
  				</a>                                 
				</div></td>

		</tr>
		
	</table>

	<div class='footer'>
		<div class=img-footer>
			<img src='images/unimed.png' width='130' height='130'>
		</div>
		<div class='cp'>
			<p> Kontaktperson </p>
			<p> Vivi Fitri Yanti Panggabean</p>
			<p> Email : viviftri97@gmail.com</p>
		</div>
		<div class='desc'>
			<p style=""> Die Erstellung einer Webseite des interaktiven Quiz für Leseverstehen mit dem Niveau A1</p>
		</div>
	</div>

</body>
</html>
