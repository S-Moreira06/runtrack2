<?php
    session_start();
    if (!isset($_SESSION['nom'])){
        $_SESSION['nom'] = [];
    };
        
    if (isset($_GET['prenom'])){
        array_push($_SESSION['nom'], $_GET['prenom']);
    };
    function resetsession(){
        $_SESSION['nom'] = [];
    }
    if(isset($_GET['reset'])){
        resetsession();
    }
        
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="prenom">
        <input type="submit">
    </form>

    <form action="" method="GET">
        <input type="hidden" name="reset" value="1">
        <input type="submit" value="Reinitialiser">
    </form>    
    
    <p>
       Liste des prénoms enregistrer:<br>
        <?php  
//        var_dump($_SESSION['nom']); 
        foreach($_SESSION['nom'] as $name){
            echo $name.'<br>';
        }
        ?>
        
    </p>
</body>
</html>