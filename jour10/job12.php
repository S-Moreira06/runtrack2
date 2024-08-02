<?php
$servname = 'localhost';
$dbname = 'jour09';
$user = 'root';
$pass = '';

$dtb = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8", $user, $pass);

$query = $dtb->query("SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31' ;");
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
           <td>Prenom</td>
           <td>Nom</td>
           <td>Date de naissance</td>
       </thead>
       <?php
        
    while ($result = $query->fetch()){ ?>
        <tbody>
          <td><?= $result['prenom'] ?></td>
          <td><?= $result['nom'] ?></td>
          <td><?= $result['naissance'] ?></td>
       </tbody>
    <?php
    }   
    ?>
       
    </table>
</body>
</html>