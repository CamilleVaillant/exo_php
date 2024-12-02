<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("header.php") ?>
    <h1>EXO PHP</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, reprehenderit!</p>
    <?php
        $info = "h2";
        

        echo "<".$info.">sous titre</".$info.">";

    ?>
    <!-- exercice 1 -->
    <h2>exercice1</h2>
    <?php
        for($chiffre = 0; $chiffre <= 25; $chiffre++){
            echo $chiffre ;
        }
    ?>
    <!-- exercice 2 -->
    <h2>exercice2</h2>
    <?php
        $chiffre = 25;
        while( $chiffre > 0){
            echo $chiffre--;
        }
    ?>
    <!-- exercice 3  -->
    <h2>exercice3</h2>
    <?php
        for($chiffre = 1; $chiffre <=25; $chiffre++){
            for($nombre = 1; $nombre <= $chiffre; $nombre++ ){
                echo $nombre;
            }
            echo"<br>";
            
        }
    ?>
    <!-- exercice 4 -->
    <h2>exercice4</h2>
    <?php
    $x=0;
    $y=0;
        for($x = 0; $x <=30; $x++){
            $y=$x+$y;
        }
        echo $y;
    ?>

    <!-- exercice 5 -->
    <h2>exercice5</h2>
    <?php
        function EstPair($nbr){
            if($nbr % 2 == 0){
                return true;
            }else{
                return false;
            }
        }
    ?>

    <!-- exercice 6 -->
    <h2>exercice6</h2>
    <?php
        for($pair =0; $pair <=20; $pair++){
            if (EstPair($pair)) {
                echo $pair;
            }
        }
    ?>

    <!-- exercice 7 -->
    <h2>exercice7</h2>
     <?php
        function Pythagore($x, $y){
            $hypo= sqrt(($x*$x)+($y*$y));
            return $hypo;
        }
    ?>

    <!-- exercice 8 -->
     <h2>exercice8</h2>
    <?php
       $heur =20;

        if($heur>0 && $heur<=12){
            echo "matin";
        }else if($heur>12 && $heur<=19){
            echo "aprés-midi";
        }else if($heur>19 && $heur<=24){
            echo "soir";
        }else{
            echo "pas plus de 24";
        }
    ?>

    <!-- exercice 9 -->
     <h2>exercice9</h2>
     <?php
        echo (EstPair(99)) ? "est pair" : "est impair";
    ?>

    <!-- exercice 10 -->
     <h2>exercice10</h2>
    <?php
     
       for($x=0; $x<=100; $x++){
            if($x % 3 == 0 && $x % 5 == 0){
                echo "<p>foobar</p>" ;
            }else if($x % 5 == 0){
                echo "<p>bar</p>";
            }else if($x % 3 == 0){
                echo "<p>foo</p>";
            }else{
                echo"<p>". $x ."</p>";
            }
       } 
    ?>

    <!-- exercice 11 -->
     <h2>exercice11</h2>
    
     <?php
        $identitePersonne = [
            'nom' => 'Croft',
            'prenom' => 'Lara',
            'metier' => 'Archéologue',
        ];
        echo "<h1>"C/'est un plaisir de vous voir" .$</h1>"
     ?>
    








</body>
</html>