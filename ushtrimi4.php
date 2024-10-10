<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=#, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=array(2,4,6,8);
    echo $x[1];
    echo "<hr>";
    $y=count($x)-1;
    echo "elementi i fundit i matrices x eshte:" .$x[$y];
    echo "<hr>";

    foreach($x as $a){
        echo "$a";
    }
    echo "<hr>";
    foreach($x as $a){
        echo "PHP";
    }
    echo "<hr>";

    $zz=array(1,3,5,7);
    $zza=array_reverse($zz);
    foreach($zz as $a){
        echo "$a";
    }
    echo "<hr>";

    $aa=array(1,2,3,4);
    $bb=array(5,6,7,8);
    $cc=array_merge($aa,$bb);
    foreach($cc as $c){
        echo "$c";
    }
    echo "<hr>";

    $dd=array("p","a","t","f","l");
    sort($dd);
    foreach($dd as $d){
        echo "$d";
    }
    echo "<hr>";

    $ee=array(72,18,94,2,37);
    sort($ee);
    $reverse=array_reverse($ee);
    foreach($ee as $e){
        echo "$e";
    }
    echo "<hr>";

    $ff=array(9,8,5,3,1);
    array_pop($ff);
    foreach($ff as $y){
        echo "$y";
    }
    echo "<hr>";

    array_push($ff,8,10,100);
    foreach($ff as $y){
        echo "$y";
    }
    echo "<hr>";

    array_shift($ff);
    foreach($ff as $y){
        echo "$y";
    }
    echo "<hr>";

    array_unshift($ff,1,2,3,4,5);
    foreach($ff as $y){
        echo "$y";
    }
    echo "<hr>";

    $gg=array(9,8,7,6,5,4,3,2,1);
    for($i=1; $i<=6; $i++){
        array_pop($gg);
    }
    foreach($gg as $z){
        echo "$z";
    }
    echo "<hr>";

    $hh=array(1,3,5,7,9,11,13,15);
    foreach($hh as $x){
        array_unshift($hh,1);
    }
    foreach($hh as $y){
        echo "$y";
    }
    echo "<hr>";

    $ll=array(7,2,3,8,9,5,6,1);
    for($x=0; $x<=4; $x+=2){
        array_splice($ll,$x,1,$x);
    }
    foreach($ll as $y){
        echo "$y";
    }
    echo "<hr>";

    $kk=array(7,2,3,8,4);
    $nn=array_sum($kk);
    echo "$nn";
    echo "<hr>";

   
    ?>
</body>
</html>