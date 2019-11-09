<html>
<head>
	<title> Quiz </title>
  <meta charset="UTF-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery timer/jquery.simple.timer.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
  body{
    background-image: url(images/read.png);
    background-repeat: no-repeat;
    background-position: 0% 100%;
    background-color: #a6dae8;
    overflow: scroll;
  }
  .popup{
  display: none;
 }
 .bg{
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #ddd;

 }
 .content{
  position: relative;
  top:50px;
  width: 300px;
  margin-top: 10%;
  margin-left: 38%;
  background: #ffff;
  padding: 10px 30px;
 }
 .content-text{
   
 }
 .close{
  display: inline-block;
  padding: 7px 15px;
  cursor: pointer;
  background: #E74C3C;
  color: #fff;
 }
 .close:hover,.close:visited{
  background: #C0392B;
 }
#rcorners3 {
  border-radius: 15px 50px;
  border-style: solid;
  padding: 20px; 

  
  border-color: #39ac73;
}

tr, td{
  font-size: 20px;
}
.timer{
  margin: 0 auto;
}
.container{
  margin-top: 5%;
  margin-left: 45%;
  margin-bottom: 3%;
}
body{
  vertical-align: middle;
}
.jst-hours{
  float:left;

}
.jst-minutes{
  float:left;
}
.jst-second{
  float:left;
}
.example_f, .btn-selesai {
   border-radius: 9px;
   background-color: #4ca2cb;
   border: none;
   color: #FFFFFF;
   text-align: center;
   text-transform: uppercase;
   font-size: 18px;
   padding: 10px 18%;
   transition: all 0.4s;
   cursor: pointer;
   margin-left: 32%;
   margin-top: 60%;

 }
 .example_f span, .btn-selesai span {
   cursor: pointer;
   display: inline-block;
   
   transition: 0.4s;
 }
 .example_f span:after, .btn-selesai span:after  {
   content: '\00bb';
   position: absolute;
   opacity: 0;
   top: 0;
   right: -20px;
   transition: 0.5s;
 }
 .example_f:hover span,  .btn-selesai:hover span {
   padding-right: 25px;
 }
 .example_f:hover span:after, .btn-selesai:hover span:after {
   opacity: 1;
   right: 0;
 }
#rcorners4 {
  color: white;
  border-radius: 40px;
  background:  #39ac73;
   
  width: 40.5%;
  height: 50px;
  text-align: center;
  margin-left: 29.9%;
  margin-top: 0%;
}
</style>

</head>
<body>
<div class="alert alert-success">
    <strong>Die Anweisung: </strong>
Klicken Sie für jede Frage die richtige Antwort! Sie können mehr als eine Antwort klicken.
  </div>
   <a href="index.php"><img src="images/left-arrow.png" width="60" height="60" style="margin-left: 10;margin-top: 0" /></a>

  <div class='mulai' id='rcorners4'>
     <p style='font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;font-size: 25px;margin-top: 10px;'>Die Frage</p>
  </div>
      <div class='selesai' id='rcorners4'>
     <p style='font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;font-size: 25px;margin-top: 2px;'>Ihre Punktzahl</p>
  </div>
<?php
		include 'koneksi.php';
     	//$hasil=mysql_query("select * from pil_ganda WHERE aktif='y' ORDER BY RAND ()");
      	$hasil=mysql_query("select * from Vervielfachtige_Auswahl order by rand()");
        if (!$hasil) {
    		die(mysql_error());
		}
        $jumlah=mysql_num_rows($hasil);
        echo "<script>var jumlah_soal = $jumlah</script>";
        $urut=0;
        while($row=mysql_fetch_array($hasil))
        {
            $id=$row['id'];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"]; 
            $pilihan_e=$row["e"];
            $jawaban=$row["jawaban"];
            $respon=$row['respon'];
            
?>
            <form name="form1" method="post" action="">
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            <table style='margin-left:30%;'class='soal no<?php echo $urut+1; ?>' border='0'data-benar="<?php echo $jawaban ?>" data-response="<?php echo $respon ?>">
            <tr>
                  
                  <td  colspan="3"><div id='rcorners3'><font color="#000000"><?php echo "$pertanyaan"; ?></font></div></td>
                   <td></td>
                    <td></td>
            </tr>
     
            <tr>
              <td colspan="1"></td>  
                 <td width="25" valign="top"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                <td><font color="#000000">
               A.  <input class="jw<?php echo $urut; ?> a" name="pilihan[<?php echo $id; ?>]" type="checkbox" > 
                <?php echo "$pilihan_a";?></font> </td>
            </tr>
            <tr>
                <td align='left' >&nbsp;</td>
                <td></td>
                <td><font color="#000000">
               B. <input class="jw<?php echo $urut; ?> b" name="pilihan[<?php echo $id; ?>]" type="checkbox" > 
                <?php echo "$pilihan_b";?></font> </td>
            </tr>
            <tr>
                <td align='left' >&nbsp;</td>
                  <td></td>
                <td><font color="#000000">
              C.  <input class="jw<?php echo $urut; ?> c" name="pilihan[<?php echo $id; ?>]" type="checkbox" > 
                <?php echo "$pilihan_c";?></font> </td>
            </tr>
            <tr>
                <td align='left' >&nbsp;</td>
                <td></td>
                <td><font color="#000000">
              D.   <input class="jw<?php echo $urut; ?> d" name="pilihan[<?php echo $id; ?>]" type="checkbox"> 
                <?php echo "$pilihan_d";?></font> </td>
            </tr>
            <tr>
                <td align='left' >&nbsp;</td>
                <td></td>
                <td><font color="#000000">
              E.   <input class="jw<?php echo $urut; ?> e" name="pilihan[<?php echo $id; ?>]" type="checkbox"> 
                <?php echo "$pilihan_e";?></font> </td>
            </tr>
            </table>
            <?php
        }
        
        ?>
        
	</form>
  <table style="margin-top: 2%; margin-left: 41%;">
              <tr>
                <td colspan="2">
   <div name="submit" value="Jawab" class='btn-lanjut button_cont'><a class="example_f" href=''><span>weiter</span></a></div> 
   </td>
              </tr>
            </table> 
	<div class="popup respon">
    <div class="bg">
    <div class="content">
     <div class="content-text">
      <p id="popup-status">Ihre Antwort ist richtig</p>
      <p id="popup-response"></p>
     </div>
     <div class="close">Close</div>
    </div>
  </div>
  </div>

 <h2 style='margin-left: 50%;'><span id="skor"></span><div style='display :inline;' class='final'>/ 10 </div></h2>
  <br><br>
<div name="submit" value="Jawab"><a class="btn-selesai" href='index.php'><span>fertig</span></a></div>
</div>	
</div>
</body>
<script>
var skor = 0;
var soal = 1;
var respon = 1;
$(document).ready(function(){
$('.final').hide();
$('.selesai').hide();
$('.popup').hide(); 
$('.popup-salah').hide();
$('.soal').hide();
$('.no'+soal).show();  
$('.btn-selesai').hide();

$('.btn-lanjut').click(function(){

	var benar = $('.no'+soal).data('benar'); //ngambil jawaban yg bener 
  var respon = $('.no'+soal).data('response');
  var cek_kebenaran = true;

  var array_benar = benar.split(",");
  var array_soal = ['a','b','c','d'];

  for(var i=0;i<=3;i++)
  {
    if(array_benar.indexOf(array_soal[i])>=0 )
    cek_kebenaran = cek_kebenaran && $('input.jw'+soal+'.'+array_soal[i]).prop('checked');
    else cek_kebenaran = cek_kebenaran && !$('input.jw'+soal+'.'+array_soal[i]).prop('checked');
  }

  if(cek_kebenaran){
    $("#popup-status").text("Ihre Antwort ist richtig");
    $("#popup-response").text(respon);
    $(".popup").show();
    skor+=1;
  } else 
    {
    $("#popup-status").text("Ihre Antwort ist falsch");
        $("#popup-response").text(respon);
        $(".popup").show();
      }
      $('.bg,.close').click(function(e){
    e.preventDefault();
    $('.popup').fadeOut('slow');
    })
  $('.soal').hide();
	if(soal == 20)
  {
    $('.mulai').hide();
    $('.selesai').show();
    $('.final').show();
    $('.btn-lanjut').hide();
    $(".btn-selesai").show();
    $('#skor').show().html(skor);
   
    $.ajax({
          url:"jawab-multipleresponse.php",
          method:"post",
          data:{
            "jenis_soal":"skor_multiple",
            "skor":skor
          },
          success:function(data){
            //data = JSON.parse(data);
            console.log(data);
            
          }
        })
  }
  else
  {
    respon++;
    soal++; 
    $('.no'+soal).show(); 
  }
	return false;
})
  });
</script>