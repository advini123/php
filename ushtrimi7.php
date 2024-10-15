<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $personi=["anisa"=>"programere","fjolla"=>"ingjiniere","bleron"=>"programeri","joni"=>"piloti","advin"=>"biznismeni"];
    krsort($personi);
    foreach($personi as $x=>$y){
        echo "ju jeni $x dhe profesioni juaj eshte $y <br>";
    }
    echo"<hr>";
    
    $data=["emri"=>"florian","mosha"=>31,"profesioni"=>"ingjinier"];
    ksort($data);
    echo "te dhenat tuaja jan:<br>";
    foreach($data as $x=>$y){
        echo "$x-$y<br>";
    }
    if("emri">5 and $data["mosha"]>20 and  $data["profesioni"]=="ingjinier "){
        echo "emri juaj ka me shume se 5 karaktere,jeni mbi moshen 20 vjeqare edhe jeni ingjinier ";
    }
    else{
        echo "te dhenat nuk jan te sakta";
    }
    echo"<hr>";

    $r=[["a"=>"b","c"=>"d","e"=>"f"],["h"=>"i","g"=>"k","l"=>"m"]];
    $ii=7;
    foreach($r as $y){
        $d=1;
        foreach($y as$z=>$t){
            echo "$ii.$d $z dhe $t<br>";

            $d+=2;
        }
        $ii++;
    }
    echo"<hr>";

    function f1($a,$b,$c){
        if($a>$b and $a>$c){echo "numri i $a eshte me i madhe se numri $b dhe $c";}
        elseif($a<$b and $a>$c){echo "numri $a eshte me i vogel se numri $b dhe me i madh se $c";}
        elseif($a>$b and $a<$c){echo "numri $a eshte me i madh se numri $b dhe me i vogel se $c";}
    }
    f1(7,2,8);
    echo"<hr>";
    ?>
</body>
</html>