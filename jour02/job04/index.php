<?php 
$nbr = 0;
    while($nbr <= 100)
        {
        $nbr++;
        if ($nbr%5==0 && $nbr%3==0)
            {
            echo "FizzBuzz"."<br>";
        }
        elseif ($nbr%5==0)
            {
            echo "Buzz"."<br>";
        }
        elseif ($nbr%3==0)
            {
            echo "Fizz"."<br>";
        }
        else {
            echo $nbr."<br>";
        }
        
    }
?>