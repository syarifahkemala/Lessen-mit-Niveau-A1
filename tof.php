<html>
<head>
	<title> Quiz </title>
  <meta charset="UTF-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
  background: #fff;
  padding: 10px 20px;
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
  padding: 10px; 

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
   margin-top: 8%;

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
Lesen Sie den Text und die Aussagen sorgfältig durch. Klicken Sie <b>Richtig</b>, wenn die Aussage mit dem Text übereinstimmt, aber wenn nicht, klicken Sie <b>Falsch</b>.</b>
  </div>
  <a href="index.php"><img src="images/left-arrow.png" width="60" height="60" style="margin-left: 10;margin-top: 0" /></a>
   <div class='mulai' id='rcorners4'>
     <p style='font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;font-size: 25px;margin-top: 2px;'>Die Frage</p>
  </div>
  <div class='selesai' id='rcorners4'>
     <p style='font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;font-size: 25px;margin-top: 2px;'>Ihre Punktzahl</p>
  </div>
  <?php
    include 'koneksi.php';
    $hasil = mysql_query("select * from richtig/falsh_formen order by rand()");
    $jumlah = mysql_num_rows($hasil);
    echo "<script>var jumlah_soal = $jumlah </script>";
    $urut = 0;
    while($row=mysql_fetch_array($hasil))
    {
      $id=$row['id'];
      $pertanyaan=$row['dialog'];
      $soal=$row['soal'];
      $jawaban=$row['jawaban'];
      $respon=$row['respon'];

  ?>

    <form name='form1' method="post" action=''>
    <input type='hidden' name='id[]' value=<?php echo $id; ?>>
    <input type='hidden' name='jumlah' value=<?php echo $jumlah; ?>>
    <table border='0' style="margin-left:30%;" class='soal no<?php echo $urut+1; ?>' data-benar="<?php echo $jawaban ?>" data-response="<?php echo $respon ?>">
     <tr>
                  <td colspan='2'width="600"><div id='rcorners3'><font color="#000000"><?php echo "$pertanyaan"; ?></font></div></td>
                 
            </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
         <td valign="top" width="20"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
          <td><font color="#000000"><?php echo $soal; ?></font></td>
       
      </tr>
            </table>
       </form>   
  <?php
    }

  ?>

 <table style="margin-top: 1%; margin-left: 41%;">
          <tr>
                <td>
                   <input class="jw a example_f" type="button" value="Richtig"> 
                </td>
              </tr>
              <tr>
                <td>
                 <input class="jw b example_f" type="button" value="Falsch">
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
</body>
<script>
var skor = 0;
var soal = 1;
var akhir = 2;
var respon = 1;
$(document).ready(function(){
$('.btn-selesai').hide();
$('.final').hide();
$('.popup').hide(); 
$('.selesai').hide(); 
 
$('.popup-salah').hide(); 
$('#skor').hide();  
$('#benar').hide();
$('#salah').hide();  
$('.soal').hide();
$('.no'+soal).show();  

$('input.jw').click(function(){
  var benar = $('.no'+soal).data('benar'); //ngecek nilai
  var respon = $('.no'+soal).data('response');
  if((benar && $(this).hasClass('a')) || (!benar && $(this).hasClass('b'))){
    
    $("#popup-status").text("Ihre Antwort ist richtig");
    $("#popup-response").text(respon);
    $(".popup").show();
    skor+=1;
  }
  else
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
    $('.btn-lanjut').hide();
    $('.btn-selesai').show();
    $('.final').show();
    $('.example_f').hide();
    $('#skor').show().html(skor);
    $.ajax({
          url:"jawab-truefalse.php",
          method:"post",
          data:{
            "jenis_soal":"skor_truefalse",
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