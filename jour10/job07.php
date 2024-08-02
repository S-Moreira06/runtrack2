<?php
$servname = 'localhost';
$dbname = 'jour09';
$user = 'root';
$pass = '';

$dtb = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8", $user, $pass);

$query = $dtb->query("SELECT SUM(superficie) AS superficie_totale FROM etage;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
            border: 0;
            padding: 0;
        }
        td {
            border: solid 1px black;
            padding: 5px 10px;
        }
    
    </style>
</head>
<body>
    
    <table>
       <thead>
           <td>Superficie Totale</td>
       </thead>
       <?php
        
    while ($result = $query->fetch()){ ?>
        <tbody>
           <td><?= $result['superficie_totale'] ?></td>
       </tbody>
    <?php
    }   
    ?>
       
    </table>
</body>
</html>