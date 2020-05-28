<?php
session_start();

header("Cache-Control: no-cache, must-revalidate");
header("Content-type: image/png");

$_SESSION["captcha"] = rand(100000, 999999);

$canvas = imagecreate(100, 30);

imagecolorallocate(
	$canvas,
	69,
	179,
	157
);
imagettftext(
	$canvas,
	14,
	0,
	20,
	20,
	imagecolorallocate($canvas, 255, 252, 255),
	"./georgia.ttf",
	$_SESSION['captcha']
);

imagepng($canvas);
imagedestroy($canvas);
