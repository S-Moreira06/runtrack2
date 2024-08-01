   <?php
    if( !isset($_COOKIE['nom'])){
        setcookie('nom', 0);
    }
    elseif (isset($_COOKIE['nom'])){
        setcookie('nom', $_GET['prenom']);
        $_COOKIE["nom"] = $_GET["prenom"];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    if( $_COOKIE['nom'] == 0){ ?>
        <form action="" method="GET">
            <input type="text" name="prenom">
            <input type="submit" value="Connexion">
        </form>
    <?php }
    else{
        echo 'Bonjour et bienvenue, '. $_GET['prenom'];
    }

?>
    
</body>
</html>