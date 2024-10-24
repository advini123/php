<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $numri1=48.2;

    if(is_numeric($numri1) and (is_int($numri1) or is_float($numri1))){
        if(is_int($numri1)){
            echo "numri eshte numer i plot";
        }
        else{
            echo "numri eshte numer me presje";
        }
    }
    else{
        echo "variabla nuk eshte e tipit number";
    }
    echo "<hr>";

    $qyteti="lipjan";
    $qyteti2=preg_match("/[a-z]/",$qyteti);
    if($qyteti2==true){
        echo "ne variabel ka shkronja te vogla";
    }
    else{
        echo "ne variabel nuk ka shkronja te vogla";
    }
    echo "<hr>";

    $qyteti3="lipjani";
    $qyteti4=preg_match("/[A-Z]/",$qyteti3);
    if($qyteti4==true){
        echo "variabla ka shkronja te medha";
    }
    else{
        echo strtoupper($qyteti3);
    }
    echo "<hr>";

    
    function f1(...$x){
        $shuma=0;
        foreach($x as $y){
            $shuma+=$y;
        }
        echo "shuma rotale e elemnteve te arry eshte: $shuma";
    }
    f1(32,54,13,75,39);
    echo "<hr>";

    $passwordi="sdsf707873343-=4324";
    if(preg_match("/[a-z]/",$passwordi) and preg_match("/[A-Z]/",$passwordi) and preg_match("/[0-9]/") and preg_match("/[^a-zA-Z0-9]/",$passwordi) and strlen($passwordi)>=8){
        echo "password i fort";
    }
    else{
        echo "passwordi i dobt";
    }
    echo "<hr>";
    ?>
</body>
</html>