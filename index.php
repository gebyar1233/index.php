<?php
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TWZF67N9TS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TWZF67N9TS');
</script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '220994139946987');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=220994139946987&ev=PageView&noscript=1"
/></noscript>

<style>
.navbar.futuristic {
    background: url(https://mandirifiesta.com/IMAGES/BACKGROUNDPROVIDER.jpg) no-repeat;
    background-size: 100% 100%;
    border-bottom: none;
    border-top: none;
}
.middle-index {
    border-top: transparent !important;
}
</style>
<style>
/* customizable snowflake styling */
.snowflake {
  color: #fff;
  font-size: 1em;
  font-family: Arial, sans-serif;
  text-shadow: 0 0 5px #000;
}

@-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}.snowflake:nth-of-type(10){left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s}.snowflake:nth-of-type(11){left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s}
</style>
<div class="snowflakes" aria-hidden="true">
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/X500BW.png" height="50px" width="50px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/BULET.png" height="40px" width="40px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/LOGOGEBYAR.png" height="90px" width="120px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/COLOR.png" height="50px" width="50px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/X500BW.png" height="50px" width="50px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/BULET.png" height="40px" width="40px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/LOGOGEBYAR.png" height="90px" width="120px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/COLOR.png" height="50px" width="50px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/X500BW.png" height="50px" width="50px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/BULET.png" height="40px" width="40px;">
</div>
<div class="snowflake">
<img src="https://mandirifiesta.com/IMAGES/COLOR.png" height="50px" width="50px;">
</div>
</div>
<script src="https://cdn.robotaset.com/assets/js/common/jquery.min.js"></script>
<script type="text/javascript">


if(window.location.pathname == "/") {
var appBanners = document.getElementsByClassName('wabutton-div');
for (var i = 0; i < appBanners.length; i ++) {
    appBanners[i].style.display = 'block';
}
} else {
var appBanners = document.getElementsByClassName('wabutton-div');
for (var i = 0; i < appBanners.length; i ++) {
    appBanners[i].style.display = 'none';
}
}
});
</script>
<div class="wabutton-div" style="position: fixed; bottom: 50px; left: 10px; z-index: 10; opacity: 0.98;"><a href="https://mandirifiesta.com/APK/Gebyar123.apk" target="_blank" rel="noopener"> <img class="wabutton" src="https://mandirifiesta.com/APK/Aplikasi.png" alt="Chat W.a" width="66" height="55"></a></div>
<div style="position: fixed; bottom: 120px; left: 10px; z-index: 10; opacity: 0.98;"><a href="https://157.230.253.235/" target="_blank" rel="noopener"><img class="wabutton" src="https://mandirifiesta.com/IMAGES/RTPBARU.gif" alt="RTP BOCORAN Gebyar123" width="66" height="66"></a></div>
<link rel="icon" type="image/x-icon" href="https://cdn.robotaset.com/assets/tpl/32cd5714a25/images/favicon.ico">
<title>Gebyar123 | Situs Resmi Agen Slot Online Indonesia | Live Casino Online | Judi Bola Online Terbaik</title>
<link href="https://cdn.robotaset.com/assets/thirdparty/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/thirdparty/font-awesome/css/solid.css" media="print" onload="this.media='all'" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/thirdparty/font-awesome/css/fontawesome.css" media="print" onload="this.media='all'" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/thirdparty/owl-carousel/css/owl.carousel.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/thirdparty/owl-carousel/css/owl.theme.default.css" rel="stylesheet">
<script src="https://cdn.robotaset.com/assets/js/common/jquery-3.6.0.min.js"></script>
<link href="https://cdn.robotaset.com/assets/css/220531_main-style.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/tpl/32cd5714a25/css/style.css" rel="stylesheet">
<link href="https://cdn.robotaset.com/assets/css/fonts.google.ubuntu.css" media="print" onload="this.media='all'" rel="stylesheet">
<script>
  var validationMsg = {"alpha":"%s hanya boleh menggunakan abjad","alpha_dash":"%s hanya boleh menggunakan karakter abjad, angka, tanda garis bawah dan penghubung","alpha_numeric":"%s hanya boleh menggunakan abjad dan angka","alpha_numeric_spaces":"%s hanya boleh menggunakan abjad, angka dan spasi","alpha_quote_spaces":"%s hanya boleh menggunakan abjad, tanda petik satu dan spasi","alpha_spaces":"%s hanya boleh menggunakan abjad dan spasi","decimal":"%s harus menggunakan angka desimal","digit":"%s hanya boleh menggunakan digit","digit_no_zero":"%s hanya boleh menggunakan angka dan harus lebih besar dari nol","exact_length":"Panjang %s harus sama %d","greater_than":"%s harus lebih besar dari %d","greater_than_equal_to":"%s harus lebih besar atau sama dengan %d","integer":"%s harus menggunakan angka bulat","less_than":"%s harus kurang dari %d","less_than_equal_to":"%s harus kurang atau sama dengan %d","matches":"%s tidak cocok dengan %s","max_length":"Panjang %s tidak boleh melebihi %d karakter","min_length":"Panjang %s minimal harus %d karakter","is_numeric":"%s hanya boleh menggunakan angka","required":"%s wajib diisi","valid_captcha":"Kode captcha tidak valid","valid_referral":"Kode referral tidak valid"};
  var alertMsg = {"login_first":"Harap login terlebih dahulu!","confirmation_logout":"Anda yakin ingin keluar?","confirmation_calibrate":"Anda yakin ingin menarik saldo dari game?","confirmation_activate_bonus":"Anda yakin ingin mengaktifkan bonus ini?","session_expired":"Sesi login Anda telah berakhir. Harap masuk kembali!","start_end_date_empty":"Tanggal awal dan tanggal akhir tidak boleh kosong!","start_date_is_greater":"Tanggal awal lebih besar dari tanggal akhir","commission_amount":"Komisi harus lebih dari atau sama dengan Rp 10.000","request_failed":"Permintaan gagal, silahkan coba kembali","retry":"Coba lagi","copy_success":"Berhasil menyalin","loading":"Memuat...","varq_confirm_success":"Maaf, tagihan Anda masih menunggu untuk dibayarkan.","varq_confirm_failed":null};
</script>
<script async src='/cdn-cgi/challenge-platform/h/g/scripts/invisible.js?ts=1654488000'></script></head>
<body class="index-body" data-mobile="false">
<div id="dialog-mask" class="page-loader" style="display:none;">
<div id="loader" class="page-loader-body">
<i class="fa fa-spinner fa-pulse fa-fw"></i> Memuat...
</div>
</div>
<div class="header">
<div class="container">
<div class="row">
<div class="col-sm left-col">
<a href="/"><img src="https://cdn.robotaset.com/assets/tpl/32cd5714a25/images/logo.gif" class="logo" alt="gebyar123"></a>
</div>
<div class="col-sm right-col">
<div class="top-nav">
<div class="nav-wrapper">
<div class="newsInfo" id="newsInfo">
<i class="fas fa-bullhorn"></i>
<marquee class="marquee">  Hello, <?php echo $user_data['user_name']; ?> Selamat datang di Spin Wheel Gebyar123</marquee>
</div>
<div class="help-bar">
<a onclick="popup('common', 'contact-us')">Butuh bantuan?</a>
<div class="dropdown">
<a class="dropbtn" onclick="select_language();"><img src="https://cdn.robotaset.com/assets/images/common/icon-id.png"></a>
<ul class="dropMenu language-list">
<li><a class="in" data-id="id" title="Indonesia" href="javascript:void(0)"><img src="https://cdn.robotaset.com/assets/images/common/icon-id.png"></a></li>
<li><a class="en" data-id="en" title="English" href="javascript:void(0)"><img src="https://cdn.robotaset.com/assets/images/common/icon-en.png"></a></li>
<li><a class="cn" data-id="cn" title="中文" href="javascript:void(0)"><img src="https://cdn.robotaset.com/assets/images/common/icon-cn.png"></a></li>
</ul>
</div>
</div>
</div>
<script>
            $(".language-list a").on("click", function(e) {
              e.preventDefault();
              
              var _this = $(this);
              var lang = _this.data("id");
              var data = {"lang": lang};
              callApi('/api/client/setLanguage', data, function(response) {
                if( response.success == true ) {
                  redirectPage();
                } else {
                  alert(alertMsg.request_failed);
                }
              });
            });
          </script>
</div>
</head>
<body>
	<a href="logout.php">Logout</a>
	<center>
  <h1>Welcome to Lucky Wheel Gebyar123</h1>
</center>

  <br>
  <span>
  	<center>
  Hello, <?php echo $user_data['user_name']; ?> Selamat datang di Spin Wheel Gebyar123
</center>
</span>
</body>
</html>