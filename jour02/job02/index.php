<?php 
    $nbr = 1;
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
            echo $nbr."<br>";
            $nbr++;
            if($nbr == 26 || $nbr == 37 || $nbr == 88 || $nbr == 1111 || $nbr == 3233 )
            {
                $nbr+=2;
            }
        }
    ?>
    
</body>
</html>

