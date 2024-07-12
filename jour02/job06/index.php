<?php 
    $largeur = 20;
    $hauteur = 10;
    $canvas = imagecreatetruecolor($largeur, $hauteur);
    $pink = imagecolorallocate($canvas, 255, 105, 180);
    
    imagerectangle(
        $canvas,
        50,
        50,
        150,
        150,
        $pink,
    );
    header('Content-Type: image/jpeg');

    imagejpeg($canvas);
    imagedestroy($canvas);
?>




























