<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="shortcut icon" href="home/dist/img/icon.png"> -->

    <title>on-Fatim</title>


    <link href="resources/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="resources/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="resources/css/style.css" rel='stylesheet' type='text/css' />
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>


   

    </head>

    <body>

        <?php require_once('routes.php') ?>







        <script>
          $( "span.menu" ).click(function() {
            $( ".head-nav ul" ).slideToggle(300, function() {
            });
          });
        </script>


        <script src="resources/resources/js/responsiveslides.min.js"></script>
        <script>
          $(function () {
            $("#slider4").responsiveSlides({
              auto: true,
              pager: true,
              nav: true,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
            });

          });
        </script>


          <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo3").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: false,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint:480,
            visibleItems: 1
          },
          landscape: {
            changePoint:640,
            visibleItems: 2
          },
          tablet: {
            changePoint:768,
            visibleItems: 3
          }
        }
      });

    });
  </script>
  <script type="text/javascript" src="resources/js/jquery.flexisel.js"></script>

  <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo1").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint:480,
            visibleItems: 1
          },
          landscape: {
            changePoint:640,
            visibleItems: 2
          },
          tablet: {
            changePoint:768,
            visibleItems: 3
          }
        }
      });

    });
  </script>
  <script type="text/javascript" src="jresources/s/jquery.flexisel.js"></script>


<div class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="col-md-3 location">
          <h4>Alamat</h4>
          <p>#04 Dist.City,State,PK</p>
          <h4>Jam Buka</h4>
          <p>Hari Kerja 8 pagi - 9 malam</p>
          <p>Hari Libur 9 pagi - 7 malam</p>
          <p>Telepon dulu jika hari libur</p>
        </div>
        <div class="col-md-3 customer">
          <h4>customer service</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>
          <h4>phone</h4>
          <h6>1(234)567-8910</h6>
          <h4>Hubungi Kami</h4>
          <h6>Hubungi Website Kami</h6>
        </div>
        <div class="col-md-3 social">
          <h4>Social</h4>
          <div class="face-b">
            <img src="resources/images/foot.png" title="name"/>
            <a href="#"><i class="fb"> </i></a>
          </div>
          <div class="twet">
            <img src="resources/images/foot.png" title="name"/>
              <a href="#"><i class="twt"> </i></a>
          </div>
        </div>
        <div class="col-md-3 sign">
          <h4>Daftar untuk Berlangganan Berita Terbaru</h4>
            <form>
            <input type="text" class="text" value="YOUR EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ';}">
            </form>
        </div>
          <div class="clearfix"> </div>
      </div>
      <div class="footer-bottom">
        <p>@copyright <a href="#" target="_blank"> kelompok7B-TRPL</a></p>
      </div>
    </div>
  </div>
   


  </body>

  </html>
