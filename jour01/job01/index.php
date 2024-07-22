<?php
    $str="LaPlateforme";
    $str2="Vive";
    $str3="!";
//         mettre bout a bout 2 chaines de carac: CONCATéNATION
    $total = $str2." ".$str." ".$str3 ;
    $val = 6;
    $val2 = 4;
    $totalval = $val + $val2;
    $myBool = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p>
       <?= $total; ?>
   </p> 
    <p>
        <?= $val; ?>
    </p>
    <p>
        <?= $totalval; ?>
    </p>
    <p>
        <?= $myBool; ?>
    </p>
</body>
</html>