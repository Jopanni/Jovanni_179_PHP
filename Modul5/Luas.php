<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Luas</title>
</head>
<body>
    <form action="" method="post">
        Panjang : <br> <input type="text" name="pan" size="20" maxlength="30"> <br>
        Lebar : <br> <input type="text" name="leb" size="20" maxlength="30"><br> <br>
        <input type="Submit" name="Hitung" value="Hitung"><input type="Submit" name="reset" value="reset">
    </form>    
    <?php
    if (isset($_POST['Hitung'])) {
        $panjang = $_POST['pan'];
        $lebar = $_POST['leb'];
        $luas = $panjang * $lebar;        
    }
    ?>
    <input type="text" name="has" size="20" maxlength="30" placeholder="Hasil" readonly 
    value="<?php if (isset($_POST['Hitung'])) { echo "$luas"; } if (isset($_POST['reset'])) { echo ""; }  ?>">        
</body>
</html>