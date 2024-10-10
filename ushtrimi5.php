<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=["nr"=>1,"nr2"=>2,"nr3"=>3];
    echo $x["nr2"];
    echo "<hr>";

    echo "numri i elementeve te matrices eshte: ".count($x);
    echo "<hr>";

    $x["nr4"]=4;
    foreach($x as $y){
        echo "$y";
    }
    echo "<hr>";

    foreach($x as $y=>$z){
        echo "$y : $z";
    }
    echo "<hr>";

    $y=["T"=>23,"D"=>72,"H"=>20,"O"=>86];
    asort($y);
    foreach($y as $x=>$z){
        echo "$x : $z,";
    }
    echo "<hr>";

    arsort($y);
    foreach($y as $x=>$z){
        echo "$x : $z,";
    }
    echo "<hr>";
 
    krsort($y);
    foreach($y as $x=>$z){
        echo "$x : $z,";
    }
    echo "<hr>";
 
    $z=[[1,2,3],[4,5,6],[7,8,9]];
    echo $z[1][2];
    echo count($z[0])+count($z[1])+count($z[2]);
    echo "<hr>";

    foreach($z as $x){
        foreach($x as $y){
        echo "$y,";
        }
    }
    $a=array_sum($z[0]);
    $b=array_sum($z[1]);
    $c=array_sum($z[2]);
    $shumatotale=$a+$b+$c;
    echo "shuma totale e elementeve te array multidimensional eshte: ".$shumatotale;
    echo "<hr>";

    $ab=[220,650,1000,180];
    $ac=in_array(1000,$ab);
    if($ac==1){
        echo "ne matric gjendet numri 1000";
    }
    echo "<hr>";

    $librat=["html","css","jovascript","php","sql"];
    $librat[]="angullar";
    unset($librat[2]);
    echo count($librat);
    echo sort($librat);
    echo "<hr>";
    foreach($librat as $x){
        echo "$x, ";
    }
    echo "<hr>";
    ?>
</body>
</html>