<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
     $extension = array('tif', 'jpg', 'png', 'gif', 'jpeg');
     foreach ($_FILES['image']['tmp_name'] as $key => $value) {
          $filename = $_FILES['image']['name'][$key];
          $filename_tmp = $_FILES['image']['tmp_name'][$key];
          echo '<br>';
          $ext = pathinfo($filename, PATHINFO_EXTENSION);

          $finalimg = '';
          if (in_array($ext, $extension)) {
               if (!file_exists('gambar/' . $filename)) {
                    move_uploaded_file($filename_tmp, 'gambar/' . $filename);
                    $finalimg = $filename;
               } else {
                    $filename = str_replace('.', '-', basename($filename, $ext));
                    $newfilename = $filename . time() . "." . $ext;
                    move_uploaded_file($filename_tmp, 'gambar/' . $newfilename);
                    $finalimg = $newfilename;
               }
               $creattime = date('Y-m-d h:i:s');
               //insert
               $sql = "INSERT INTO `gambar2`( `gambar`, `image_createtime`) VALUES ('$finalimg','$creattime')";
               mysqli_query($kon, $sql);

               header('Location: up_ten.php');
          } else {
               //display error
          }
     }
}
