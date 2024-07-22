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
            if ($nbr == 42) {
                echo "<b><u>".$nbr."</b></u>"."<br>";
                
            }
            else {
                echo $nbr."<br>";
            }
            $nbr++;
        }
    ?>
    
</body>
</html>