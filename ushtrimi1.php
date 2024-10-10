<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("a",32);
    define("b",22);
    $shumzimi=a*b;
    echo $shumzimi;
    echo "<br>";

    $b="25 shtator 2024";
    $b=(int) $b;
    var_dump($b);
    echo "<br>";

    $c=true;
    $c=(int)$c;
    var_dump($c);
    echo "<br>";

    $d=72;
    $d=(string)$d;
    var_dump($d);
    echo "<br>";

    $e=false;
    $e=(string)$e;
    var_dump($e);
    echo "<hr>";

    if(7<10 xor 9<22){
        echo "e sakt";
    }
    else{
        echo "e pasakt";
    }
    echo "<hr>";

    $x=7;
    echo $x++;
    echo "<br>".$x;
    echo "<br>";


    $y=7;
    echo ++$y;
    echo "<hr>";

    $aa=min(32,78,99,4);
    $bb=max(32,78,99,4);
    $pjestimi=$bb/$aa;
    $rrum=round($pjestimi);
    echo "pjestimi i numrit $bb me numrin $aa eshte: $rrum";
    echo "<br>";


    $rrenja=sqrt(49);
    $fuqia=pow($rrenja,2);
    echo "rrenja katroree 49 kur ngritet ne fuqi eshte $fuqia";
    echo "<br>";

    $r1=rand(0,10);
    $r2=rand(50,60);
    $shuma=$r1+$r2;
    echo "shuma e numrit $r1 me numrin $r2 eshte:$shuma ";
    echo "<br>";

    $stringu1="programimi me i mir eshte ne javascript";
    $fjalet=str_word_count($stringu1);
    echo "numri i fjalve ne string eshte:$fjalet";
    echo "<br>";

    $replace=str_replace("javascript","PHP",$stringu1);
    echo $replace;
    echo "<br>";

    $str1=strlen("javascript");
    $str2=strlen("bootstrap");
    if ($str1>$str2){
        echo"stringu i par ka me shum kareaktere se stringut i dyt";
    }
    elseif($str1==$str2){
        echo"ccc"
    }
    else{
        echo"efsg"
    }

    ?>
</body>
</html>