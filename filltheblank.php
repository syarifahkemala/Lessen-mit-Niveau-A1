<html>
<head>
	<title> Quiz </title>
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
  position: fixed;
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
Füllen Sie die Lücken mit dem richtigen Wort aus.
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
     	//$hasil=mysql_query("select * from pil_ganda WHERE aktif='y' ORDER BY RAND ()");
      	$hasil2=mysql_query("select * from dialog_luckentexte");
        
        $jumla_dialog=mysql_num_rows($hasil2);
        echo "<script>var jumlah_dialog = $jumla_dialog</script>";
        $urut=0;
        $id=0;      

             
       /* */
            
?>
          <?php
          while($row=mysql_fetch_array($hasil2))
            {
            $id=$row['id'];
            $dialog=$row['dialog'];

          ?>
            
           <table style="margin-left:30%;margin-right: 30%;" border='0'  class='dialog id<?php echo $id; ?>'>
            
            <tr>
                  <td colspan="3"><div id='rcorners3'><font color="#000000"><?php echo "$dialog"; ?></font></div></td> 
           </tr>

<?php
            $hasil=mysql_query("select * from ausfullen_der_lucken where dialog='$id' order by no_soal ASC");
            $jumlah=mysql_num_rows($hasil);
            $urut=0;
            while($row=mysql_fetch_array($hasil))
              {
              $idsoal=$row['no_soal'];
              $jawaban=$row["jawab"];
              $respon=$row['feedback'];
?>
            <tr class="idsoal<?php echo $idsoal ?> iddialog<?php echo $id ?> soal pertanyaan" data-benar="<?php echo $jawaban ?>" data-response="<?php echo $respon ?>">
              <td>&nbsp;</td>
              </tr>
            <tr class="idsoal<?php echo $idsoal ?> iddialog<?php echo $id ?> soal" >
                  <td></td>
                  <td align="left"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>

                <td align="center">
                 <input style='margin-left: 0px;' class="idsoal<?php echo $idsoal ?> iddialog<?php echo $id ?> jawaban" name="pilihan[<?php echo $id; ?>]" type="text" > 
                </td>    
            </tr>
            <tr>
  <?php } ?>
            </table>
            
     </form>        
            <?php
        }
        ?>
    <table style="margin-top: 1%; margin-left: 45%;">
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

</div>
<h2 style='margin-left: 50%;'><span id="skor"></span><div style='display :inline;' class='final'>/ 10 </div></h2>
  <br><br>
  <div name="submit" value="Jawab" style='margin-left:-2%;'><a class="btn-selesai" href='index.php'><span>fertig</span></a></div>
</div>
</div>
</body>
<script>
var skor = 0;
var soal = 1;
var respon = 1;
var dialogsekarang = 0;
var soalsekarang = 1;
  function shuffle(a) {
    var j, x, i;
    for (i = a.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        x = a[i];
        a[i] = a[j];
        a[j] = x;
    }
    return a;
}
$(document).ready(function(){
$('.final').hide();
$('.selesai').hide(); 
$('.popup').hide(); 
$('.popup-salah').hide(); 
$(".soal").hide();
$(".btn-selesai").hide();
$(".dialog").hide();    

var urutandialog=[]; //GANTI SOAL DI DB BARU GANTI 1 DENGAN JUMLAH_DIALOG
  for (var i =0; i<jumlah_dialog; i++)
  {
    urutandialog.push(i+1);
  }
  shuffle(urutandialog);

  $('.dialog.id' + urutandialog[dialogsekarang]).show() ;
  
  $('.idsoal' + soalsekarang + '.iddialog' + urutandialog[dialogsekarang]).show() ;
//$('.no'+soal).show();  

$('.btn-lanjut').click(function(){
	var benar = $('.pertanyaan'+'.idsoal' + soalsekarang + '.iddialog' + urutandialog[dialogsekarang]).data('benar');
  var respon = $('.pertanyaan'+'.idsoal' + soalsekarang + '.iddialog' + urutandialog[dialogsekarang]).data('response');
  $('.popup').hide(); 
  $('.popup-salah').hide(); 

	//if($('input.jw'+soal+'.'+benar).prop('checked')){
    if($('input.jawaban'+'.idsoal' + soalsekarang + '.iddialog' + urutandialog[dialogsekarang]).val()==benar){
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
  if(soalsekarang<5)
    {
      soalsekarang++;
    }
    else
    {
      soalsekarang=1;
      dialogsekarang++;
    }
    $('.dialog').hide();    
    $(".soal").hide();
    $('.dialog.id' + urutandialog[dialogsekarang]).show() ;
  
    $('.idsoal' + soalsekarang + '.iddialog' + urutandialog[dialogsekarang]).show();

  if(soal == 20)
  {
    $('.final').show();
    $('.dialog').hide();    
    $(".soal").hide();
    $('.mulai').hide();
    $('.selesai').show();
    $('#rcorners3').hide();
    $('.btn-lanjut').hide();
    $(".btn-selesai").show();
    
    $('#skor').show().html(skor);
    $.ajax({
          url:"jawab-filltheblank.php",
          method:"post",
          data:{
            "jenis_soal":"skor_filltheblank",
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