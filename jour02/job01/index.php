<?php 
    $nbr = 0;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php 
        while($nbr <= 1337)
        {
            $nbr++;
            if ($nbr == 42) {
                echo "<b><u>".$nbr."</b></u>"."<br>";
                
            }
            elseif ($nbr <= 1337) {
                echo $nbr."<br>";
            }
        }
    ?>
    
</body>
</html>