<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=10;
    while($x>=4){
        echo "$x <br>";
        $x--;
    }
    echo "<hr>";


    $y=10;
    do{
        echo"$y <br>";
        $y--;
    }
    while($y>=4);

    for($z=10;$z>=4;$z--){
        echo "$z <br>";
    }
    echo "<hr>";


    $a=1;
    while($a<=5){
        if($a==4){
            break;
        }
        echo "$a <br>";
        $a++;
    }
    echo "<hr>";
    $b=1;
    while($b<=5){
        if($b==4){
            $b++;
            continue;
        }
        echo "$b <br>";
        $b++;
    }
    echo "<hr>";


    for($dita=1;$dita<=10;$dita++){
        echo "sot eshte dita e $dita e pushimit<br>";
    }
    echo "sot rifilluat punen";
    echo "<hr>";


    $shuma=0;
    $kursimi=150;
    for($muaji=1;$muaji<=12;$muaji++){
        $shuma+=$kursimi;
        echo "Muaji $muaji: keni kursyer $shuma  EURO<br>";
    }
    echo "<hr>";

    $ditaa=1;
    for($liter=2;$liter<=40;$liter+=2){
        echo "dita e $dita: ju keni pire $liter uje <br>";
        $dita++;
    }
    echo "<hr>";


    for($ditaaa=1;$ditaaa<=7;$ditaaa++){
        switch($ditaaa){
            case 1: echo "sot e hane:keni ushtrime ne fitnes<br>";
            break;
            case 2: echo "sot e marte:keni pushim<br>"; 
            break;
            case 3: echo "sot e merkure:keni ushtrime ne fitnes<br>";
            break;
            case 4: echo "sot e enjete:keni pushim<br>"; 
            break;
            case 5: echo "sot e premte:keni ushtrime ne fitnes<br>";
            break;
            case 6: echo "sot e shtune:keni pushim<br>";
            break;
            case 7: echo "sot e diele:keni ushtrime ne fitnes<br>";
            break; 
        }
    }
    echo "<hr>";


    for($ditaaaa=1;$ditaaaa<=5;$ditaaaa++){
        switch($ditaaaa){
            case 1: echo "sot e hane:kemi file pule<br>";
            break;
            case 2: echo "sot e marte:kemi pasta<br>"; 
            break;
            case 3: echo "sot e merkure:kemi mish lope<br>";
            break;
            case 4: echo "sot e enjete:kemi mish dele<br>"; 
            break;
            case 5: echo "sot e premte:kemi pica margarita<br>";
            break;
        }
    }
    echo "<hr>";


    $arreja=array(1,2,3,4);

    echo count($arreja);

    echo "<br>$arreja[0]";
    echo "<br>$arreja[1]";
    echo "<br>$arreja[2]";
    echo "<br>$arreja[3]";
    echo "<hr>";
    foreach($arreja as $f){
        echo "$f<br>";
    }
    ?>
</body>
</html>