<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggalan</title>
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
  
  h2 {
    font-size: 24px;
    font-weight: bold;
    color: #525252;
    margin-top: 30px;
    margin-bottom: 10px;
  }
  
  p {
    font-size: 18px;
    line-height: 1.5;
    color: #333;
    border-radius: 5px;
    padding: 15px;
    background-color: #fff;
    margin-bottom: 20px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
  }
    </style>
</head>
<body>
    <h1>Tanggal</h1>

    <h2>Format 1: DD/MM/YYYY, hh:mm:ss</h2>
    <p><?php echo date('d/m/Y, h:i:s', strtotime('27/03/2024, 15:47:24')); ?></p>

    <h2>Format 2: DD MMMM YYYY, hh:mm:ss AM/PM</h2>
    <p><?php echo date('d F Y, h:i:s A', strtotime('27/03/2024, 15:47:24')); ?></p>

    <h2>Format 3: Hari Tanggal Waktu</h2>
    <p><?php echo date('l, d F Y, H:i:s', strtotime('27/03/2024, 15:47:24')); ?></p>

    <h2>Format 4: Hari Tanggal dan Jam</h2>
    <p><?php echo date('l, d F Y, h:i A', strtotime('27/03/2024, 15:47:24')); ?></p>
</body>
</html>