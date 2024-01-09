<?php
//pengulangan php
//for / foreach
$angka = [11,46,7,8,94,63,12,77];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan pengulangan foreach</title>
    <style>
    div {
        width: 50px;
        height: 50px;
        background-color: red;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
        </style>
</head>
<body>
    <?php foreach ( $angka as $key ) {?>
        <div> <?php echo $key; ?> </div>
    <?php } ?>
</body>
</html>