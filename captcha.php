<?php
session_start();
$img = imagecreatetruecolor(100, 50);
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);

//$red = imagecolorallocate($img, 255, 0, 0);
//$pink = imagecolorallocate($img, 200, 0, 150);
//$green = imagecolorallocate($img, 0, 255, 0);
//$blue = imagecolorallocate($img, 0, 0, 255);

function randomString($length) {
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double) microtime() * 1000000);
    $str = "";
    $i = 0;
    while ($i <= $length) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $str = $str . $tmp;
        $i++;
    }
    return $str;
}

imagefill($img, 0, 0, $black);
$string = randomString(rand(7, 10));
$_SESSION['string']=$string;


//text-image(reference img, font-size, angle, x-axis, y-axis, font-color, font, text)
imagettftext($img, 12, 0, 15, 15, $white, "calibri.ttf", $string);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);