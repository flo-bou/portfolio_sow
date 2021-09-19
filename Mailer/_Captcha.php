<?php
session_start();
header('Content-Type: image/png');
// Largeur du capcha
$largeur=120; // 115 vanilla
// Hauteur du capcha
$hauteur=20; // 35 vanilla
// Nombre de lignes dans le capacha
$lignes=10;
$caracteres="ABCDEF0123456789";
$image = imagecreatetruecolor($largeur, $hauteur);
imagefilledrectangle($image, 0, 0, $largeur, $hauteur, imagecolorallocate($image, 255, 255, 255));

function hexargb($hex) {
    return array("r"=>hexdec(substr($hex,0,2)),"g"=>hexdec(substr($hex,2,2)),"b"=>hexdec(substr($hex,4,2)));
}

for($i=0; $i<=$lignes; $i++){
    $rgb=hexargb(substr(str_shuffle("ABCDEF0123456789"),0,6));
    imageline($image,rand(1,$largeur),rand(1,$hauteur),rand(1,$largeur),rand(1,$hauteur),imagecolorallocate($image, $rgb['r'], $rgb['g'], $rgb['b']));
} // pour ref     imageline($image,rand(1,$largeur-25),rand(1,$hauteur),rand(1,$largeur+25),rand(1,$hauteur),imagecolorallocate($image, $rgb['r'], $rgb['g'], $rgb['b']));
// Nombre de caractères dans le capacha (dernier chiffre)
$code1=substr(str_shuffle($caracteres),0,6); // $code1 = code à 6 chiffres réalisé par partir d'un mélange de $caracteres
$_SESSION['captcha']=$code1;
$code="";
for($i=0; $i<=strlen($code1); $i++){
    $code .=substr($code1, $i, 1)." ";
}
imagestring($image, 5, 12, 3, $code, imagecolorallocate($image, 0, 0, 0)); // vanilla 5 10 5
imagepng($image);
imagedestroy($image);
?>