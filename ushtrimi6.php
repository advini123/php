<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=[function(){
        $b=3;
        $c=7;
        $d=$b*$c;
        return $d;
    },7,18,92];

    echo $a[0]();
    echo "<hr>";
    
    $a=[function(){
        return "hello";
    },
    function(){
        return "world";
    },
    function(){
        return "from kosova";
    }];

    echo $a[0]()." ".$a[1]()." ".$a[2]();
    echo "<hr>";

    foreach($a as $x){
        echo $x()."<br>";
    }
    echo "<hr>";
    
    $c=[3,5,7,9,function(){
        return "hello";
    }];
    foreach ($c as $x){
        if(is_callable($x)){
            echo $x(),"<br>";
        }
        else{
            echo $x."<br>";
        }
    }
    echo "<hr>";

    $shpenzimet=[250,125,380,400,220,180,348,415,319,210,180,400];
    $shpenzimet_totale=array_sum($shpenzimet);
    echo "shpezimet total vjetore jane: $shpenzimet_totale<br>";
    echo "shpezimet total vjetore jane:".($shpenzimet_totale/12)."euro";
    echo "<hr>";

    $maximumi=max($shpenzimet);
    $minimum=min($shpenzimet);
    echo "shpenzimet minimale eshte: $minimum kurse shpenzimoi maksimum eshtre $maximumi <br>";
    echo "<hr>";

    rsort($shpenzimet);
    echo "shpenximet bga me e madhja tek me i vogliu jane:";
    foreach($shpenzimet as $x){
        echo $x." ";
    }
    echo "<hr>";
    unset($shpenzimet[0]);
    foreach($shpenzimet as $x){
        echo $x." ";
    }
    echo "<hr>";


    ?>
</body>
</html>