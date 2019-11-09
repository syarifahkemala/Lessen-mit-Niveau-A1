<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
body{
    background-image: url(images/read.png);
    background-repeat: no-repeat;
    background-position: 0% 100%;
    background-color: #a6dae8;
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
  border-color: #39ac73;
  padding:20px;
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

.groove {
  border-style: groove;
  margin-right:30%;
  margin-left: 30%;
  margin-top: -9%;
  height: 50%;
  width: 45%;
}
.borderkecil{
	border-style: groove;
	height: 1%;
	width: 10%;
  	display: inline;
}

.gambar{
  margin-left: 8%;
}

	</style>
</head>
<body>

  <div class="alert alert-success">
    <strong>Die Anweisung: </strong>
Klicken Sie das richtige Wort des verfügbaren Wortes in das Feld! Sie können mehr als ein Wort klicken.
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
      	$hasil=mysql_query("select * from anpassung");
        if (!$hasil) {
    		die(mysql_error());
		}
        $jumlah=mysql_num_rows($hasil);
        echo "<script>var jumlah_soal = $jumlah</script>";
        $urut=0;
        $id=0;
        while($row=mysql_fetch_array($hasil))
        {
            $id=$row['id'];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"];
            $pilihan_e=$row["e"]; 
            $pilihan_f=$row["f"]; 
            $pilihan_g=$row["g"]; 
            $pilihan_h=$row["h"]; 
            $pilihan_i=$row["i"];  
            $pilihan_j=$row["j"]; 
            $pilihan_k=$row["k"]; 
            $pilihan_l=$row["l"]; 
            $pilihan_m=$row["m"]; 
            $pilihan_n=$row["n"]; 
            $pilihan_o=$row["o"]; 
            $pilihan_p=$row["p"]; 
            $gambar=$row["gambar"]; 
            $jawaban=$row["jawaban"];
            $respon =$row["respon"];
            
?>
            
            <div class="id"><?php echo $id ?></div>
            <table style="margin-left: 25%;" class='soal no<?php echo $urut+1; ?>' data-benar="<?php echo $jawaban ?>" data-response="<?php echo $respon ?>" border='0'>
            <tr>
                
              </tr>
            <tr>
                  
                  <td rowspan='5'><img src='<?php echo $gambar ?>'></td>
                  <td width="25" align='center' rowspan="5"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                  <td colspan="6" ><div id='rcorners3'><font color="#000000"><?php echo "$pertanyaan"; ?></font></div></td>
                  
            </tr>
            <tr>
                <td><font color="#000000">
            <?php 
            if ($pilihan_a !== "")
            {
            ?>
            <div class="btn-group-toggle "data-toggle="buttons" >
              <label class="btn btn-secondary jw<?php echo $urut; ?> a  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_a";?>">
                <input type="checkbox"  autocomplete="off">
              <?php
              
              if($id==16)
              {
              ?>
                <img src="images/17.png"/>
              <?php
              }
              if($id==17)
              {
              ?>
                <img src="images/16.png"/>
              <?php
              }
              if($id==18)
              {
              ?>
                <img src="images/19c.png"/>
              <?php
              }
              if($id==19)
              {
              ?>
                <img src="images/18.png"/>
              <?php
              }
              if($id==20)
              {
              ?>
                <img src="images/20.png"/>
              <?php
              }
              ?>  
                <?php echo $pilihan_a;?>
              </label>
            </div>
              
            <?php
            }
            
            ?>
             </td>  
                  
                <td><font color="#000000">
                  <?php 
            if ($pilihan_b !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary jw<?php echo $urut; ?> b  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_b";?>">
                <input type="checkbox"  autocomplete="off" > 
               
              
              <?php
              
              if($id==16)
              {
              ?>
                <img src="images/16.png"/>
              <?php
              }
              if($id==17)
              {
              ?>
                <img src="images/18.png"/>
              <?php
              }
              if($id==18)
              {
              ?>
                <img src="images/17.png"/>
              <?php
              }
              if($id==19)
              {
              ?>
                <img src="images/20.png"/>
              <?php
              }
              if($id==20)
              {
              ?>
                <img src="images/19c.png"/>
              <?php
              }
              ?>   
                <?php echo "$pilihan_b";?>
                </label>
            </div>
              <?php
            }
            ?>
              </td>

                <td><font color="#000000">
                  <?php 
            if ($pilihan_c !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary jw<?php echo $urut; ?> c  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_c";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php
              if($id==16)
              {
              ?>
                <img src="images/20a.png"/>
              <?php
              }
              if($id==17)
              {
              ?>
                <img src="images/17.png"/>
              <?php
              }
              if($id==18)
              {
              ?>
                <img src="images/20.png"/>
              <?php
              }
              if($id==19)
              {
              ?>
                <img src="images/16.png"/>
              <?php
              }
              if($id==20)
              {
              ?>
                <img src="images/17.png"/>
              <?php
              }
              ?>   
                <?php echo "$pilihan_c";?>
                </label>
            </div>
              <?php
            }
            ?>
              </td>

                <td><font color="#000000">
                  <?php 
            if ($pilihan_d !== "")
            {
            ?>
               <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary jw<?php echo $urut; ?> d  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_d";?>">
                <input type="checkbox"  autocomplete="off" >
                <?php
             
              if($id==16)
              {
              ?>
                <img src="images/19c.png"/>
              <?php
              }
              if($id==17)
              {
              ?>
                <img src="images/20.png"/>
              <?php
              }
              if($id==18)
              {
              ?>
                <img src="images/18.png"/>
              <?php
              }
              if($id==19)
              {
              ?>
                <img src="images/17.png"/>
              <?php
              }
              if($id==20)
              {
              ?>
                <img src="images/16.png"/>
              <?php
              }
              ?>   
                <?php echo "$pilihan_d";?>
                </label>
            </div> 
              <?php
            }
            ?>
              </td>
           
                
            </tr>

            <tr>
            <td><font color="#000000">
                  <?php 
            if ($pilihan_e !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary jw<?php echo $urut; ?> e  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_e";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php
             
              if($id==16)
              {
              ?>
                <img src="images/20.png"/>
              <?php
              }
              if($id==17)
              {
              ?>
                <img src="images/19c.png"/>
              <?php
              }
              if($id==18)
              {
              ?>
                <img src="images/17.png"/>
              <?php
              }
              if($id==19)
              {
              ?>
                <img src="images/19c.png"/>
              <?php
              }
              if($id==20)
              {
              ?>
                <img src="images/18.png"/>
              <?php
              }
              ?>   
                <?php echo "$pilihan_e";?>
                </label>
            </div>
              <?php
            }
            ?>
              </td>

                <td><font color="#000000">
                  <?php 
            if ($pilihan_f !== "")
            {
            ?>
                <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary jw<?php echo $urut; ?> f  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_f";?>">
                <input type="checkbox"  autocomplete="off" > 
                
                <?php echo "$pilihan_f";?>
                </label>
            </div>
              <?php
            }
            ?>
                 </td>
           
                <td><font color="#000000">
                  <?php 
            if ($pilihan_g !== "")
            {
            ?>
               <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary jw<?php echo $urut; ?> g  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_g";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php echo "$pilihan_g";?>
                </label>
            </div>
                <?php
            }
            ?>
                 </td>
           
                <td><font color="#000000">
                  <?php 
            if ($pilihan_h !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary  jw<?php echo $urut; ?> h  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_h";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php echo "$pilihan_h";?>
                </label>
            </div>
              <?php
            }
            ?>
              </td>
           
                
            </tr>
            
            <tr>
            <td><font color="#000000">
                  <?php 
            if ($pilihan_i !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary  jw<?php echo $urut; ?> i  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_i";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php echo "$pilihan_i";?>
                </label>
            </div>
              <?php
            }
            ?>
              </td>
           
                <td><font color="#000000">
                  <?php 
            if ($pilihan_j !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary  jw<?php echo $urut; ?> j  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_j";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php echo "$pilihan_j";?>
                </label>
            </div>
              <?php
            }
            ?>
              </td>
            <td><font color="#000000">
              <?php 
            if ($pilihan_k !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary  jw<?php echo $urut; ?> k  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_k";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php echo "$pilihan_k";?>
                </label>
            </div>
              <?php
            }
            ?>
              </td>
           
                <td><font color="#000000">
                <?php 
            if ($pilihan_l !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary  jw<?php echo $urut; ?> l  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_l";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php echo "$pilihan_l";?>
                </label>
            </div>
              <?php
            }
            ?>
                 </td>  

                
            </tr>

            <tr>
              <td><font color="#000000">
              <?php 
            if ($pilihan_m !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary  jw<?php echo $urut; ?> m  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_m";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php echo "$pilihan_m";?>
                </label>
            </div>
                <?php
            }
            ?>
             </td>
           
                <td><font color="#000000">
                  <?php 
            if ($pilihan_n !== "")
            {
            ?>
              <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary jw<?php echo $urut; ?> n  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_n";?>">
                <input type="checkbox" checked autocomplete="off" > 
                <?php echo "$pilihan_n";?>
                </label>
            </div>
              <?php
            }
            ?>
          </td>
 
              <td><font color="#000000">
                <?php 
            if ($pilihan_o !== "")
            {
            ?>
               <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary  jw<?php echo $urut; ?> o  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_o";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php echo "$pilihan_o";?>
                </label>
            </div>
                <?php
            }
            ?>
              </td>

              <td align="center" ><font color="#000000">
              <?php 
            if ($pilihan_p !== "")
            {
            ?>
                <div class="btn-group-toggle "  data-toggle="buttons" >
               <label class="btn btn-secondary jw<?php echo $urut; ?> p  check" name="pilihan[<?php echo $id; ?>]" data-tulisan="<?php echo "$pilihan_p";?>">
                <input type="checkbox"  autocomplete="off" > 
                <?php echo "$pilihan_p";?>
                </label>
            </div> 
              <?php
            }
            ?>
              </td>
            </tr>
            
            </table>
            <?php
        }
        
        ?>
        <table style="margin-top: 9%; margin-left: 81%;">
              <tr>
                <td colspan="2">
                  <div name="submit" value="Jawab" class='btn-lanjut button_cont'><a class="example_f" href=''><span>weiter</span></a></div>
                </td>
              </tr>
            </table>
        <div class="groove">
        	
        </div>
</body>
 <div class="popup respon">
    <div class="bg">
    <div class="content">
     <div class="content-text">
      <p id="popup-status"></p>
      <p id="popup-response"></p>
     </div>
     <div class="close">Close</div>
    </div>
  </div>
  </div>
<h2 style='margin-left: 50%;'><span id="skor"></span><div style='display :inline;' class='final'>/ 10 </div></h2>
  <br><br>
  <div name="submit" value="Jawab" ><a class="btn-selesai" href='index.php'>fertig</a></div>
</div>	
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>

var skor = 0;
var soal = 1;
var gambar = 1;
var respon=0;
$(document).ready(function(){
$(".id").hide();
$('.selesai').hide(); 
$('.final').hide(); 
$(".btn-selesai").hide();
$('.popup').hide(); 
$('.popup-salah').hide();
$('.soal').hide();
$('.gambar').hide();
$('.no'+soal).show(); 
$('.ke'+gambar).show();

$('.check').click(function(){

	var tulisan = $(this).data('tulisan');
	if(!$(this).children().prop('checked'))
	$('.groove').append('<div class="borderkecil" tulisan="'+ tulisan +'">'+ tulisan +'</div>')
	else 
		$('.borderkecil[tulisan*="'+ tulisan +'"]').remove();
});
$('.btn-lanjut').click(function(){
	$('.groove').html("")
	var benar = $('.no'+soal).data('benar'); //ngambil jawaban yg bener 
  console.log(benar);
  var respon = $('.no'+soal).data('response');
  var cek_kebenaran = true;

  var array_benar = benar.split(",");
  console.log(array_benar);
  var array_soal = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p'];

  for(var i=0;i<15;i++)
  {
    if(array_benar.indexOf(array_soal[i])>=0 )
      cek_kebenaran = cek_kebenaran || $('.jw'+soal+'.'+array_soal[i]).children().prop('checked');
    
    else cek_kebenaran = cek_kebenaran || !$('.jw'+soal+'.'+array_soal[i]).children().prop('checked');

  }
console.log(cek_kebenaran);
  if(cek_kebenaran){
   $("#popup-status").text("Ihre Antwort ist richtig");
    $("#popup-response").text(respon);
    $(".popup").show();
    skor+=1;
  } else {
    $("#popup-status").text("Ihre Antwort ist falsch");
        $("#popup-response").text(respon);
        $(".popup").show();
      }
      $('.bg,.close').click(function(e){
    e.preventDefault();
    $('.popup').fadeOut('slow');
    })
  $('.soal').hide();
  $('.ke'+gambar).hide();
	if(soal == jumlah_soal)
  {
    $('.groove').hide();
    $('.mulai').hide();
    $('.final').show();
    $('.selesai').show();
    $('.btn-lanjut').hide();
    $(".btn-selesai").show();
    $('#skor').show().html(skor);
    $.ajax({
          url:"jawab-matching.php",
          method:"post",
          data:{
            "jenis_soal":"skor_matching",
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
    gambar++; 
    $('.no'+soal).show();
    $('.ke'+gambar).show(); 
  }
	return false;
})
  });
</script>
