<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    file_put_contents("./filet/text10.txt","programimi eshte super fan");

    $lexo=file_get_contents("./filet/text10.txt");
    echo $lexo;
    echo "<hr>";

    $a="./filet/text10.txt";
    if(file_exists($a)){
        echo "file ekziston";
    }
    else{
        echo "file nuk ekziston";
    }
    echo "<hr>";

    $b="ushtrimi.txt";
    if(file_exists($b)){
        echo file_get_contents($b);
    }
    else{
        echo "file nuk ekziston";
    }
    echo "<hr>";

    $c="ushtrimi11.txt";
    $d="teksti i pare";
    file_put_contents($c,$d);
    echo "teksti eshte vendosur ne file";
    $lexo2=file_get_contents($c);
    echo "teksti i shkruar nga ana juaj eshte: $lexo2";
    echo "<hr>";

    file_put_contents("./filet/text12.txt","lipjan");
    unlink("./filet/text12.txt");
    if(file_exists("./filet/text12.txt")){
        echo "file nuk u fshi";
    }
    else{
        echo "file u fshia me sukses";
    }
    echo "<hr>";

    $e="text13.txt";
    $f="text14.txt";
    $teksti="lipjani";
    file_put_contents($e,$teksti);
    $lexo4=file_get_contents($e);
    file_put_contents($f,$lexo4);
    echo file_get_contents($f);
    echo "<hr>";

    $x=rand(1,1000);
    if($x<100){
        echo "kopania ka nevoj per produkte";
    }elseif($x<=500){
        echo "kompania eshte mir";
    }elseif($x>500){
        echo "kompania ka shum produkte";
    }    
    echo "<hr>";

    $p="programimi me i mir eshte ne JS";
    $ab=str_replace("JS","php",$p);
    echo $ab;
    echo "<hr>";

    $nr=rand(10,32);
    if($nr<18){
        echo "ftofte";
    }
    elseif($nr>19 && $nr<=24){
        echo "dhoma normal";
    }
    else{
        echo "dhoma eshte nxet ";
    }
    echo "<hr>";
    ?>
</body>
</html>