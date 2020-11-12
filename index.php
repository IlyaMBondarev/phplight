<?php

$dir = "img";
$files = scandir($dir);
$name = count($files) - 1;

$whitelist = array('image/gif','image/jpg','image/jpeg','image/png','image/webp');

if (in_array($_FILES['inputfile']['type'], $whitelist) && $_FILES['inputfile']['size'] > 0 && $_FILES['inputfile']['size'] < 1000000 && isset($_FILES) && $_FILES['inputfile']['error'] == 0) {
    $array = explode(".", $_FILES['inputfile']['name']);
    $exp = array_pop($array);
    $_FILES['inputfile']['name'] = $name . '.' . $exp;
    $destiation_dir = dirname(__FILE__) .'\img\\' . $_FILES['inputfile']['name'];
    move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir );
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1050px;
            margin: 0 auto 10px;
        }

        img {
            max-width: 100px;
        }
    </style>
</head>
<body>

<div class="gallery">
    <?php
    $files = scandir($dir);
    ?>
    <?php for ($i = 0; $i < count($files); $i++) { ?>
        <?php if ($files[$i] !== '.' && $files[$i] !== '..') { ?>
            <a href="<?= $dir . "/" . $files[$i] ?>" target="_blank"><img src="<?= $dir . "/" . $files[$i] ?>" alt=""/></a>
        <?php } ?>
    <?php } ?>
</div>


<form method="post" enctype="multipart/form-data" action="index.php">
    Выберите файл для загрузки:
    <input type="file" name="inputfile">
    <input type="submit" name="upload" value="Загрузить">
</form>

</body>
</html>