<?php


$resultat = 0;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
       <p>Valeur de "a"</p>
        <input type="number" min="0" name="a" placeholder="Entrez un nombre">
        <p>Type de calculs</p>
        <select name="operator">
           <option value="">Choisissez une opération</option>
           <option value="addition">+</option>
           <option value="soustraction">-</option>
           <option value="multiplication">*</option>
           <option value="division">/</option>
           <option value="modulo">%</option>
            
        </select>
        <p>Valeur de "b"</p>
        <input type="number" min="0" name="b" placeholder="Entrez un nombre">
        <input type="submit" value="Envoyer">
        
        
        
        
        <?php
        if ( isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operator'])){
            $a = $_GET['a'];
            $b = $_GET['b'];
            $operator = $_GET['operator'];
            if ($operator == 'addition' ) {
                $resultat = $a + $b;
            }
            elseif ($operator == 'soustraction'){
                $resultat = $a - $b;
            }
            elseif ($operator == 'multiplication'){
                $resultat = $a * $b;
            }
            elseif ($operator == 'division'){
                if ($a == 0 || $b ==0){
                    $resultat = "Impossible de diviser par ZERO";
                }
                else {
                    $resultat = $a / $b;    
                }
                
            }
            
            
        }
            
            echo '<br><br>Resultat:&nbsp '.$resultat;
        
        ?>
    </form>
    <a href="index.php"><button>R-à-z</button></a>
</body>
</html>