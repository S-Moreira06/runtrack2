<?php
    session_start();
    if (!isset($_SESSION['nbvisites'])){
        $_SESSION['nbvisites'] = 0;
    }
    
    elseif (isset($_SESSION['nbvisites'])){
        $_SESSION['nbvisites']++;
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
        <?= 'Nombre de visites: '.$_SESSION['nbvisites']; ?>
    </p>
</body>
</html>