<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $aa=[2,4,9,14];
    $bb=array_map(function ($x){
        return $x+5;
    },$aa);
    foreach($bb as $y){
        echo "$y";
    }
    echo "<hr>";


    $emrat=["florian","ardit","lis","leonard"];
    $emrat2=array_map(
        function ($y){
            return $y."a";
        },$emrat
    );
    foreach($emrat2 as $x){
        echo "$x";
    }
    echo "<hr>";

    $a=[23,45,3,21];
    $b=[46,45,11,23];
    $c=array_map(function($c,$d){
        return($c+$d);
    },$a,$b);
    foreach($c as $x){
        echo "$x";
    }
    echo "<hr>";


    echo "numrat tek te matrices jane: ";
    $d=[4,8,17,29,89];
    $e=array_filter($d,function($x){
        return $x%2==1;
    });
    foreach($e as $y){
        echo "$y";
    };
    echo "<hr>";

    $emratt=["fjolla","kaltrina","dorita"];
    $emratt2=array_filter($emratt,function($x){
        $y=strlen($x);
        return $y>6;
    });
    foreach($emratt2 as $y){
        echo "$y";
    };
    echo "<hr>";
    

    $numratt=[78,56,89,14,7];
    $numratt2=array_filter($numratt,function($x){
        return $x>50;
    });
    sort($numratt2);
    foreach($numratt2 as $x){
        echo "$x";
    }
    echo "<hr>";


    $emri="lipjani";
    if(is_string($emri)){
        echo "variabla eshte string";
    }
    else{
        echo "variabla nuk eshte string";
    }
    echo "<hr>";


    $qyteti="lipjani";
    if(is_string($qyteti)and strlen(trim($qyteti))>0){
        echo "variabla eshte string dhe ka karaktere";
    }
    else{
        echo "variabla ose nuk eshte string ose nuk ka karaktere bremda saj";
    }
    echo "<hr>";


    $numri2=88;
    if(is_numeric($numri2)){
        echo "variabla eshte numer";
    }
    else{
        echo "variabla nuk eshte numer";
    }
    echo "<hr>";

    
    $hide="kosova";
    if(is_numeric($hide)){
        echo "vlera e variables eshte numer";
    }
    elseif(is_string($hide)){
        echo "vlera e variables eshte string";
    }
    else{
        echo "vlera e variables nuk eshte as string as numer";
    }
    echo "<hr>";

    
    $numrii=129;
    if(is_int($numrii)){
        echo "numri eshte i plot";
    }
    else{
        echo "numri eshte me preseje dhjetore";
    }
    echo "<hr>";

    ?>
</body>
</html>