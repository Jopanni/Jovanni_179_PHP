<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php
        $nama[]="Anies";
        $nama[]="Prabowo";
        $nama[]="Ganjar";
        echo $nama[1] . $nama[2] . $nama[0];
        echo "<br>";
        $jum_array =count($nama);
        echo "jumlah elemen array =".$jum_array
    ?>
</body>
</html>