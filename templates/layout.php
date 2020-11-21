<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
    <style>
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            margin: 0;
            -webkit-appearance: none;
        }
    </style>
</head>
<body>
	<?php require( TPL_PATH . './header.php'); ?>
	<?= $content ?>
	<?= isset($footer) ? $footer : '' ?>
</body>
</html>