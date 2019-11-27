<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Ujian Online</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;  var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Nama harus di isi");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("Sekolah harus di isi");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Email tidak valid");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password harus di isi");return false;}if(a.length<5 || a.length>25){alert("Passwords di isi minimal 5 karakter");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords tidak cocok");return false;}}
</script>




  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body


.modal {
  text-align: center;
}

@media screen and (min-width: 768px) {
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}


.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

  {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .left{
  float:left;
}

.right{
  float:right;
}

.clear{
  clear:both;
}
  
.jumbotron {
      background-color: #199fd3;
      background-image: url("assets/images/bg.png");
      background-size: auto;
      margin-top: 50px;
      color: #fff;
      padding: 100px 25px;
      font-family: Ubuntu, sans-serif;
  }

  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #199fd3;
      font-size: 50px;
  }
  .logo {
      color: #199fd3;
      font-size: 200px;
  }

  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #199fd3;
  }
  .carousel-indicators li {
      border-color: #199fd3;
  }
  .carousel-indicators li.active {
      background-color: #199fd3;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #199fd3;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }

  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #199fd3;
      background-color: #fff !important;
      color: #199fd3;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #199fd3 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #199fd3;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;

      background-color: #199fd3;
      z-index: 9999;
      border: 0;

      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #199fd3 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #78999D !important;
      background-color: #fff !important;

  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #199fd3;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  
  </style>


</head>

<body>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-home"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#login">ADMIN</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal">MASUK</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal1">DAFTAR</a></li>
         <li><a href="#" data-toggle="modal" data-target="#login2">PENGAJAR</a></li>
  <li><a href="#services" >LAYANAN</a></li>
        <li><a href="#about">TENTANG</a></li>
       <li><a href="#feedback">UMPAN BALIK</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-left">
  <h1>Ujian Online</h1>
  <p>Website Ujian Berbasis Online Untuk Siswa kelas 3 SMA</p>
  <!--  form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form -->
</div>


<!-- Container (Admin Section) -->
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:#199fd3;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 0px; "><b>MASUK - ADMIN</b></span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="head.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Masukan ID Admin" class="form-control"/>
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Masukan password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!----Teacher signin--->
<div class="modal fade" id="login2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:#199fd3;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>MASUK - PENGAJAR</b></span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Masukan ID Pengajar" class="form-control"/>
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Masukan Password" class="form-control"/>
</div>
<div class="form-group" align="center">
</div>
<div class="modal-footer" align="center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="login2" value="Login">Masuk</button>
    </fieldset>
    </form>
</div>
</div>

</div>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Visi dan Misi Kami</h2><br>
      <h4><p><strong>Visi:</strong> Visi kami yaitu menerapkan teknologi ujian online di zaman sekarang, membantu menghasilkan yang lebih cepat dan akurat. Melalui ini akan lebih efesiensi biaya, ramah lingkungan dan sebagainya.</p></h4>
      <h4><strong>Misi:</strong> Misi kami yaitu menggunakan satu platform untuk ujian dan mengurangi dokumen fisik dan menawarkan hasil yang cepat. Guru kelas 3 SMA tidak perlu mengeluarkan uang untuk membuat kertas ujian.</h4><br>
    </div>
  </div>
</div>



<!-- Container (USERS section) -->
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:#199fd3;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>MASUK - PENGGUNA</b></span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Masukan alamat email" class="form-control input-md" type="email">

  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Masukan Password" class="form-control input-md" type="password">

  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Masuk</button>
    </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--sign up modal start-->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span  style="color:#199fd3;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>DAFTAR PENGGUNA</b></span></h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="name"></label>
  <div class="col-md-6">
  <input id="name" name="name" placeholder="Masukan Nama" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="gender"></label>
  <div class="col-md-6">
    <select id="gender" name="gender" placeholder="Pilih Jenis Kelamin" class="form-control input-md" >
   <option value="Male">Pilih Jenis Kelamin</option>
  <option value="M">Laki-Laki</option>
  <option value="F">Perempuan</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="name"></label>
  <div class="col-md-6">
  <input id="college" name="college" placeholder="Masukan Nama Sekolahmu" class="form-control input-md" type="text">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label title1" for="email"></label>
  <div class="col-md-6">
    <input id="email" name="email" placeholder="Masukan Email" class="form-control input-md" type="email">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="mob"></label>
  <div class="col-md-6">
  <input id="mob" name="mob" placeholder="Masukan No.Telepon" class="form-control input-md" type="number">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Masukan Kata Sandi" class="form-control input-md" type="password">

  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="cpassword"></label>
  <div class="col-md-6">
    <input id="cpassword" name="cpassword" placeholder="Konfirmasi Kata Sandi" class="form-control input-md" type="password">

  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for=""></label>
  <div class="col-md-6">
    <input  type="submit"  class="sub" style="background: #199fd3;" value="Daftar"  />
  </div>
</div>
</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign up modal closed-->



<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>Layanan</h2>
  <h4>Apa Yang Kita Dapat</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!-- span class="glyphicon glyphicon-off logo-small"></span-->
      <i class="material-icons" style="font-size:50px;color:#199fd3">group_add</i>
      <h4>Ujian Online</h4>
      <p> Semua pengguna dalam satu platform</p>
    </div>
    <div class="col-sm-4">
      <img src="assets/images/indonesia-rupiah.png" style="width: 50px;color:#f4511e;"></span>
      <h4>Biaya Optimal</h4>
      <p>Mengurangi Penggunaan Kertas</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>Kepuasan Pengguna</h4>
      <p>Kepuasan Pengguna Tetap Kepuasan Kami</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Lingkungan</h4>
      <p>Ramah Lingkungan</p>
    </div>
    <div class="col-sm-4">
      <img src="assets/images/certificate.png" style="width: 50px;color:#f4511e;"></span>
      <h4>Sertifikat</h4>
      <p>Sertifikat Resmi oleh Pemerintah Indonesia</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-envelope logo-small"></span>
      <h4 style="color:#303030;">Kontak Kami</h4>
      <p>Kapanpun kamu bisa menghubungi kami</p>
    </div>
  </div>
</div>


  <div id="services" class="container-fluid text-center">
  <h2>Apa Kata Pengguna</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Ini adalah ide brilian! Saya sangat setuju jika kertas ujian diganti dengan Ujian Online"<br><span>Ridwan Firdaus</span></h4>
      </div>
      <div class="item">
        <h4>"Amazing! Cocok Untuk kelas 3 SMA"<br><span>Irfan Nugraha</span></h4>
      </div>
      <div class="item">
        <h4>"Terbaiklah! gak ribet dan lebih mudah"<br><span>Andy</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Tentang Sistem Ujian Online</h2><br>
      <h4>Sistem Ujian Online akan melakukan tes online untuk mengukur pengetahuan siswa kelas 3 SMA tentang ujian yang diberikan. Di masa sebelumnya semua siswa harus berkumpul di ruang kelas pada saat yang sama untuk mengikuti ujian. Dengan ujian online, siswa dapat melakukan ujian online, di waktu mereka sendiri dan dengan perangkat mereka sendiri, di mana pun mereka tinggal. Anda hanya memerlukan browser dan koneksi internet.</h4><br>
      <p>Sistem Ujian Online (SUD) adalah platform untuk mengadakan ujian online. Sistem ini memiliki beberapa keuntungan yaitu bisa menambah dan mempertahankan repositori pertanyaan, sehingga guru memiliki lebih banyak fleksibilitas.</p>

      <br><button class="btn btn-default btn-lg">Hubungkan</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="feedback" class="container-fluid bg-grey">
  <h2 class="text-center">Umpan Balik</h2>
  <div class="row">
    <div class="col-sm-5">
      <h2>Anda berhak memberikan kritik dan saran disini.</h2>

    </div>
    <div class="col-sm-7 slideanim">







      <?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo'
      <form role="form"  method="post" action="feed.php?q=index.php">





      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nama" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="subject" placeholder="Subjek" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="feedback" placeholder="Komentar" rows="4"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" name="submit" input type="submit">Kirim</button>
        </div>
      </form>';}?>
      </div>
    </div>
  </div>
</div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Terimakasih Sudah Berkunjung.</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>


</html>
