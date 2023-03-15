<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $a=5;$b=&$a; $a=6;
    echo $a;
    echo "<br/>".$b;
?>

<?php
    #if statements
    $_var = 5;
    if($_var == 5){
        echo "<p>Statement merret si true.</p>";
        echo "<p> $_var eshte e barabarte me : ". $_var."</p>";
        echo "<p>Secila prej ketyre rreshtave do te printohet.</p>";
    }
    echo "<p>Kjo deklarate ekzekutohet gjithmone edhe nese 
        statement is true or false.</p>";
?>

<?php
    function HI($gjuha='eng')
    {
        if($gjuha == 'eng') return "Yello";
        else if($gjuha == 'fr') return "Bonjour";
            return "Pershendetje";
    }
    echo "<br>".HI('eng');
    echo "<br>".HI('dsch')."<br>";
?>

<?php 
    #Switch
    $dita  = "Sun";
    switch ($dita){
        case "Sun":
            echo "Dite e Diel"; break;
        case "Mon":
            echo "Dite e Hene"; break;
            default:
            echo "Dite te tjera";
    }
?>

<?php 
    $fastFood = array("pizza","burgers","french fries",
                "tacos", "fried chicken");

            echo "<br><br>Ushqimet e shpejta jane :";
            for($i = 0; $i<5; $i++)
            {
                echo "<br>" . $fastFood[$i] ;
            }
            foreach($fastFood as $MenuItem){
                echo "<p>$MenuItem</p>";
            }
?>


