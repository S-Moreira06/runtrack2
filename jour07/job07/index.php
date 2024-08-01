<?php


function gras($str){
    $result = '';
    {
        $strmax = strlen($str);
        for ($i=0 ; $i!=$strmax ; $i++){
            $a = $str[$i];
            if (ctype_upper($a)){
                $result .= '<b>' . $a . '</b>';
            }
        };
        $result = $str;
    }
    return $result;
}
function cesar($str, $decalage = 2){
    if ( isset($_GET['str']) && isset($_GET['fonction'])){
        $strmax = strlen($str);
        for ($i=2;$i!=$strmax;$i++){
            $str[$i-$decalage] = $str[$i];
        }
    }
    return $str;
}
function plateforme($str){
    if ( isset($_GET['str']) && isset($_GET['fonction'])){
        $strmax = strlen($str);
        for ($i=0;$i!=$strmax;$i++){
            if ($str[$i] == 'm' && $str[$i+1] == 'e'){
                $str[$i+1] = $str[$i+1].'_';
            }
        }
        
    }
    return $str; 
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
       <p>Entrez votre texte a transformer</p>
        <input type="text" name="str">
        <p>Choisissez votre transformation</p>
        <select name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <input type="submit">
    </form>
    <p>
       <?php 
        if ($_GET['fonction'] == 'gras'){
            echo gras($_GET['str']);
        }
        elseif ($_GET['fonction'] == 'cesar'){
            echo cesar($_GET['str']);
        }
        elseif ($_GET['fonction'] == 'plateforme'){
            echo plateforme($_GET['str']);
        }
        ?> 
    </p>
</body>
</html>