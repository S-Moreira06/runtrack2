<?php
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
    $voy = ['a','e','i','o','u','y','I'];
    $a = 0;
    $b = strlen($str);
    $nbrc = 0;
    $nbrv = 0;
    

    while ($a != $b)
    {
        if ($str[$a] == $voy[0] || $str[$a] == $voy[1] || $str[$a] == $voy[2] || $str[$a] == $voy[3] || $str[$a] == $voy[4] || $str[$a] == $voy[5] || $str[$a] == $voy[6]){
            $nbrv++;
        }
        else{
            $nbrc++;
        }
        $a++;
    }
    $dic = [
        'Consonnes' => $nbrc,
        'Voyelles' => $nbrv,
    ];    
?>


<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title></title>
</head>

<body>
    <table>
        <thead>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </thead>
        <tbody>
            <td> <?= $nbrc ?></td>
            <td> <?= $nbrv ?></td>
        </tbody>
    </table>
</body>
</html>
