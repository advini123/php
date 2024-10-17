<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function f1(...$x){
        foreach($x as $y){
            echo ($y+10)." ";
        } 
     }
     f1(32,43,54,65,76);
     echo "<hr>";

    function f2($mbiemri,...$emri){
        foreach($emri as $x){
            echo "emri: $x, mbiemri: $mbiemri<br>";
        }
    }
    f2("piraj","florian","astrit","omer");
    echo "<hr>";

    function f3(...$x){
        $shuma=0;
        foreach($x as $y){
            $shuma+=strlen($y);
        }
        echo "numri total i karaktereve eshte: $shuma";
    }
    f3("hello","php","programming","fun");
    echo "<hr>";

    function f4($username,$password){
        echo "usernemi i juaj eshte: $username, password i juaj eshte:";
    }
    f4("florian",22221111);
    f4("shkolla digjitale","shkolladojotale2023");
    f4("CS2","mosshkokaA");
    echo "<hr>";

    function f5($emri,$mosha){
       if($mosha<18){
        echo "$emri ju jeni me i madh se 18 vjeq<br>";
       }
       else{
        echo "$emri jeni nen moshen";
       }
    }
    f5("advini",22);
    f5("diana",12);
    echo "<hr>";

    function f6($nr1,$nr2){
        if($nr1<$nr2){
            echo "numri $nr1 eshte me i vogel se numri $nr2<br>";
        }
        elseif($nr1>$nr2){
            echo "numri i par eshte me i madh se i dyti: $nr1>$nr2<br>";
        }
        else{
            echo "numri $nr1 eshte me i madhe se numri $nr2<br>";
        }
    }
    f6(5,10);
    f6(10,5);
    f6(10,10);
    echo "<hr>";

    function f7(...$x){
        foreach($x as $y){
            if($y%2==0){
                echo "numri $y plopjestohet me dy<br>";
            }
            else{
                echo "numri $y nuk plopjestohet me dy<br>";
            }
        }
    }
    f7(1,2,3,4,5);
    echo "<hr>";

    $shuma=0;
    function f8(...$y){
        global $shuma;
        foreach($y as $x){
            $shuma+=$x;
        }
        echo "shuma e te gjithave elemnteve te fuctionit eshte: $shuma";
    }
    f8(89,72,32,17,42);
    echo "<hr>";

    function f9(...$z){
        $maxi=max($z);
        echo "vlera me e madhe e parametrave eshte $maxi<br>";
        sort($z);
        echo "numri e sortuar jane: ";
        foreach($z as $x){
            echo "$x ";
        }
    }
    f9(32,87,53,99);
    echo "<hr>";

    function f10(...$mosha){
        $mesatare=0;
        foreach($mosha as $x){
            $mesatare+=$x;
        }
        $total=$mesatare/12;
        echo "mosha mesatare e klases sone eshte: $total";
    }
    f10(31,16,16,17,17,16,16,16,16,18,16,16);
    echo "<hr>";
    ?>
</body>
</html>