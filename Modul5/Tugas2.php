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

    .form-container {
      border-radius: 5px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .form-container label {
      font-weight: bold;
      color: #525252;
      display: block;
      margin-bottom: 5px;
    }

    .form-container input[type="text"] {
      width: 100%;
      padding: 10px;
      font-size: 18px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 15px;
    }

    .form-container input[type="submit"] {
      background-color: #525252;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
      background-color: #333;
    }
  </style>
</head>
<body>

<h1>Formulir Biodata</h1>

<form action="Tugas2Act.php" method="post" class="form-container">
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" required>

  <label for="pekerjaan">Pekerjaan:</label>
  <input type="text" id="pekerjaan" name="kerja" required>

  <label for="umur">Umur:</label>
  <input type="text" id="umur" name="umur" required>

  <label for="alamat">Alamat:</label>
  <input type="text" id="alamat" name="alamat" required>

  <input type="submit" value="Submit">
</form>

</body>
</html>