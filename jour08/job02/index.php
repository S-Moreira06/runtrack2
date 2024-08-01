<?php
    if (!isset($_COOKIE['nbvisites'])){
        setcookie('nbvisites', 0);
    }
    
    elseif (isset($_COOKIE['nbvisites'])){
        setcookie('nbvisites', $_COOKIE['nbvisites'] + 1);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
       
        <?= 'Nombre de visites: '.$_COOKIE['nbvisites']; ?>
    </p>
</body>
</html>