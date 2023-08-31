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
     <style>
          body {
               margin: 0;
               font-family: Arial, Helvetica, sans-serif;
          }

          .topnav {
               overflow: hidden;
               background-color: #333;
          }

          .topnav a {
               float: left;
               color: #f2f2f2;
               text-align: center;
               padding: 14px 16px;
               text-decoration: none;
               font-size: 17px;
          }

          .topnav a:hover {
               background-color: #ddd;
               color: black;
          }

          .topnav a.active {
               background-color: #04AA6D;
               color: white;
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
                              <li><a href="admin.php">Back</a></li>
                              <li><a href="index.php">Home</a></li>
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

               <div class="container">
                    <div class="row">
                         <div class="col-12">
                              <h4>Silahkan Upload Foto Rias Pengantin Wanita</h4>
                              <hr>
                              <form method="post" enctype="multipart/form-data" action="file-upload.php">
                                   <div class="form-group">
                                        <label>Multi Image</label>
                                        <input type="file" name="image[]" class="form-control" multiple />
                                   </div>
                                   <!-- <div class="form-group">
			<label>Image Two</label>
			<input type="file" name="image[]" class="form-control"/>
		</div>
		<div class="form-group">
			<label>Image Three</label>
			<input type="file" name="image[]" class="form-control"/>
		</div>
		<div class="form-group">
			<label>Image Four</label>
			<input type="file" name="image[]" class="form-control"/>
		</div>
		<div class="form-group">
			<label>Image Five</label>
			<input type="file" name="image[]" class="form-control"/>
		</div> -->
                                   <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                         </div>
                         <br> <img src="gambar/80x80.png" id="preview" class="img-thumbnail">
                    </div>
               </div>
          </div>
          </form>
          </div>
          </div>
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
          </script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
          </script>

          <hr>

          </div>
     </section>

     <hr>
     <div class="container">
          <div class="row">
               <div class="col-sm-150">
                    <div class="table-responsive">
                         <table class="table table-bordered" width='10%' cellspacing="10">
                              <thead>
                                   <tr>
                                        <th width='1%'>No</th>
                                        <th width='1000%'>
                                             <center>Gambar </center>
                                        </th>

                                        <th width='1%'>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                   // include database
                                   include 'koneksi.php';
                                   // perintah sql untuk menampilkan daftar bank yang berelasi dengan tabel kategori bank
                                   $sql = "select * from gambar order by id_gambar desc";
                                   $hasil = mysqli_query($kon, $sql);
                                   $no = 0;
                                   //Menampilkan data dengan perulangan while
                                   while ($data = mysqli_fetch_array($hasil)) :
                                        $no++;
                                   ?>
                                        <tr>
                                             <td><?php echo $no; ?></td>
                                             <td><img src="gambar/<?php echo $data['gambar']; ?>" class="rounded" width='100%' alt="Cinque Terre"></td>
                                             <td>

                                                  <a href="hapus.php?id_gambar=<?php echo $data['id_gambar']; ?>&gambar=<?php echo $data['gambar']; ?>" onclick="konfirmasi()" class="btn btn-danger" role="button">Hapus</a>
                                             </td>
                                        </tr>
                                        <!-- bagian akhir (penutup) while -->
                                   <?php endwhile; ?>

                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
     </div>


</body>

</html>
<style>
     .file {
          visibility: hidden;
          position: absolute;
     }
</style>

<script>
     function konfirmasi() {
          konfirmasi = confirm("Apakah anda yakin ingin menghapus gambar ini?")
          document.writeln(konfirmasi)
     }

     $(document).on("click", "#pilih_gambar", function() {
          var file = $(this).parents().find(".file");
          file.trigger("click");
     });

     $('input[type="file"]').change(function(e) {
          var fileName = e.target.files[0].name;
          $("#file").val(fileName);

          var reader = new FileReader();
          reader.onload = function(e) {
               // get loaded data and render thumbnail.
               document.getElementById("preview").src = e.target.result;
          };
          // read the image file as a data URL.
          reader.readAsDataURL(this.files[0]);
     });
</script>