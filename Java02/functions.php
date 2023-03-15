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
    //First function
    function print_details($emriF,$emriD,$vitiA){
        echo "Te dhenat e studentit jane: Fakulteti : " .$emriF."<br>
        Drejtimi : " .$emriD. "<br> Viti Akademik : " .$vitiA."<br>";
    }

    print_details("FIEK","IKS",2021);
    
?>

<?php 
    //Second function       RASTI I
    function sumOfNumbers($a,$b){
        echo "<br> Shuma e numrave ne parameter eshte : ". $a+$b."<br>";
    }
    sumOfNumbers(4.3,5);
?>

<?php 
    //Third function        
    function mestarjaNumrave(int $x,int $y, int $z){
        $sum = $x + $y + $z;

        echo "<br> Mesatarja eshte : " .$sum/3 ."<br>";
    }
    mestarjaNumrave(2,2,2);
?>

<?php 
    #Variabla globale - ajo variabel e cila mund te deklarohet jashte 
    #funksionit dhe te jete e disponueshme per te gjitha pjeset e prg
    $var_gl = 30;
    function printt(){
        global $var_gl; #variabla mrenda funksionit duhet te deklarohet si global
        echo "<br> Vlera e variables globale eshte: "
            .$var_gl."<br>";
    }
    printt();
?>
    #AUTOGLOBALS
<?php
    //$GLOBALS['x'];
    $a = 3;
    $b = 5;
    function printo(){
        $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    printo();
    echo "</br> Result is : " .$c;
    
?>

<?php 
    /*
    //$_REQUEST["emri"];
    $name = $_REQUEST['Suhejl'];
    if(empty($name)){
        echo "Name is empty";
    }else{
        echo "Name is : ". $name;
    }
    */
?>

