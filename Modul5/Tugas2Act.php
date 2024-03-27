<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      color: #333;
      background-color: #f2f2f2;
      padding: 30px;
    }

    h1 {
      font-size: 36px;
      font-weight: bold;
      color: #525252;
      margin-bottom: 30px;
    }

    .bio-card {
      border-radius: 5px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .bio-card h2 {
      font-size: 24px;
      font-weight: bold;
      color: #525252;
      margin-top: 0;
      margin-bottom: 10px;
    }

    .bio-card p {
      font-size: 18px;
      line-height: 1.5;
      color: #333;
      margin-top: 0;
    }
  </style>
</head>
<body>

<h1>Biodata</h1>

<?php
  $nama = $_POST["nama"];
  $pekerjaan = $_POST["kerja"];
  $umur = $_POST["umur"];
  $alamat = $_POST["alamat"];

  echo "
    <div class=\"bio-card\">
      <h2>$nama</h2>
      <p>$pekerjaan, $umur tahun.</p>
      <p>Alamat: $alamat</p>
    </div>
  ";
?>

</body>
</html>