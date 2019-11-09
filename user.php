<html>
<head>
<style type="text/css">
	body{
		
	background-image: url(images/bg-user.png);
	background-size: 1355px 500px;
	background-repeat: no-repeat;
	background-position: 50% 100%;
	}
	table{
		margin-left:60px;
		margin-top: 0px;
		font-size: 20px;
	}
	td, tr{
		font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
		
	}
	#rcorners4 {
  border-radius: 20px;
  background:  #00ccff;
  padding: 10px; 
  width: 80%;
  height: 50px; 
} 

</style>
</head>
<body>
	<a href="index.php"><img src="images/left-arrow.png" width="60" height="60" style="margin-left: 10;margin-top: 10" /></a>
	<?php
	session_start();

		include 'koneksi.php';
		if(!isset($_SESSION['username']))
		{
			header('location:login.php');
		}

		if(isset($_SESSION['username']))
		{
			$username = $_SESSION['username'];
		}

		$query=mysql_query("select * from benutzer where username='$username'");
		while($row=mysql_fetch_array($query))
		{
			$choice=$row['skor_pilganda'];
			$response=$row['skor_multiple'];
			$filltheblank=$row['skor_filltheblank'];
			$truefalse=$row['skor_truefalse'];
			$matching=$row['skor_matching'];
		}
	?>
	<table border='0' cellpadding="8">
		<tr align='center' >
			<td colspan="5">
				
					<p style="font-size: 33px;"> Ihr Ergebnis</p>
				
			</td>
		</tr>
		<tr align='center'>
			<td colspan="5"> </td>
		</tr>
		<tr align='center'>
			<td colspan="5"> </td>
		</tr>
		<tr align='center'>
			<td> 
			<div id='rcorners4'>
				Die Vervielfachtige Auswahl 
			</div>
			</td>
			<td>
			<div id='rcorners4'>
				 Die Vervielfachtige Antwort 
			</div>
			</td>
			<td> 
			<div id='rcorners4'>
				Lückentexte 
			</div>
			</td>
			<td> 
			<div id='rcorners4'>
				Die richtig/falsch Formen
			</div> 
			</td>
			<td>
			<div id='rcorners4'>
				Die Anpassung 
			</div>
			</td>
		</tr>
		<tr align='center'>
			<td style='font-size: 30px;'><?php echo $choice ?></td>
			<td style='font-size: 30px;'><?php echo $response ?></td>
			<td style='font-size: 30px;'><?php echo $filltheblank ?></td>
			<td style='font-size: 30px;'><?php echo $truefalse ?></td>
			<td style='font-size: 30px;'><?php echo $matching ?></td>
		</tr>
	</table>
</body>