<?php
  $nama = "SATRIA PUTRA ARDY B";
  $npm_mahasiswa = "22313018"; 
  $pesan_selamat_datang = "Selamat datang di website saya!";
?>

<html>
  <head>
    <title>Data Anda</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        text-align: center;
      }
      .container {
        width: 80%;
        margin: 40px auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h1 {
        color: #00698f;
      }
      p {
        margin-bottom: 20px;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <h1>Data Anda</h1>
      <p>Nama Anda: <?php echo $nama; ?></p>
      <p>NPM: <?php echo $npm_mahasiswa; ?></p>
      <br>
      <h2><?php echo $pesan_selamat_datang; ?></h2>
    </div>
  </body>
</html>