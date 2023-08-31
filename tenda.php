<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="webthemez">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sanggar Rias Idean</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/font-icon.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/style4.css" />
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    body {
      background-image: url(jk.jpg);
      background-size: cover;
      background-attachment: fixed;
    }

    p {
      color: black
    }
  </style>
</head>

<body>
  <!-- header section -->
  <section class="banner" role="banner" id="home">
    <header id="header" class="fix-hed">
      <div class="header-content clearfix"> <a class="logo" href="index.php">Idean <span>Sanggar-Rias </span></a>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav">
            <li><a href="index.php">Back</a></li>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
      </div>
    </header>
    <!-- banner text -->
  </section>
  <!-- section -->
  <section id="detailsPage">
    <div class="container">
      <div class="row">
        <div class="section-header">
          <h2 class="wow fadeInDown animated"> Tenda Style</h2>
          <h3 class="wow fadeInDown animated">
            Photographs Of Dekorasi Tenda </h3>
        </div>
        <?php
        // include database
        include 'koneksi.php';
        // perintah sql untuk menampilkan daftar bank yang berelasi dengan tabel kategori bank
        $sql = "select * from gambar2 order by id_gambar desc";
        $hasil = mysqli_query($kon, $sql);
        $no = 0;
        //Menampilkan data dengan perulangan while
        while ($data = mysqli_fetch_array($hasil)) :
          $no++;
        ?>
          <div id="content20" data-section="content-20" class="data-section">
            <div class="col-sm-12 col-md-3">
              <div class="align-center">
                <br> <a href="gambar/<?php echo $data['gambar']; ?>" class="work-box"><img src="gambar/<?php echo $data['gambar']; ?>" width="280" height="260" />
                  <br>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    </div>
  </section>
  <!-- section -->
  <!-- services section -->
  <section id="services" class="services service-section">
    <div class="container">
      <div class="section-header">
        <h2 class="wow fadeInDown animated">Features</h2>
        <p class="wow fadeInDown animated">fitur-fitur kami terdiri dari</p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart"></span>
          <div class="services-content">
            <h5>satisfactory results</h5>
            <p>kita disini bekerja dengan maksimal untuk pelanggan merasa puas dengan hasil yang kami berikan.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-gift"></span>
          <div class="services-content">
            <h5>Gift Coupon</h5>
            <p>
              sometimes there's a coupon event, so come here to get a coupon and win the prize we give you</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone"></span>
          <div class="services-content">
            <h5>kontak kami</h5>
            <p>kami di sini menerima riasan penerikaan,sunatan dan lain2x jika berminat silakan hubungi kami Tel: 08161913978.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- services section -->
  <!--About-->
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
    <div class="image-container col-sm-6 col-xs-12 pull-left">
      <div class="background-image-holder">

      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
          <div>
            <h3>About Us</h3>
          </div>
          <div>
            <p>assalamualaikum warah matullahi wabarakatu saya selaku admin serta pemiki website ini mengucapkan terima kasih kepada kalian yang sudah menyukai dan menggunakan jasa kami dalam melakukan Riasan untuk suatu acara seperti pernikahan,sunatan dan lain-lainnya</p>
            <p>Semoga kalian puas dengan layanan kami mohon lebihnya mohon maaf sekian terima kasih assalamualaikum warah matullahi wabarakatu</p>
          </div>
          <a href="#gallery" class="btn btn-outline btn-outline outline-dark">Gallery</a>
        </div>
      </div><!-- /.row-->
    </div><!-- /.container -->
  </section>

  <!-- Testimonials section -->
  <section id="testimonials" class="section testimonials no-padding">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="flexslider">
          <h1>penjelasan pemilik</h1>
          <ul class="slides">
            <li>
              <div class="col-md-12">
                <blockquote>
                  <p>"pemilik serta yang memiliki bakat dalam merias,nyalon, make up.</p>
                  <p>Maryani</p>
                </blockquote>
              </div>
            </li>
            <li>
              <div class="col-md-12">
                <blockquote>
                  <p>suami dari yang sang pemilik salon(maryani)</p>
                  <p>Jefry</p>
                </blockquote>
              </div>
            </li>
            <li>
              <div class="col-md-12">
                <blockquote>
                  <p>pemilik sekaligus suami istri yang memiliki salon </p>
                  <p>Maryani & Jefry</p>
                </blockquote>
              </div>
            </li>
            <li>
              <div class="col-md-12">
                <blockquote>
                  <p>anak dari sang pemilik dan sekaligus yang membuat websitenya</p>
                  <p>iqshan</p>
                </blockquote>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials section -->
  <!-- JS FILES -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/retina.min.js"></script>
  <script src="js/modernizr.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="js/jquery.contact.js"></script>

  <H1>List Rias</H1>
  <br>
  <div class="col-sm-3">


    <h4 class="entry-title">
      <a href="women.php"">Women's Rias</a>
            
               
                    <div class=" recent">
        <a href="#"><img class="img-responsive" src="img1.jpg" width="300px alt="" /></a>
                            </ul>
                        </div>
                        <h4>
                          <a href=" women.php">
          <button class="btn btn-primary">Go To</button>
          <br>

          <hr>
          <h4 class="entry-title">
            <a href="tenda.php"">Tenda Rias</a>
                        </h4>
                        <div class=" recent">
              <a href="#"><img class="img-responsive" src="anjay.jpg" width="300px alt="" /></a>
                           
                            <a href=" tenda.php">
                <button class="btn btn-primary">Go To</button>

                <br>
                <hr>
                <h4 class="entry-title">
                  <a href="husban.php"">Husband and Wife Rias</a>
                        </h4>
                        <div class=" recent">
                    <a href="#"><img class="img-responsive" src="img3.jpg" width="300px alt="" /></a>
                            
                            <a href=" husban.php">
                      <button class="btn btn-primary">Go To</button>

                      <br>


                      <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/green-bintang-jatuh.js" type="text/javascript"></script>
                      <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
                      <style type="text/css">
                        * {
                          cursor: url(http://cur.cursors-4u.net/anime/ani-12/ani1159.ani), url(http://cur.cursors-4u.net/anime/ani-12/ani1159.gif), auto !important;
                        }
                      </style><a href="http://www.cursors-4u.com/cursor/2012/01/01/zora-one-piece.html" target="_blank" title="Zora - One Piece"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Zora - One Piece" style="position:absolute; top: 0px; right: 0px;" /></a>

                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>